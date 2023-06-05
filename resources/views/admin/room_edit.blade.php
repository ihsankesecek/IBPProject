@extends('admin.layouts.app')

@section('heading', 'Edit Room')
@section('top_right_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary">View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_rooms_update',$room_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                                <td><img src="{{ asset('uploads/'.$room_data->featured_photo) }}" alt="" class="w_400"></td>
                                                    <input type="file" class="form-control m-3" name="featured_photo" value="{{ asset('uploads/'.$room_data->featured_photo) }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Name *</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $room_data->name }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Description </label>
                                                    <textarea name="description" class="form-control snote" id="" cols="30" rows="10">{{ $room_data->description }}</textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Price </label>
                                                    <input type="text" class="form-control" name="price" value="{{ $room_data->price }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Total Rooms </label>
                                                    <input type="text" class="form-control" name="total_rooms" value="{{ $room_data->total_rooms }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Amenities</label>
                                                    @php $i=0 @endphp
                                                    @foreach($amenities as $item)

                                                    @if(in_array($item->id,$existing_amenities))
                                                    @php 
                                                        $selected_type = 'checked';                                                    
                                                    @endphp

                                                    @else 
                                                    @php 
                                                        $selected_type = '';                                                    
                                                    @endphp
                                                    @endif

                                                    @php $i++ @endphp
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $item->id }}" {{ $selected_type }} name="arr_amenities[]" id="flexCheckDefault{{ $i }}">
                                                    <label class="form-check-label" for="flexCheckDefault{{ $i }}">
                                                        {{ $item->name }}
                                                    </label>
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Room size</label>
                                                    <input type="text" class="form-control" name="size" value="{{ $room_data->size }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Beds</label>
                                                    <input type="text" class="form-control" name="total_beds" value="{{ $room_data->total_beds }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Bathrooms</label>
                                                    <input type="text" class="form-control" name="total_bathrooms" value="{{ $room_data->total_bathrooms }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Balconies</label>
                                                    <input type="text" class="form-control" name="total_balconies" value="{{ $room_data->total_balconies }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Guests</label>
                                                    <input type="text" class="form-control" name="total_guests" value="{{ $room_data->total_guests }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Video ID</label>
                                                    <input type="text" class="form-control" name="video_id" value="{{ $room_data->video_id }}">
                                                </div>

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endsection