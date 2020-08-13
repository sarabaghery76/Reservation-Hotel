<?php

namespace App\Http\Controllers\Main\Front;

use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RulesController extends Controller
{
    public function index()
    {
        $rules = Rule::all();
        return view('Main.Front.rules.index',compact('rules'));
    }
}
