@extends('admin.layouts.app')

@section('heading', 'View Slides')

@section('top_right_button')
<a href="{{ route('admin_photo_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
@endsection
@section('main_content')
<section class="section">
                <div class="section-header">
                    <h1>Table</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($privpol as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->description }}</td>
                                                <td class="pt_10 pb_10">
                                                    <a href="{{ route('admin_photo_edit',$row->id) }}" class="btn btn-warning" >Edit</a>
                                                    <a href="{{ route('admin_photo_delete',$row->id) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                               
                                            </tr>
                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @endsection










