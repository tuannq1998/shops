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
            $product = Product::findOrFail($id);
            $viewData =[
                'product'=>$product
            ];
            return view('frontend.pages.product_detail.index', $viewData);
        }
        return redirect()->to('/');
    }
}
