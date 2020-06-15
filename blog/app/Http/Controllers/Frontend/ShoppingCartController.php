<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShoppingCartController extends Controller
{
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('name', 'id', 'price', 'sale', 'avatar')->find($id);
        if (!$product) return redirect('/');
        $price = $product->price;
        if ($product->sale) {
            $price = $price * (100 - $product->sale) / 100;
        }
        \Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 550,
            'options' => [
                'avatar' => $product->avatar,
                'sale' => $product->sale,
                'price_old' => $product->price
            ],
        ]);
        return redirect()->back();
    }

    public function listShoppingCart()
    {
        $products = \Cart::content();
        return view('frontend.pages.shopping_cart.index', compact('products'));
    }

    public function deleteProduct($key)
    {
        \Cart::remove($key);
        return redirect()->back();
    }

    /**
     * Form thanh toan
     */
    public function formPay()
    {
        $products = \Cart::content();
        return view('frontend.pages.shopping_cart.pay', compact('products'));
    }

    /**
     * Luu thong tin gio hang
     */
    public function saveInfoShoppingCart(Request $request)
    {
        $totalMoney = str_replace(',','',\Cart::subtotal(0,3));
        $transactionId = Transaction::insertGetId([
            'user_id' => get_data_user('web'),
            'total' => (int)$totalMoney,
            'name' => $request->name,
            'note' => $request->note,
            'address' => $request->address,
            'phone' => $request->phone,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        if ($transactionId) {
            $products = \Cart::content();
            foreach ($products as $product) {
                Order::insert([
                    'transaction_id' => $transactionId,
                    'product_id' => $product->id,
                    'qty' => $product->qty,
                    'price' => $product->options->price_old,
                    'sale' => $product->options->sale,
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ]);
            }
        }
       \Cart::destroy();
        return redirect('/');
    }
}
