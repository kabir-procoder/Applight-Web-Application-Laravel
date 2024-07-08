@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Our Team</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Our Team</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">

        @include('_message')

        <a href="{{ url('admin/testimonial/message/add')}}" class="btn btn-primary" style="margin-bottom: 13px;">Add Review</a>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Our Team Page</h3>
              </div>

              <table class="table table-hover" style="width: 100%;">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($getRecord as $value)
                  <tr>
                    <td>{{ $value->id }}</td>
                    <td>
                      @if(!empty($value->image))
                      <img src="{{ url('public/images/testimonial/'.$value->image) }}" style="height: 60px; width: 80px; object-fit: cover; "> 
                      @endif
                    </td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->position }}</td>
                    <td>{{ $value->description }}</td>
                    <td style="width: 100% !important; display: inline-block !important;">
                      <a href="{{ url('admin/testimonial/message/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                      <a href="{{ url('admin/testimonial/message/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>

            </div>
          </div>
        </div>
        

      </div>
    </section>


 </div>
  <!-- /.content-wrapper -->
 @endsection