@extends('admin.layouts.app')

@section('heading', 'Edit About Page')

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_page_about_update') }}" method="post" >
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Heading *</label>
                                                    <input type="text" class="form-control" name="about_heading" value="{{ $page_data->about_heading }}">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Content </label>
                                                    <textarea name="about_content" class="form-control snote" id="" cols="30" rows="10">{{ $page_data->about_content }}</textarea>
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