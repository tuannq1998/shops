<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::whereRaw(1);
        $users = $users->orderBy('id', 'DESC')->paginate(10);

        $viewData = [
            'users' => $users
        ];

        return view('admin.user.index', $viewData);
    }
}
