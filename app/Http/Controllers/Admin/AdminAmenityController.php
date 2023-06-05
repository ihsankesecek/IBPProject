<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Amenity;

class AdminAmenityController extends Controller
{
    public function index(){
        $amenities = Amenity::get();
        return view('admin.amenity_view', compact('amenities'));
    }

    public function add(){
        return view('admin.amenity_add');
    }
    public function store(Request $request){

        $amenity = new Amenity();
        $amenity->name = $request->name;
        $amenity->save();
        return redirect()->back()->with("success","New ammenity has been added.");

    }

    public function edit($id){
        $ame_data = Amenity::get()->where('id',$id)->first();
        return view('admin.amenity_edit',compact('ame_data'));
    }

    public function update(Request $request, $id){
       
        $obj = Amenity::get()->where('id',$id)->first();

        $obj->name = $request->name;
        $obj->update();
        return redirect()->back()->with("success","Ammenity has been updated.");

    }

    public function delete($id){
        $ame_data = Amenity::where('id',$id)->first();
        $ame_data->delete();
        return redirect()->back()->with("success","Amenity is deleted successfully!");

    }

}
