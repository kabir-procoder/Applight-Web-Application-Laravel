@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Home</li>
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
                <h3 class="card-title">Home Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/home/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" placeholder="Enter Title" required value="{{ @$getData[0]->title }}">
                      <span style="color: red;">{{ $errors->first('title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sub Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="sub_title" class="form-control" placeholder="Enter Sub Title" required value="{{ @$getData[0]->sub_title }}">
                      <span style="color: red;">{{ $errors->first('sub_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Home Url <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="home_url" class="form-control" placeholder="Enter Home Url" required value="{{ @$getData[0]->home_url }}">
                      <span style="color: red;">{{ $errors->first('home_url') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sub Title Two <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="sub_title_two" class="form-control" placeholder="Enter Sub Title Two" required value="{{ @$getData[0]->sub_title_two }}">
                      <span style="color: red;">{{ $errors->first('sub_title_two') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="description" class="form-control" rows="10" placeholder="Enter Description" required>{{ @$getData[0]->description }}</textarea>
                      <span style="color: red;">{{ $errors->first('description') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image One <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="file" name="image_one" class="form-control">
                      @if(@$getData[0]->image_one)
	                      <img src="{{ url('public/images/'.@$getData[0]->image_one) }}" width="100" >
	                   @endif
                    </div>	
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image One Url <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="image_one_url" class="form-control" placeholder="Enter Image One Url" required value="{{ @$getData[0]->image_one_url }}">
                      <span style="color: red;">{{ $errors->first('image_one_url') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image Two <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="file" name="image_two" class="form-control">
                      @if(@$getData[0]->image_two)
	                      <img src="{{ url('public/images/'.@$getData[0]->image_two) }}" width="100">
	                  @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image Two Url <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="image_two_url" class="form-control" placeholder="Enter Image Two Url" required value="{{ @$getData[0]->image_two_url }}">
                      <span style="color: red;">{{ $errors->first('image_two_url') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Image Three <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="file" name="image_three" class="form-control">
                      @if(@$getData[0]->image_three)
	                      <img src="{{ url('public/images/'.@$getData[0]->image_three) }}" width="100">
	                  @endif
                    </div>
                  </div>

                  <input type="hidden" name="id" value="{{ $getData[0]->id }}">

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