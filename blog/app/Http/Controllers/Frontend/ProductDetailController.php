<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Ramsey\Uuid\v1;

class ProductDetailController extends Controller
{
    public function productDetail(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);
        if($id = array_pop($url))
        {
            $productDetail = Product::where('active', Product::STATUS_SHOWS)->find($id);
            $viewData =[
                'productDetail'=>$productDetail
            ];
            return view('frontend.pages.product_detail.index');
        }
    }
}
