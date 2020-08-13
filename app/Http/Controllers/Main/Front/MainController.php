<?php

namespace App\Http\Controllers\Main\Front;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {

        $sliders = Slider::all();
        return view(('Main.Front.index'),compact('sliders'));
    }
}
