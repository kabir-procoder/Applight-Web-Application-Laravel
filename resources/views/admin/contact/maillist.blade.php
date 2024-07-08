@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mail List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Mail List</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">

        @include('_message')

        <div class="row">
          <div class="col-md-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Search Contact Us</h3>
              </div>
              <form action="" method="get">
                <div class="card-body">
                  <div class="row">

                    <div class="form-group col-md-2">
                      <label>Id</label>
                      <input type="text" name="id" class="form-control" placeholder="Enter Id" value="{{ Request()->id }}">
                    </div>

                    <div class="form-group col-md-2">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ Request()->name }}">
                    </div>

                    <div class="form-group col-md-2">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ Request()->email }}">
                    </div>

                    <div class="form-group col-md-2">
                      <label>Subject</label>
                      <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="{{ Request()->subject }}">
                    </div>

                    <div class="form-group col-md-2">
                      <label>Message</label>
                      <input type="text" name="message" class="form-control" placeholder="Enter Message" value="{{ Request()->message }}">
                    </div>

                    <div class="form-group col-md-2">
                      <button class="btn btn-primary" type="submit" style="margin-top: 30px;">Search</button>
                      <a href="{{ url('admin/contact/mail') }}" class="btn btn-success" style="margin-top: 30px;">Reset</a>
                    </div>

                  </div>
                </div>
              </form>
            </div>


            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Mail List Page</h3>
              </div>

              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Message</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach($getRecord as $value)
                      <tr>
                      <th scope="row">{{ $value->id }}</th>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->subject }}</td>
                        <td>{{ $value->message }}</td>
                        <td><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ url('admin/contact/mail/delete/'.$value->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>

              {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

            </div>
          </div>
        </div>
        

      </div>
    </section>


 </div>
  <!-- /.content-wrapper -->
 @endsection