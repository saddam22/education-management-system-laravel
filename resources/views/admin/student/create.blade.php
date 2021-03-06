@extends('sms.backend.app')

@section('sms-title')
Create Student | Admission Form Data
@endsection

@section('css')
<!-- Bootstrap Select Css -->
<link href="{{ asset('assets/sms') }}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<!-- Multi Select Css -->
<link href="{{ asset('assets/sms') }}/plugins/multi-select/css/multi-select.css" rel="stylesheet">
<!-- Bootstrap Tagsinput Css -->
<link href="{{ asset('assets/sms') }}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="{{ asset('assets/sms') }}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

@endsection

@section('main-content')
  <div class="container-fluid">
<div class="block-header">

</div>

<!-- Vertical Layout -->
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">

</div>
<div class="body">
  <form action="{{ route('admin.student.store') }}" method="post" enctype="multipart/form-data">
    	@csrf

    <!--start row 1-->
    <div class="row clearfix">
      <div class="col-md-6"> 
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="material-icons">person</i></span>
          <div class="form-line">
            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name..">
          </div>
        </div>
      </div>
       <div class="col-md-6"> 
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="material-icons">person_pin_circle</i></span>
          <div class="form-line">
            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name..">
          </div>
        </div>
      </div>
    </div>   
   <!--end row 1-->   

    <!--start row 2-->
    <div class="row clearfix">
      <div class="col-md-6"> 
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="material-icons">date_range</i></span>
          <div class="form-line">
            <input type="date" name="dob" id="dob" class="form-control" placeholder="Ex: 30/07/2016">
          </div>
        </div>
      </div>
       <div class="col-md-6"> 
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="material-icons">grain</i></span>
          <div class="form-line">
            <input type="text" name="roll" id="roll" class="form-control" placeholder="Enter Roll..">
          </div>
        </div>
      </div>
    </div>   
   <!--end row 2--> 

    <!--start row 2-->
    <div class="row clearfix">
      @foreach($types as $typeform)
       <div class="col-md-6">
      <select name="{{ $typeform->type }}" class="form-control show-tick">
            <b><option>-- Select {{ $typeform->type}} --</option></b>
               @foreach($subtypes as $subtypeform)
                 @if($typeform->id == $subtypeform->id)
            <option value="{{ $subtypeform->id }}">{{ $subtypeform->subtype }}</option>
                @endif
              @endforeach   
        </select>
      </div>
      @endforeach  
    </div> 
   <!--end row 2--> 
    <!--start row 2-->
    <div class="row clearfix">
       <div class="col-md-6">
      <select name="parent_id" class="form-control show-tick">
            <b><option>-- Select Parents --</option></b>
               @foreach($parents as $parent)
            <option value="{{ $parent->id }}">{{ $parent->fname ." ". $parent->lname }}</option>
              @endforeach   
        </select>
      </div>
    </div> 
   <!--end row 2-->
   <!--start row 3-->
    <div class="row clearfix">
      <div class="col-md-6"> 
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="material-icons">email</i></span>
          <div class="form-line">
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email..">
          </div>
        </div>
      </div>
       <div class="col-md-6"> 
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="material-icons">call</i></span>
          <div class="form-line">
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number..">
          </div>
        </div>
      </div>
    </div>   
   <!--end row 3-->

    <!--start row 4-->
    <div class="row clearfix">
      <div class="col-md-6"> 
        <div class="input-group input-group-lg">
         <span class="input-group-addon"><i class="material-icons">local_florist</i></span>
          <div class="form-line">
           <textarea rows="5" cols="6" name="bio" id="bio" class="form-control" placeholder="Enter Shot Biography.."></textarea>
          </div>
        </div>
       </div>
       <div class="col-md-6"> 
        <div class="input-group input-group-lg">
          <div class="drag-icon-cph">
         <h1 class="input-group-addon"><i class="material-icons">touch_app</i></h1>
          </div>
          <div class="fallback">
           <input type="file" name="image" id="image" multiple/></textarea>
          </div>
        </div>
       </div>
    </div>       
   <!--end row 4-->   

    <div class="row">
      <div class="col-md-4">
    <a href="{{ route('admin.student.index') }}" class="btn bg-amber btn-lg btn-block waves-effect">
        <i class="material-icons">arrow_back</i>
       <span>Back</span>
     </a> 
      </div>
    <div class="col-md-4">
    <button type="submit" class="btn bg-pink btn-lg btn-block waves-effect">
        <i class="material-icons">save</i>
       <span>Save</span>
    </button>  
    </div>
    <div class="col-md-4">
    <button type="submit" class="btn bg-blue btn-lg btn-block waves-effect">
        <i class="material-icons">clear</i>
       <span>Clear</span>
    </button>
    </div>
    </div>

    </form>
</div>
</div>
</div>
</div>
<!-- #END# Vertical Layout -->
</div>
@endsection

@section('js')
<!-- Custom Js -->
<script src="{{ asset('assets/sms') }}/js/pages/forms/basic-form-elements.js"></script>
<!-- Select Plugin Js -->
<script src="{{ asset('assets/sms') }}/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<!-- Multi Select Plugin Js -->
<script src="{{ asset('assets/sms') }}/plugins/multi-select/js/jquery.multi-select.js"></script>
<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset('assets/sms') }}/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<!-- Custom Js -->
<script src="{{ asset('assets/sms') }}/js/pages/forms/advanced-form-elements.js"></script>
<!-- Input Mask Plugin Js -->
<script src="{{ asset('assets/sms') }}/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
@endsection