<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Feature;
use App\Models\Testimonial;
use App\Models\Post;
use App\Models\Room;



class HomeController extends Controller
{
    public function index(){
        $slides = Slider::get();
        $features = Feature::get();
        $testimonials = Testimonial::get();
        $posts_all = Post::limit(3)->get();
        $room_data = Room::get();
        


        return view("front.home",compact('slides','features','testimonials','posts_all','room_data'));
    }
    
}
