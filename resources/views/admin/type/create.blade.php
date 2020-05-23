@extends('sms.backend.app')

@section('sms-title')
Create Student | Admission Form Data
@endsection

@section('css')
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
    <form method="POST" action="{{ route('admin.type.store') }}">
    	@csrf
        <label for="email_address">Type</label>
        <div class="form-group">
            <div class="form-line">
               <input type="text" name="type" id="type" class="form-control" placeholder="Enter Type">
            </div>
        </div>
         <a href="{{ route('admin.type.index') }}" class="btn bg-amber btn-lg waves-effect">
            <i class="material-icons">arrow_back</i>
           <span>Back</span>
         </a>
         <button type="submit" class="btn bg-pink btn-lg waves-effect">
            <i class="material-icons">save</i>
           <span>Save</span>
        </button>
         <button type="submit" class="btn bg-blue btn-lg waves-effect">
            <i class="material-icons">clear</i>
           <span>Clear</span>
        </button>
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
@endsection