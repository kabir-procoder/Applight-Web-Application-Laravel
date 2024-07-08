@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">My Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active">My account</li>
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
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">My Account Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/my_account/update') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" placeholder="Enter Name" required value="{{ $getRecord->name }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" placeholder="Enter Email" required value="{{ $getRecord->email }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" placeholder="Enter Password" value=""> (Leave blank if you are not changing the password)
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="" class="btn btn-default float-right">Cancel</a>
                  </div>

                </div>
              </form>

            </div>
          </div>
        </div>
        

      </div>
    </section>


 </div>
  <!-- /.content-wrapper -->
 @endsection