<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function listProduct(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        if($id = array_pop($url)){
            $products = Product::where([
                'category_id' =>$id,
                'active'=>Product::STATUS_SHOWS
            ])->orderBy('id', 'DESC')->paginate(10);

            $cateProduct = Category::find($id);
            $viewData = [
                'products'      => $products,
                'cateProduct'   => $cateProduct
            ];
            return view('frontend.pages.product.index', $viewData);
        }
        return redirect('/');
    }

}
