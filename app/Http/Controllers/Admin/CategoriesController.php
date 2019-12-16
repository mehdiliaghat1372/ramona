<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('title')->paginate(10);

        return view('pages.admin.categories-index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('pages.admin.categories-create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', 'unique:categories'],
            'description' => ['required', 'max:1024'],
        ]);

        $category = new Category();
        $category->title = $request->input('title');
        $category->parent_id = null;
        $category->description = $request->input('description');
        $category->save();

        return back()->with('success', trans('categories.created'));
    }

    public function edit(Category $category)
    {
        return view('pages.admin.categories-edit', [
            'category' => $category,
        ]);
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Category $category, Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:255', Rule::unique('categories')->ignore($category->id)],
            'description' => ['required', 'max:1024'],
        ]);

        $category->update($request->only(['title', 'description']));

        return back()->with('success', trans('categories.updated'));
    }

    /**
     * @param int $category
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(int $category)
    {
        Category::whereId($category)->delete();

        return back()->with('success', trans('categories.deleted'));
    }
}
