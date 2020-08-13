<?php

namespace App\Http\Controllers\Main\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MongoDB\Driver\Session;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Main.Admin.index');
    }
}
