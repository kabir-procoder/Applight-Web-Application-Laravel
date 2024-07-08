@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">About</li>
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
                <h3 class="card-title">About Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/about/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Headline Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="headline_title" class="form-control" placeholder="Enter Headline Title" required value="{{ isset($getData)>0 ? $getData[0]->headline_title : '' }}">
                      <span style="color: red;"></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Headline Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="headline_description" class="form-control" rows="5" placeholder="Enter Headline Description" required>{{ isset($getData) ? $getData[0]->headline_description : '' }}</textarea>
                      <span style="color: red;">{{ $errors->first('description') }}</span>
                    </div>
                  </div>

                  {{-- First card --}}
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">First Card Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="first_card_title" class="form-control" placeholder="Enter First Card Title" required value="{{ isset($getData) ? $getData[0]->first_card_title : '' }}">
                      <span style="color: red;">{{ $errors->first('first_card_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">First Card Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="first_card_description" class="form-control" rows="5" placeholder="Enter First Card Description" required>{{ isset($getData) ? $getData[0]->first_card_description : '' }}</textarea>
                      <span style="color: red;">{{ $errors->first('first_card_description') }}</span>
                    </div>
                  </div>

                  {{-- Secound card --}}
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Secound Card Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="secound_card_title" class="form-control" placeholder="Enter Secound Card Title" required value="{{ isset($getData) ? $getData[0]->secound_card_title : '' }}">
                      <span style="color: red;">{{ $errors->first('secound_card_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Secound Card Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="secound_card_description" class="form-control" rows="5" placeholder="Enter Secound Card Description" required>{{ isset($getData) ? $getData[0]->secound_card_description : '' }}</textarea>
                      <span style="color: red;">{{ $errors->first('secound_card_description') }}</span>
                    </div>
                  </div>

                  {{-- Third card --}}
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Third Card Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="third_card_title" class="form-control" placeholder="Enter Third Card Title" required value="{{ isset($getData) ? $getData[0]->third_card_title : '' }}">
                      <span style="color: red;">{{ $errors->first('third_card_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Third Card Description <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="third_card_description" class="form-control" rows="5" placeholder="Enter Third Card Description" required>{{ isset($getData) ? $getData[0]->third_card_description : '' }}</textarea>
                      <span style="color: red;">{{ $errors->first('third_card_description') }}</span>
                    </div>
                  </div>

                  {{-- <input type="hidden" name="id" value="{{ $getData[0]->id }}"> --}}
                  <input type="hidden" name="id" value="{{ isset($getData) ? $getData[0]->id : '' }}">

                  <div class="card-footer">
                    <button type="submit" name="add_to_update" class="btn btn-primary" value="{{ count($getData)>0 ? 'Update' : 'Add' }}">{{ count($getData)>0 ? 'Update' : 'Add' }}</button>
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