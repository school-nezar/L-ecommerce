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


}
