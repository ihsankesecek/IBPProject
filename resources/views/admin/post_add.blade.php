@extends('admin.layouts.app')

@section('heading', 'Add Photo')
@section('top_right_button')
<a href="{{ route('admin_photo_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i>View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_post_store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Photo *</label>
                                                    <input type="file" class="form-control" name="photo" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="heading" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Short Content </label>
                                                    <input type="text" class="form-control" name="short_content" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Content </label>
                                                    <textarea type="text" class="form-control h_100" name="content" value=""></textarea>
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