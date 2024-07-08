@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FAQ Message List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">FAQ Message List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">

        @include('_message')

        <a href="{{ url('admin/faq/faqbodyinfo/add')}}" class="btn btn-primary" style="margin-bottom: 13px;">Add FAQ</a>

        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Our Team Page</h3>
              </div>

              <table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Question</th>
                  <th>Answer</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($getRecord as $value)
                  <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->question }}</td>
                    <td>{{ $value->answer }}</td>
                    <td>
                      <a href="{{ url('admin/faq/faqsectioninfo/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                      <a onclick="return confirm('Are you sure you want to delete this item')" href="{{ url('admin/faq/faqsectioninfo/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
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