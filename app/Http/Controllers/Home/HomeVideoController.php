<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class HomeVideoController extends Controller
{

    public function index(){
         $video_all = Video::paginate(2);
         return view("front.video_gallery", compact("video_all"));
    }
}
