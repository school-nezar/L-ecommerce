<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteInfo;

class SiteInfoController extends Controller
{
    public function AllInfornation(){

        $siteinfo = SiteInfo::find(1);
        return view('backend.siteinfo.siteinfo_update',compact('siteinfo'));


    }
}
