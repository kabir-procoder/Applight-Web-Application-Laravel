@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FAQ Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">FAQ Edit</li>
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
                <h3 class="card-title">FAQ Edit Page</h3>
              </div>

              <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Question <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="question" class="form-control" placeholder="Enter Question" value="{{ $getRecord->question }}">
                      <span style="color: red;">{{ $errors->first('question') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Answer <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="answer" class="form-control" rows="5" placeholder="Enter Answer">{{ $getRecord->answer }}</textarea>
                      <span style="color: red;">{{ $errors->first('answer') }}</span>
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" name="add_to_update" class="btn btn-primary" value=""> Update </button>
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