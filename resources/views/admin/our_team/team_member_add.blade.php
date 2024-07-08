@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Team Member</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Team Member</li>
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
                <h3 class="card-title">Add Team Member Page</h3>
              </div>

                <form class="form-horizontal" action="{{ url('admin/ourteam/member/add') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control">
                    </div>  
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" placeholder="Headline Title" value="{{ old('name') }}">
                      <span style="color: red;">{{ $errors->first('name') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Position <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="position" class="form-control" placeholder="Headline Title" value="{{ old('position') }}">
                      <span style="color: red;">{{ $errors->first('position') }}</span>
                    </div>
                  </div>


                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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