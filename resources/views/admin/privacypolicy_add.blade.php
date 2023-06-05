@extends('admin.layouts.app')

@section('heading', 'PrivacyPolicy')
@section('top_right_button')
<a href="{{ route('admin_privacy_policy') }}" class="btn btn-primary"><i class="fa fa-eye"></i>View </a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_privacy_policy_store') }}" method="post" >
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Description </label>
                                                    <input type="text" class="form-control" name="description" value="">
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