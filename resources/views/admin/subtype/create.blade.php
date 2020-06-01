@extends('sms.backend.app')

@section('sms-title')
Create Sub Types | Admission Form Data
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
<form method="POST" action="{{ route('admin.subtype.store') }}">
	@csrf
	<div class="row clearfix">
    <div class="col-sm-6">
        <select name="type_id" class="form-control show-tick">
            <option value="">-- Please select --</option>
            @foreach($subtypes as $subtype)
            <option value="{{ $subtype->id }}">{{ $subtype->type }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-6">
    <label for="email_address">SubType</label>
    <div class="form-group">
        <div class="form-line">
           <input type="text" name="subtype" id="subtype" class="form-control" placeholder="Enter Type">
        </div>
    </div>
    </div>
  </div>

     <div class="row">
    <div class="col-md-4">
      <a href="{{ route('admin.subtype.index') }}" class="btn bg-amber btn-lg btn-block waves-effect">
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
@endsection