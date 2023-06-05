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
                                <form action="{{ route('admin_video_update',$video_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Video Link *</label>
                                                    <input type="text" class="form-control" name="video_id" value="{{ $video_data->video_id }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Caption </label>
                                                    <input type="text" class="form-control" name="caption" value="{{ $video_data->caption }}">
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