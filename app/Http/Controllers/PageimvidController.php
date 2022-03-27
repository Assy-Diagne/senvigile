<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use App\Models\Video;
use Illuminate\Http\Request;

class PageimvidController extends Controller
{
    protected function rules()
    {



            return  [
                'radio' => 'required_with:radio2',
                
            ];
        
    
    

}







    public function imvid()
    {
        $videos = Video::all();

        $alarmes = Alarm::all();

        return view('PageImVid',compact('videos','alarmes'));
    }
}
