@extends('admin.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact Address</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Contact Address</li>
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
                <h3 class="card-title">Contact Address Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/contact/address/post') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Address Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="address_title" class="form-control" placeholder="Enter Address Title" value="{{  @$getRecord[0]->address_title ? $getRecord[0]->address_title : ''  }}">
                      <span style="color: red;">{{ $errors->first('address_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Address Details <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="address_details" class="form-control" rows="3" placeholder="Enter Address Details">{{  @$getRecord[0]->address_details ? $getRecord[0]->address_details : ''  }}</textarea>
                      <span style="color: red;">{{ $errors->first('address_details') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="phone_title" class="form-control" placeholder="Enter Phone Title" value="{{  @$getRecord[0]->phone_title ? $getRecord[0]->phone_title : ''  }}">
                      <span style="color: red;">{{ $errors->first('phone_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone Details <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="phone_details" class="form-control" rows="3" placeholder="Enter Phone Description">{{  @$getRecord[0]->phone_details ? $getRecord[0]->phone_details : ''  }}</textarea>
                      <span style="color: red;">{{ $errors->first('phone_details') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="email_title" class="form-control" placeholder="Enter Email Title" value="{{  @$getRecord[0]->email_title ? $getRecord[0]->email_title : ''  }}">
                      <span style="color: red;">{{ $errors->first('email_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email Details <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="email_details" class="form-control" rows="3" placeholder="Enter Email Details">{{  @$getRecord[0]->email_details ? $getRecord[0]->email_details : ''  }}</textarea>
                      <span style="color: red;">{{ $errors->first('email_details') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">WorkingHours Title <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="working_title" class="form-control" placeholder="Enter WorkingHours Title" value="{{  @$getRecord[0]->working_title ? $getRecord[0]->working_title : ''  }}">
                      <span style="color: red;">{{ $errors->first('working_title') }}</span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">WorkingHours Details <span style="color: red;">*</span></label>
                    <div class="col-sm-10">
                      <textarea type="text" name="working_details" class="form-control" rows="3" placeholder="Enter WorkingHours Details">{{  @$getRecord[0]->working_details ? $getRecord[0]->working_details : ''  }}</textarea>
                      <span style="color: red;">{{ $errors->first('working_details') }}</span>
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