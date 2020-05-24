<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\admin\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::paginate(10);
        $viewData = [
            'articles' => $articles
        ];
        return view('admin.article.index', $viewData);
    }
    public function create()
    {
        return view('admin.article.create');
    }
    public function store(ArticleRequest $request)
    {
        $file['name'] = "";
        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar');
        }
        Article::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'description' => $request->description,
            'contents' => $request->contents,
            'avatar' => $file['name'],
            'title_seo' => $request->title_seo,
            'description_seo' => $request->description_seo,
        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.update', compact('article'));
    }
    public function update(ArticleRequest $request, $id)
    {
        $file['name'] = "";
        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar');
        }
        $article = Article::findOrFail($id);
        $article->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'description' => $request->description,
            'contents' => $request->contents,
            'avatar' => $file['name'],
            'title_seo' => $request->title_seo,
            'description_seo' => $request->description_seo,
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Article::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function active($id)
    {
        $article = Article::find($id);
        $article->active = !$article->active;
        $article->save();
        return redirect()->back();
    }
}
