<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Video;
use App\Services\Reactions\Enums\ReactionTypes;
use App\Services\Reactions\Reactor;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class VideosController extends Controller
{
    public function show(Video $video)
    {
        /** @var Reactor $reactor */
        $reactor = app(Reactor::class);
        $reaction = $reactor->get($video->id, auth()->id() ?: 0);
        $reactions = $reactor->count($video->id);
        $likes = $reactions[ReactionTypes::LIKE] ?? 0;
        $dislikes = $reactions[ReactionTypes::DISLIKE] ?? 0;

        $comments = Comment::whereVideoId($video->id)
            ->whereIsAccepted(true)
            ->paginate(10);

        return view('pages.front.video', [
            'categories' => Category::all(),
            'video' => $video,
            'likes' => $likes,
            'dislikes' => $dislikes,
            'reaction' => $reaction,
            'comments' => $comments,
        ]);
    }

    /**
     * @param int $video
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function react(int $video, Request $request)
    {
        $this->validate($request, [
            'type' => ['required', 'in:' . join(',', ReactionTypes::values())],
        ]);

        $type = $request->input('type');

        /** @var Reactor $reactor */
        $reactor = app(Reactor::class);
        $reactor->set($video, $type, auth()->id() ?: 0);

        $reactions = $reactor->count($video);
        $likes = $reactions[ReactionTypes::LIKE] ?? 0;
        $dislikes = $reactions[ReactionTypes::DISLIKE] ?? 0;

        return new JsonResponse([
            'likes' => $likes,
            'dislikes' => $dislikes,
            'reaction' => $type,
        ]);
    }

    /**
     * @param int $video
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function comment(int $video, Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'content' => ['required'],
        ]);

        $comment = new Comment();
        $comment->is_accepted = false;
        $comment->user_id = auth()->id();
        $comment->video_id = $video;
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->content = $request->input('content');
        $comment->meta = json_encode([
            'session' => session()->getId(),
            'agent' => request()->userAgent(),
            'ip' => request()->ip(),
        ]);
        $comment->save();

        return back()->with('success', trans('comments.sent'));
    }
}
