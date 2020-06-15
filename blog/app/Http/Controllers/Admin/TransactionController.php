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
        if($request->ajax())
        {
            $orders = Order::where('transaction_id', $id)->get();

            $html = view("admin.components.order", compact('orders'))->render();
            return response([
                'html'=>$html
            ]);
        }
    }
}
