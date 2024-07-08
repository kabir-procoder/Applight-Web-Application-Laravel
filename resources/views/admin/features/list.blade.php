@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Features</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Features</li>
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
                <h3 class="card-title">Features Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/features/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Headline Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="headline_title" class="form-control" placeholder="Headline Headline Title" value="{{ $getData[0]->headline_title }}">
                      <span style="color: red;">{{ $errors->first('headline_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Headline Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="headline_description" class="form-control" rows="5" placeholder="Enter Headline Description">{{ $getData[0]->headline_description }}</textarea>
                      <span style="color: red;">{{ $errors->first('headline_description') }}</span>
                    </div>
                  </div>

                  {{-- LeftCard Area --}}
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LeftCard First Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="leftcardfirst_title" class="form-control" placeholder="Enter LeftCard First Title" value="{{ $getData[0]->leftcardfirst_title }}">
                      <span style="color: red;">{{ $errors->first('leftcardfirst_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LeftCard First Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="leftcardfirst_description" class="form-control" rows="5" placeholder="Enter LeftCard First Description">{{ $getData[0]->leftcardfirst_description }}</textarea>
                      <span style="color: red;">{{ $errors->first('leftcardfirst_description') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LeftCard Secound Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="leftcardsecound_title" class="form-control" placeholder="Enter LeftCard Secound Title" value="{{ $getData[0]->leftcardsecound_title }}">
                      <span style="color: red;">{{ $errors->first('leftcard_secound_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LeftCard Secound Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="leftcardsecound_description" class="form-control" rows="5" placeholder="Enter LeftCard Secound Description">{{ $getData[0]->leftcardsecound_description }}</textarea>
                      <span style="color: red;">{{ $errors->first('leftcardsecound_description') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LeftCard Third Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="leftcardthird_title" class="form-control" placeholder="Enter LeftCard Third Title" value="{{ $getData[0]->leftcardthird_title }}">
                      <span style="color: red;">{{ $errors->first('leftcardthird_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">LeftCard Third Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="leftcardthird_description" class="form-control" rows="5" placeholder="Enter LeftCard Third Description">{{ $getData[0]->leftcardthird_description }}</textarea>
                      <span style="color: red;">{{ $errors->first('leftcardthird_description') }}</span>
                    </div>
                  </div>

                  {{-- Middle Image Area --}}
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Middle Image <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="file" name="middle_image" class="form-control">
                      @if(@$getData[0]->middle_image)
	                      <img src="{{ url('public/images/'.@$getData[0]->middle_image) }}" width="100" >
	                   @endif
                    </div>	
                  </div>

                  {{-- RightCard Area --}}
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RightCard First Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="rightcardfirst_title" class="form-control" placeholder="Enter RightCard First Title" value="{{ $getData[0]->rightcardfirst_title }}">
                      <span style="color: red;">{{ $errors->first('rightcardfirst_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RightCard First Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="rightcardfirst_description" class="form-control" rows="5" placeholder="Enter RightCard First Description">{{ $getData[0]->rightcardfirst_description }}</textarea>
                      <span style="color: red;">{{ $errors->first('rightcardfirst_description') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RightCard Secound Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="rightcardsecound_title" class="form-control" placeholder="Enter RightCard Secound Title" value="{{ $getData[0]->rightcardsecound_title }}">
                      <span style="color: red;">{{ $errors->first('rightcard_secound_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RightCard Secound Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="rightcardsecound_description" class="form-control" rows="5" placeholder="Enter RightCard Secound Description">{{ $getData[0]->rightcardsecound_description }}</textarea>
                      <span style="color: red;">{{ $errors->first('rightcardsecound_description') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RightCard Third Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="rightcardthird_title" class="form-control" placeholder="Enter RightCard Third Title" value="{{ $getData[0]->rightcardthird_title }}">
                      <span style="color: red;">{{ $errors->first('rightcardthird_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">RightCard Third Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="rightcardthird_description" class="form-control" rows="5" placeholder="Enter RightCard Third Description">{{ $getData[0]->rightcardthird_description }}</textarea>
                      <span style="color: red;">{{ $errors->first('rightcardthird_description') }}</span>
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