@extends('admin.layouts.app')

@section('heading', 'Edit Photo')
@section('top_right_button')
<a href="{{ route('admin_photo_view') }}" class="btn btn-primary">View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_photo_update',$photo_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                                <td><img src="{{ asset('uploads/'.$photo_data->photo) }}" alt="" class="w_400"></td>
                                                    <input type="file" class="form-control m-3" name="photo" value="{{ asset('uploads/'.$photo_data->photo) }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Caption </label>
                                                    <input type="text" class="form-control" name="caption" value="{{ $photo_data->caption }}">
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