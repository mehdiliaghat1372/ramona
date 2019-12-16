<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;

class VideosController extends Controller
{
    public function show()
    {
        return view('pages.front.video', [
            'categories' => Category::all(),
        ]);
    }
}
