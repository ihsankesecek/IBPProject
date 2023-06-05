@extends('admin.layouts.app')

@section('heading', 'Add Room')
@section('top_right_button')
<a href="{{ route('admin_rooms_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i>View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_rooms_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                                    <input type="file" class="form-control" name="featured_photo" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Name *</label>
                                                    <input type="text" class="form-control" name="name" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Description </label>
                                                    <textarea name="description" class="form-control snote" id="" cols="30" rows="10"></textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Price </label>
                                                    <input type="text" class="form-control" name="price" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Total Rooms</label>
                                                    <input type="text" class="form-control" name="total_rooms" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Amenities</label>
                                                    @php $i=0 @endphp
                                                    @foreach($amenities as $item)
                                                    @php $i++ @endphp
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $item->id }}" name="arr_amenities[]" id="flexCheckDefault{{ $i }}">
                                                    <label class="form-check-label" for="flexCheckDefault{{ $i }}">
                                                        {{ $item->name }}
                                                    </label>
                                                    </div>
                                                    @endforeach
                                                    
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Room size</label>
                                                    <input type="text" class="form-control" name="size" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Beds</label>
                                                    <input type="text" class="form-control" name="total_beds" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Bathrooms</label>
                                                    <input type="text" class="form-control" name="total_bathrooms" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Balconies</label>
                                                    <input type="text" class="form-control" name="total_balconies" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Guests</label>
                                                    <input type="text" class="form-control" name="total_guests" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Video ID</label>
                                                    <input type="text" class="form-control" name="video_id" value="">
                                                </div>

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Add</button>
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