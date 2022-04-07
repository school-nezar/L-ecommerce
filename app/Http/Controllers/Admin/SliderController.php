<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

class SliderController extends Controller
{
    public function AllSliders(){

        $slider = HomeSlider::all();
        return view('backend.slider.slider_view',compact('slider'));
      

    }
}
