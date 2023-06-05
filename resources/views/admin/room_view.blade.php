@extends('admin.layouts.app')

@section('heading', 'View Rooms')

@section('top_right_button')
<a href="{{ route('admin_rooms_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
@endsection
@section('main_content')
<section class="section">
                <div class="section-header">
                    <h1>Table</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>Price (per night)</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @php $i=0; @endphp
                                                @foreach($rooms as $row)
                                                @php $i++; @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('uploads/'.$row->featured_photo) }}" alt="" class="w_200"></td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->price }}</td>
                                                <td class="pt_10 pb_10">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $i }}">Detail</button>
                                                <a href="{{ route('admin_rooms_edit',$row->id) }}" class="btn btn-info" >Edit</a>
                                                <a href="{{ route('admin_room_gallery',$row->id) }}" class="btn btn-success" >Photo Gallery</a>
                                                    <a href="{{ route('admin_rooms_delete',$row->id) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                               
                                            </tr>
                                            <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Photo</label></div>
                                                                    <img src="{{ asset('uploads/'.$row->featured_photo) }}" class="w_200" alt="">
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Name</label></div>
                                                                    <div class="col-md-8">{{ $row->name }}</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Description</label></div>
                                                                    <div class="col-md-8"> {!! $row->description !!}</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Price</label></div>
                                                                    <div class="col-md-8">{{ $row->price }}</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Amenities</label></div>
                                                                    <div class="col-md-8">
                                                                        @php
                                                                            $arr = explode(',', $row->amenities);
                                                                            for($j = 0; $j < count($arr); $j++){
                                                                             $temp_row = \App\Models\Amenity::get()->where('id',$arr[$j])->first();
                                                                             if($temp_row){
                                                                                     echo $temp_row->name.'<br>';
                                                                                 }
                                                                            }
                                                                        @endphp
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Size</label></div>
                                                                    <div class="col-md-8">{{ $row->size }}</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Total Beds</label></div>
                                                                    <div class="col-md-8">{{ $row->total_beds }}</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Total Balconies</label></div>
                                                                    <div class="col-md-8">{{ $row->total_balconies }}</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Total Guests</label></div>
                                                                    <div class="col-md-8">{{ $row->total_guests }}</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Video</label></div>
                                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $row->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @endsection










