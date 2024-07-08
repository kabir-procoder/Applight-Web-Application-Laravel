@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Change Logo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Change Logo</li>
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
                <h3 class="card-title">Change Logo Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/mainlogo/logo/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Logo Dark <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="file" name="image_one" class="form-control">
                      @if($getRecord[0]->image_one)
                        <img width="100" height="60" style="object-fit: cover; background: #8A8A8A; margin-top: 5px;" src="{{ url('public/images/logo/'.$getRecord[0]->image_one) }}">
                      @endif
                    </div>  
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Logo White <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="file" name="image_two" class="form-control">
                      @if($getRecord[0]->image_two)
                        <img width="100" height="60" style="object-fit: cover; background: #8A8A8A; margin-top: 5px;" src="{{ url('public/images/logo/'.$getRecord[0]->image_two) }}">
                      @endif
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