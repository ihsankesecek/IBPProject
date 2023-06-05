<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AdminPageController extends Controller
{
    public function index(){
        $page_data = Page::where('id',1)->first();
        return view('admin.page_about', compact('page_data'));

    }
    public function update(Request $request){

        $about_page_data = Page::get()->where('id',1)->first(); 
        $about_page_data->about_heading = $request->about_heading;

        $about_page_data->about_content = $request->about_content;

        $about_page_data->update();

        return redirect()->back()->with("success","The informations has been changed.");

    }
}
