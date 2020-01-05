<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SlidesController extends Controller
{
    public function index()
    {
        return view('pages.admin.slides.index', [
            'slides' => Slide::all(),
        ]);
    }

    public function create()
    {
        return view('pages.admin.slides.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255'],
            'button' => ['required', 'max:16'],
            'image' => ['required', 'url'],
            'link' => ['required', 'url'],
            'description' => ['required', 'max:1024'],
        ]);

        $slide = new Slide();
        $slide->title = $request->input('title');
        $slide->button = $request->input('button');
        $slide->image = $request->input('image');
        $slide->link = $request->input('link');
        $slide->description = $request->input('description');
        $slide->save();

        return back()->with('success', trans('slides.created'));
    }

    public function edit(Slide $slide)
    {
        return view('pages.admin.slides.edit', [
            'slide' => $slide,
        ]);
    }

    /**
     * @param Slide $slide
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Slide $slide, Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255'],
            'button' => ['required', 'max:16'],
            'image' => ['required', 'url'],
            'link' => ['required', 'url'],
            'description' => ['required', 'max:1024'],
        ]);

        $slide->update($request->only([
            'title',
            'button',
            'image',
            'link',
            'description',
        ]));

        return back()->with('success', trans('slides.updated'));
    }

    /**
     * @param int $slide
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(int $slide)
    {
        Slide::whereId($slide)->delete();

        return back()->with('success', trans('slides.deleted'));
    }
}
