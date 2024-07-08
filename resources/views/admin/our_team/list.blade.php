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
        
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Our Team Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/ourteam/sectioninfo/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Headline Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="headline_title" class="form-control" placeholder="Headline Title" value="{{  @$getRecord[0]->headline_title ? $getRecord[0]->headline_title : ''  }}">
                      <span style="color: red;">{{ $errors->first('headline_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Headline Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="headline_description" class="form-control" rows="5" placeholder="Enter Headline Description">{{  @$getRecord[0]->headline_description ? $getRecord[0]->headline_description : ''  }}</textarea>
                      <span style="color: red;">{{ $errors->first('headline_description') }}</span>
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