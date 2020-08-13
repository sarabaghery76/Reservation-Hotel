<?php

namespace App\Http\Controllers\Main\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('Main.Front.about_us.index');
    }
}
