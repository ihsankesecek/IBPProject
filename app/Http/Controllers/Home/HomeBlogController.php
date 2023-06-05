<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeBlogController extends Controller
{
    public function index(){
        $blog_data = Post::orderBy('id','desc')->paginate(2);
       
        return view("front.blog", compact('blog_data'));
    }
    public function single_post($id){

        $single_post_data = Post::where('id',$id)->first();
        $single_post_data->total_view = $single_post_data->total_view + 1;
        $single_post_data->update();
        return view('front.post',compact('single_post_data'));
        
    }
}
