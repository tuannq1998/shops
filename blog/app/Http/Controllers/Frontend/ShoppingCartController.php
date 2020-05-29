<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShoppingCartController extends Controller
{
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('name', 'id', 'price', 'sale', 'avatar')->find($id);
        if (!$product) return redirect('/');
        \Cart::add([
            'id' => '$id',
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 550,
            'options' => ['avatar' => $product->avatar]]);
        return redirect()->back();
    }

    public function listShoppingCart()
    {
        $products = \Cart::content();
        return view('frontend.pages.shopping_cart.index', compact('products'));
    }

    public function formPay()
    {
        return view('frontend.pages.shopping_cart.pay');
    }
}
