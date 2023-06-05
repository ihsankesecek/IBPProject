<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class HomeRoomController extends Controller
{
    public function single_room($id){

        $single_room_data = Room::with('rPhoto')->where('id',$id)->first();
        return view('front.room_detail',compact('single_room_data'));
        
    }
   
}