<?php

namespace App\Http\Controllers\Frontend;

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

            $viewData = [
                'products'=>$products
            ];
            return view('frontend.pages.product.index', $viewData);
        }
        return redirect('/');
    }

}
