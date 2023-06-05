<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Faq;

class AdminFaqController extends Controller
{
    public function index(){
        $faq = Faq::get();
        return view('admin.faq_view', compact('faq'));
    }
    public function add(){
        return view('admin.faq_add');
    }
    public function store(Request $request){
        $request->validate([
            'question' =>'required'
        ]);
        $obj = new Faq();
        
        $obj->question = $request->question;
        $obj->answer = $request->answer;
        $obj->save();

        return redirect()->back()->with("success","New FAQ is added successfully!");

    }

    public function edit($id){
        $faq_data = Faq::where('id',$id)->first();
        return view('admin.faq_edit', compact("faq_data"));
    }
    public function update(Request $request,$id){
        $obj = Faq::where('id',$id)->first();
       
        $obj->question = $request->question;
        $obj->answer = $request->answer;
        $obj->update();
        return redirect()->back()->with("success","New FAQ is updated successfully!");
      

    }
    public function delete($id){
        $faq_data = Faq::where('id',$id)->first();
        $faq_data->delete();
        return redirect()->back()->with("success","New FAQ is deleted successfully!");

    }
}
