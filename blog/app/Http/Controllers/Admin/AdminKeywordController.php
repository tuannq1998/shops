<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\admin\KeywordRequest;
use App\Models\Category;
use App\Models\Keyword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminKeywordController extends Controller
{
    public function index()
    {
        $keywords = Keyword::paginate(10);
        return view('admin.keyword.index', compact('keywords'));
    }

    public function create()
    {
        return view('admin.keyword.create');
    }

    public function store(KeywordRequest $request)
    {
        Keyword::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'desc' => $request->desc_seo ? $request->desc_seo : $request->name,
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $keyword = Keyword::findOrFail($id);
        return view('admin.keyword.create', compact('keyword'));
    }

    public function update(KeywordRequest $request, $id)
    {
        $keyword = Keyword::findOrFail($id);
        $keyword->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'desc' => $request->desc_seo,
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Keyword::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function hot($id)
    {
        $category = Keyword::find($id);
        $category->hot = !$category->hot;
        $category->save();
        return redirect()->back();
    }
}
