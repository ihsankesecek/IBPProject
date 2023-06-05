<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class HomeAboutController extends Controller
{
   public function index(){
    $page_data = Page::get()->where('id',1)->first();
    return view('front.about', compact('page_data'));
   }
}
