@extends('admin.layouts.app')

@section('heading', 'Add Slide')
@section('top_right_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary">View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_slide_update',$slide_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                                <td><img src="{{ asset('uploads/'.$slide_data->photo) }}" alt="" class="w_400"></td>
                                                    <input type="file" class="form-control m-3" name="photo" value="{{ asset('uploads/'.$slide_data->photo) }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="heading" value="{{ $slide_data->heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Text </label>
                                                    <input type="text" class="form-control" name="text" value="{{ $slide_data->text }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Button Text </label>
                                                    <input type="text" class="form-control" name="button_text" value="{{ $slide_data->button_text }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Button URL *</label>
                                                    <input type="text" class="form-control" name="button_url" value="{{ $slide_data->button_url }}">
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