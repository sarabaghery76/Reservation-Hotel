<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = Slider::all();
        return view(('Main.Admin.slider.index'),compact('sliders'));
    }

    public function delete($slider_id)
    {
        if($slider_id && ctype_digit($slider_id))
        {
            Slider::destroy($slider_id);
        }
    }

    public function edit($slider_id)
    {
        if($slider_id && ctype_digit($slider_id))
        {
            $sliderItem = Slider::find($slider_id);
            if ($sliderItem && $sliderItem instanceof Slider)
            {
                return view(('Main.Admin.slider.edit'),compact('sliderItem'));
            }
        }
    }

    public function update(SliderRequest $sliderRequest,$slider_id)
    {
        if($slider_id && ctype_digit($slider_id))
        {
            $new_photo_name = str_random(8).'.'.$sliderRequest->file('picture')->getClientOriginalExtension();

            $inputs = [
                'title'=> request()->input('title') ,
                'picture' => $new_photo_name,
            ];

            $s = $sliderRequest->file('picture')->move(public_path('images/slider'),$new_photo_name);

            $sliderItem = Slider::find($slider_id);
            $sliderItem->Update($inputs);
            return redirect()->route('admin.slider.index');
        }
    }

    public function store(SliderRequest $sliderRequest)
    {
        $photo_name = str_random(8).'.'.$sliderRequest->file('picture')->getClientOriginalExtension();

        $inputs = [
            'title' => request()->input('title') ,
            'picture' => $photo_name,
        ];
        $s = $sliderRequest->file('picture')->move(public_path('images/slider'),$photo_name);
        Slider::create($inputs);
        return redirect()->route('admin.slider.index');
    }

    public function insert()
    {
        return view(('Main.Admin.slider.insert'));
    }
}
