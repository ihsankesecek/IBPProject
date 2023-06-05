<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Mail\Websitemail;
use Hash;
use Auth;

class AdminLoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function forget_password(){
        return view('admin.forget_password');
    }

    public function forget_password_submit(Request $request){

        $request->validate([
            'email' => 'required|email',
        ]);

        $admin_data = Admin::where('email', $request->email)->first();
        if(!$admin_data){
            return redirect()->back()->with('error', 'E-mail address not found');
        }

        $token = hash('sha256',time());

        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following links <br>';
        $message .= '<a href="'.$reset_link.'">Click here!</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->route('admin_login')->with('success','Please check your email!');

    }

    public function login_submit(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        
        if(Auth::guard('admin')->attempt($credential)){
            return redirect()->route('admin_home');
        }else{
            return redirect()->route('admin_login')->with('error', 'Information is not Correct! ');
        }

    }
    public function logout(){

        Auth::guard('admin')->logout();
        return redirect()->route('admin_login');
        
    }

    public function reset_password($token,$email){

        $admin_data = Admin::where('token',$token)->where('email',$email)->first();
        if(!$admin_data){
            return redirect()->route('admin_login');
        }

        return view('admin.reset-password');

    }

    public function reset_password_submit(Request $request){

        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ]);

        return redirect()->route("admin_login")->with("success","Password has been updated successfully");



    }
   



}
