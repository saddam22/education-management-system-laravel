@extends('sms.backend.app')

@section('sms-title')
Create Student | Admission Form Data
@endsection

@section('css')

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/sms') }}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
<form method="POST" action="{{ route('admin.type.update',$type->id) }}">
	@csrf
	  @method('put')
    <label for="email_address">Type</label>
    <div class="form-group">
        <div class="form-line">
           <input type="text" name="type" id="type" value="{{ $type->type }}" class="form-control" placeholder="Enter Type">
        </div>
    </div>
     <a href="{{ route('admin.type.index') }}" class="btn bg-amber btn-lg waves-effect">
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
</div>
</div>
</div>
<!-- #END# Vertical Layout -->
</div>
@endsection

@section('js')

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="{{ asset('assets/sms') }}/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <script src="{{ asset('assets/sms') }}/js/pages/tables/jquery-datatable.js"></script>
@endsection