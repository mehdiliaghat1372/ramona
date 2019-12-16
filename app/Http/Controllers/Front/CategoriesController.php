<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        return view('pages.front.category', [
            'categories' => Category::all(),
            'category' => $category,
        ]);
    }
}
