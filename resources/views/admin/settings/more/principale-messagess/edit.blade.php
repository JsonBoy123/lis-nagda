@extends('layouts.main')
 @section('content')
<div id="content">
  <div class="container">
     {{-- @include('admin.settings.header') --}}
    <div class="card shadow mb-4">
      <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
        <h6 style="font-size: 15px;" class="m-0 font-weight-bold text-primary">Principal Messages<h4 class="panel-title"> 
         <a href="{{ route('settings-principal-messages.index') }}" class="btn btn-primary btn-sm pull-right ">Back</a>
       </h4></h6>
      </div>
      <div class="app-title full-right ">
         @if($message = Session::get('success'))   
            <div class="alert alert-success col-md-6">{{ $message }}</div>
         @endif
             <div class="card-body">
                <form action="{{route('settings-principal-messages.update',$principalmgsDatas->principals_msg_id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                  <div class="row">
                      <div class="col-md-6 col-sm-6 col-lg-6 form-group">
                          <label for="principals_msg_title"> Title</label>
                          <input type="text" name="principals_msg_title" id="principals_msg_title" class="form-control " value="{{$principalmgsDatas->principals_msg_title}}">
                          @error('principals_msg_title')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div> 
                      <div class="col-md-6 col-sm-6 col-lg-6 form-group">
                          <label for="principals_msg_image"> Image</label>
                          <input type="file" name="principals_msg_image" id="principals_msg_image" class="form-control " value="{{$principalmgsDatas->principals_msg_image}}">
                           @if($principalmgsDatas->principals_msg_image !=null)
                              <a href="{{asset('storage/'.$principalmgsDatas->principals_msg_image)}}" target="_blank">{{file_name($principalmgsDatas->principals_msg_image)}}</a><img src="{{'storage/'.$principalmgsDatas->principals_msg_image}}" width="50px;" height="50px;">
                          @else <p>Not Uploaded</p>
                          @endif
                          @error('principals_msg_image')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                       <div class="col-md-12 col-sm-6 col-lg-12 form-group">
                          <label for="principals_msg_des"> Description</label>
                         <textarea id="principals_msg_des" name="principals_msg_des" class="form-control ckeditor" placeholder="Write your message.." required="">{{$principalmgsDatas->principals_msg_des}}</textarea>
                          @error('principals_msg_des')
                              <span class="text-danger" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button  class="btn btn-primary btn-sm" type="submit" id="btnSubmit">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
  <script type="text/javascript" src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@endsection