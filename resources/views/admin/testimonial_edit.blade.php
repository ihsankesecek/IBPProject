@extends('admin.layouts.app')

@section('heading', 'Edit Testimonial')
@section('top_right_button')
<a href="{{ route('admin_testimonial_view') }}" class="btn btn-primary">View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_testimonial_update',$testimonial_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                        <img src="{{ asset('uploads/'.$testimonial_data->photo) }}" alt="" class="w_200">
                                                    <input type="file" class="form-control m-3" name="photo" value="{{ asset('uploads/'.$testimonial_data->photo) }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Name *</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $testimonial_data->name }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Designation </label>
                                                    <input type="text" class="form-control" name="designation" value="{{ $testimonial_data->designation }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Comment </label>
                                                    <input type="text" class="form-control" name="comment" value="{{ $testimonial_data->comment }}">
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