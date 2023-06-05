<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class HomeFaqController extends Controller
{
    public function index(){
        $faq_data = Faq::get();
        return view('front.faq', compact('faq_data'));
    }
}
