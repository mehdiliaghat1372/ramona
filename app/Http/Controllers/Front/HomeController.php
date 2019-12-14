<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    public function show()
    {
        return view('pages.front.home', [
            'categories' => Category::all()
        ]);
    }
}
