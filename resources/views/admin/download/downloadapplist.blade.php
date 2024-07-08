@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Download List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Download List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">

        @include('_message')

        <a href="{{ url('admin/download/applist/add')}}" class="btn btn-primary" style="margin-bottom: 13px;">Add Download App</a>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Download List Page</h3>
              </div>

              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">image</th>
                      <th scope="col">Url</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($getRecord as $value)
                      <tr>
                      <th scope="row">{{ $value->id }}</th>
                        <td>
                        @if(!empty($value->image))
                          <img src="{{ url('public/images/download/'.$value->image) }}" style="height: 60px; width: 80px; object-fit: cover; "> 
                          @endif
                        </td>
                        <td>{{ $value->image_url }}</td>
                        <td><a href="{{ url('admin/download/applist/edit/'.$value->id) }}" class="btn btn-primary">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ url('admin/download/applist/delete/'.$value->id) }}" class="btn btn-danger">Delete</a></td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
        

      </div>
    </section>


 </div>
  <!-- /.content-wrapper -->
 @endsection