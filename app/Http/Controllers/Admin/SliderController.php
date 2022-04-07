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



    public function ADDSlider(){
        return view('backend.slider.slider_add');

    }


    public function StoreSlider(Request $request){
        $request->validate([
            'slider_image' => 'required',
         
        ]);

        $file = $request->file('slider_image');
        // $file=avatar-1.png
        $filename = date('YmdHi').'.'.$file->getClientOriginalExtension();

        //$filename=26.3.2022.png

        $file->move(public_path('upload/slider'), $filename);

        $save_url = 'http://127.0.0.1:8000/upload/slider/'.$filename ;  

        HomeSlider::insert([
        
            'slider_image' =>  $save_url,
            'created_at'=>Now()
        ]);

        $notification = array(
            'message' => 'Slider Inserted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('all.sliders')->with($notification);
     

    }



    public function DeleteSlider($id){

        HomeSlider::findOrFail($id)->delete();
        $notification = array(
                'message' => 'Slider Deleted Successfully',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);


    }




}
