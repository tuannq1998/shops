<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $productHot = Product::where([
            'hot' => Product::HOT,
            'active' => Product::STATUS_SHOWS
        ])
            ->orderBy('id')
            ->limit(4)
            ->select('id', 'name', 'slug', 'price', 'avatar')
            ->get();

        $productNew = Product::where('active', 1)
            ->orderBy('id')
            ->limit(4)
            ->select('id', 'name', 'slug', 'price', 'avatar')
            ->get();
        $articleNew = Article::where('active', 1)
            ->orderBy('id')
            ->limit(3)
            ->get();
        $viewData = [
            'articleNew'=>$articleNew,
            'productHot'=>$productHot,
            'productNew'=>$productNew
        ];
        return view('frontend.pages.home.index', $viewData);
    }
}
