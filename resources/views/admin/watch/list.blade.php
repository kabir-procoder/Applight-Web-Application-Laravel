@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Watch Now</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Watch Now</li>
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
                <h3 class="card-title">Watch Now Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/watch/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Headline Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="headline_title" class="form-control" placeholder="Headline Title" value="{{ $getData[0]->headline_title }}">
                      <span style="color: red;">{{ $errors->first('headline_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Watch Url <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="watch_url" class="form-control" placeholder="Enter Watch Url" value="{{ $getData[0]->watch_url }}">
                      <span style="color: red;">{{ $errors->first('watch_url') }}</span>
                    </div>
                  </div>

                  {{-- <input type="hidden" name="id" value=""> --}}
                  <input type="hidden" name="id" value="{{ @$getData[0]->id }}">
                  {{-- <input type="hidden" name="id" value="{{ count($getData)>0 ? '' : '$getData[0]->id' }}"> --}}

                  <div class="card-footer">
                    <button type="submit" name="add_to_update" value="@if(count($getData)>0) Update @else Add @endif" class="btn btn-primary"> @if(count($getData)>0) Update @else Add @endif </button>
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