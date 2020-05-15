<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        $viewData = [
            'categories' => $categories
        ];
        return view('admin.category.index', $viewData);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'icon' => $request->icon,
            'title_seo' => $request->title_seo ? $request->title_seo : $request->name,
            'desc_seo' => $request->desc_seo ? $request->desc_seo : $request->name,
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.update', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'icon' => $request->icon,
            'title_seo' => $request->title_seo,
            'desc_seo' => $request->desc_seo,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function active($id)
    {
        $category = Category::find($id);
        $category->active = !$category->active;
        $category->save();
        return redirect()->back();
    }

    public function hot($id)
    {
        $category = Category::find($id);
        $category->hot = !$category->hot;
        $category->save();
        return redirect()->back();
    }
}
