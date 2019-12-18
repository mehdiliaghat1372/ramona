<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;

class VideosController extends Controller
{
    public function show(Video $video)
    {
        return view('pages.front.video', [
            'categories' => Category::all(),
            'video' => $video,
        ]);
    }
}
