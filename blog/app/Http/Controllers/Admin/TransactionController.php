<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::paginate(10);

        $viewData = [
            'transactions' => $transactions
        ];
        return view('admin.transaction.index', $viewData);
    }

    public function viewOrder(Request $request, $id)
    {
        if ($request->ajax()) {
            $orders = Order::with('product:id,name,slug,avatar')->where('transaction_id', $id)->get();

            $html = view("admin.components.order", compact('orders'))->render();
            return response([
                'html' => $html
            ]);
        }
    }

    public function deleteOrderItem(Request $request, $id){
        if ($request->ajax()) {
            $order = Order::find($id);
            if($order){
                $money = $order->qty * $order->price;

                \DB::table('transactions')
                    ->where('id', $order->transaction_id)
                    ->decrement('total', $money);
                $order->delete();
            }
            return response(['code'=>200]);
        }
    }

    public function delete($id)
    {
        $transaction = Transaction::findOrFail($id);
        if($transaction){
            $transaction->delete();
            \DB::table('orders')->where('transaction_id', $id)->delete();
        }
        return redirect()->back();
    }
}
