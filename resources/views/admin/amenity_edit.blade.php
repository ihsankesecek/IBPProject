@extends('admin.layouts.app')

@section('heading', 'Edit Amenity')
@section('top_right_button')
<a href="{{ route('admin_amenity_view') }}" class="btn btn-primary"> View All</a>
@endsection

@section('main_content')

<div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <form action="{{ route('admin_amenity_update',$ame_data->id) }}" method="post" >
                        @csrf
                        <div class="row">
                            
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label">Amenity Name *</label>
                                                    <input type="text" class="form-control" name="name" value="{{ $ame_data->name }}">
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