<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class VideosController extends Controller
{
    public function show()
    {
        return view('pages.front.video');
    }
}
