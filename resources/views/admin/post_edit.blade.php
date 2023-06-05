@extends('admin.layouts.app')

@section('heading', 'Edit Post')
@section('top_right_button')
<a href="{{ route('admin_post_view') }}" class="btn btn-primary">View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_post_update',$post_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                        <img src="{{ asset('uploads/'.$post_data->photo) }}" alt="" class="w_200">
                                                    <input type="file" class="form-control m-3" name="photo" value="{{ asset('uploads/'.$post_data->photo) }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="heading" value="{{ $post_data->heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Short Content </label>
                                                    <input type="text" class="form-control" name="short_content" value="{{ $post_data->short_content }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Content </label>
                                                    <input type="text" class="form-control" name="content" value="{{ $post_data->content }}">
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