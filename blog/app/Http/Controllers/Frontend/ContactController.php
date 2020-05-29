<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function getContact()
    {
        return view('frontend.pages.contact.index');
    }

    public function  saveContact(Request $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = $data['updated_at'] = Carbon::now();
        Contact::insert($data);

        return redirect()->back();
    }
}
