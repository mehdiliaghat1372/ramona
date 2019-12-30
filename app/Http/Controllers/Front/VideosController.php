<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use App\Services\Reactions\Enums\ReactionTypes;
use App\Services\Reactions\Reactor;
use Illuminate\Http\JsonResponse;
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

        return view('pages.front.video', [
            'categories' => Category::all(),
            'video' => $video,
            'likes' => $likes,
            'dislikes' => $dislikes,
            'reaction' => $reaction,
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
        $reactor->set($type, auth()->id() ?: 0, $video);

        $reactions = $reactor->count($video);
        $likes = $reactions[ReactionTypes::LIKE] ?? 0;
        $dislikes = $reactions[ReactionTypes::DISLIKE] ?? 0;

        return new JsonResponse([
            'likes' => $likes,
            'dislikes' => $dislikes,
            'reaction' => $type,
        ]);
    }
}
