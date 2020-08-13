<?php

namespace App\Http\Controllers\Main\Front;

use App\Models\Contact_Us;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('Main.Front.contact_us.index');
    }

    public function store()
    {
        $contact_data=[
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'message' => request()->input('message'),
        ];
        Contact_Us::create($contact_data);
        return view ('Main.Front.contact_us.store');
    }
}
