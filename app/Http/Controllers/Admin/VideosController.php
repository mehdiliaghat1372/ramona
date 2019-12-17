<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class VideosController extends Controller
{
    public function index()
    {
        return view('pages.admin.videos-index', [
            'videos' => Video::orderByDesc('id')->paginate(10),
        ]);
    }

    public function create()
    {
        return view('pages.admin.videos-create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', 'unique:videos'],
            'category' => ['nullable', 'exists:categories,id'],
            'content' => ['required', 'max:1024'],
            'url' => ['required', 'url', 'max:255'],
            'thumbnail' => ['required', 'url', 'max:255'],
        ]);

        $video = new Video();
        $video->author_id = auth()->id();
        $video->title = $request->input('title');
        $video->content = $request->input('content');
        $video->url = $request->input('url');
        $video->thumbnail = $request->input('thumbnail');
        $video->save();

        if ($request->input('category')) {
            $video->categories()->attach($request->input('category'));
        }

        return back()->with('success', trans('videos.created'));
    }

    public function edit(Video $video)
    {
        return view('pages.admin.videos-edit', [
            'video' => $video,
            'categories' => Category::all(),
        ]);
    }

    /**
     * @param Request $request
     * @param Video $video
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Video $video, Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', Rule::unique('videos')->ignore($video->id)],
            'category' => ['nullable', 'exists:categories,id'],
            'content' => ['required', 'max:1024'],
            'url' => ['required', 'url', 'max:255'],
            'thumbnail' => ['required', 'url', 'max:255'],
        ]);

        $video->title = $request->input('title');
        $video->content = $request->input('content');
        $video->url = $request->input('url');
        $video->thumbnail = $request->input('thumbnail');
        $video->save();

        if ($request->input('category')) {
            $video->categories()->attach($request->input('category'));
        } else {
            $video->categories()->detach();
        }

        return back()->with('success', trans('videos.updated'));
    }

    /**
     * @param $video
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy($video)
    {
        Video::whereId($video)->delete();

        return back()->with('success', trans('videos.deleted'));
    }
}
