@extends('admin.layouts.app')

@section('heading', 'Add Slide')
@section('top_right_button')
<a href="{{ route('admin_slide_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i>View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_slide_store') }}" method="post" enctype="multipart/form-data">
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
                                                    <label class="form-label">Text </label>
                                                    <input type="text" class="form-control" name="text" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Button Text </label>
                                                    <input type="text" class="form-control" name="button_text" value="">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Button URL *</label>
                                                    <input type="text" class="form-control" name="button_url" value="">
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