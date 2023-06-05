<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;


class AdminPrivacyPolicyController extends Controller
{
    public function index(){
        $privpol = PrivacyPolicy::get();
        return view('admin.privacypolicy', compact('privpol'));
    }

    public function add(){
        return view('admin.privacypolicy_add');
    }

    public function store(Request $request){
        $request->validate([
            'description' => 'required'
        ]);
        
        $obj = new PrivacyPolicy();
        $obj->description = $request->description;
        $obj->save();

        return redirect()->back()->with("success","PrivacyPolicy has been added.");
    }

}
