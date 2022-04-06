<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
public function AllNotification(){

    $notifications = Notification::all();
    
    return view('backend.notification.notification_view',compact('notifications'));

}


public function ADDNotification(){

    return view('backend.notification.notification_add');


}


public function StoreNotification(Request $request){

   
    $request->validate([
        'title' => 'required',
        'message'=> 'required',
        'date'=>'required'
    ]);
    Notification::insert([
        'title' => $request->title,
        'message' => $request->message,
        'date' => $request->date,

    ]);

    $notification = array(
        'message' => 'Notification Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.notification')->with($notification);


}

public function DeleteNotification($id){

    Notification::findOrFail($id)->delete();

    $notification = array(
            'message' => 'Notification Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);


}

public function UpdateNotification(Request $request){

    $notify_id = $request->id;

    Notification::findOrFail($notify_id)->update([
        'title' => $request->title,
        'message' => $request->message,
        'date' => $request->date,

    ]);

    $notification = array(
        'message' => 'Notification Updated  Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.notification')->with($notification);

    



}







}
