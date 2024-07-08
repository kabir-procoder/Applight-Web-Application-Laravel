@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add SEO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add SEO</li>
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
                <h3 class="card-title">Add SEO Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/seo/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Meta Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title" value="{{  @$getRecord[0]->meta_title ? $getRecord[0]->meta_title : ''  }}">
                      <span style="color: red;">{{ $errors->first('meta_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Meta Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="meta_description" class="form-control" rows="3" placeholder="Enter Meta Description">{{  @$getRecord[0]->meta_description ? $getRecord[0]->meta_description : ''  }}</textarea>
                      <span style="color: red;">{{ $errors->first('meta_description') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Meta Keyword <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="meta_keyword" class="form-control" rows="3" placeholder="Enter Meta Keyword">{{  @$getRecord[0]->meta_keyword ? $getRecord[0]->meta_keyword : ''  }}</textarea>
                      <span style="color: red;">{{ $errors->first('meta_keyword') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Website Developer <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="website_developer" class="form-control" placeholder="Enter Website Developer" value="{{  @$getRecord[0]->website_developer ? $getRecord[0]->website_developer : ''  }}">
                      <span style="color: red;">{{ $errors->first('website_developer') }}</span>
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