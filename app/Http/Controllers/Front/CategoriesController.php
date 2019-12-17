<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Video;

class CategoriesController extends Controller
{
    public function show(int $category)
    {
        if ($category == 0) {
            $videos = Video::paginate(50);
            $title = trans('videos.all');
        } else {
            /** @var Category $categoryModel */
            $categoryModel = Category::findOrFail($category);
            $title = $categoryModel->title;
            $videos = $categoryModel->videos()->paginate(50);
        }

        return view('pages.front.category', [
            'categories' => Category::all(),
            'videos' => $videos,
            'title' => $title,
        ]);
    }
}
