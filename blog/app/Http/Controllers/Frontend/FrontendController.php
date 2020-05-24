<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function __construct(){
        $categories = Category::all();
        View::share('categories', $categories);
    }
}
