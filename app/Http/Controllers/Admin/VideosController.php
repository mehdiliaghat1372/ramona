<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;

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
        return view('pages.admin.videos-create');
    }
}
