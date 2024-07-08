@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Footer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Footer</li>
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
                <h3 class="card-title">Footer Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/footer/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Footer Copyright <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="footer_copyright" class="form-control" placeholder="Enter Footer Copyright" value="{{ @$getRecord[0]->footer_copyright ? $getRecord[0]->footer_copyright : '' }}">
                      <span style="color: red;">{{ $errors->first('footer_copyright') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Footer URL <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="url" name="footer_url" class="form-control" placeholder="Enter Footer URL" value="{{ @$getRecord[0]->footer_url ? $getRecord[0]->footer_url : '' }}">
                      <span style="color: red;">{{ $errors->first('footer_url') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Footer By <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="footer_by" class="form-control" placeholder="Enter Footer By" value="{{ @$getRecord[0]->footer_by ? $getRecord[0]->footer_by : '' }}">
                      <span style="color: red;">{{ $errors->first('footer_by') }}</span>
                    </div>
                  </div>


                  <input type="hidden" name="id" value="{{ @$getRecord[0]->id ? $getRecord[0]->id : '' }}">

                  <div class="card-footer">
                    <button type="submit" name="add_to_update" class="btn btn-primary" value="{{ @count($getRecord)>0 ? 'Update' : 'Add' }}"> {{ @count($getRecord)>0 ? 'Update' : 'Add' }} </button>
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