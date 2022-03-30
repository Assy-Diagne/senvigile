<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use App\Models\Video;
use Illuminate\Http\Request;
use DB;

class PageimvidController extends Controller
{
    



    public function imvid()
    {
        $videos = Video::all();

        $alarmes = Alarm::all();


        return view('PageImVid',compact('videos','alarmes'));
    }

   


}
