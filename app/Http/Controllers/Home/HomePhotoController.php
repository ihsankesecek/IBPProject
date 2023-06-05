<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class HomePhotoController extends Controller
{
    public function index(){
        $photo_all = Photo::orderBy('id','desc')->paginate(2);
        return view("front.photo_gallery", compact('photo_all'));

    }
}
