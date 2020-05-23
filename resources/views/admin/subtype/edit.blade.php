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
<form action="{{ route('admin.subtype.update',$subtypeform->id) }}" method="POST" name="editForm">
	@csrf
	 @method('put')
	<div class="row clearfix">
     <div class="col-sm-6">
        <select name="type_id" class="form-control show-tick">
            @foreach($subtypes as $subtype)
            <option value="{{ $subtype->id }}">{{ $subtype->type }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-6">
    <label for="email_address">SubType</label>
    <div class="form-group">
        <div class="form-line">
           <input type="text" name="subtype" id="subtype" value="{{ $subtypeform->subtype }}" class="form-control">
        </div>
    </div>
    </div>
  </div>
     <a href="{{ route('admin.subtype.index') }}" class="btn bg-amber btn-lg waves-effect">
        <i class="material-icons">arrow_back</i>
       <span>Back</span>
     </a>
     <button type="submit" class="btn bg-pink btn-lg waves-effect">
        <i class="material-icons">save</i>
       <span>Update</span>
    </button>
     <button type="submit" class="btn bg-blue btn-lg waves-effect">
        <i class="material-icons">clear</i>
       <span>Clear</span>
    </button>
</form>
</div>
<script type="text/javascript">
	document.forms['editForm'].elements['type_id'].value='{{ $subtypeform->type }}';
</script>
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