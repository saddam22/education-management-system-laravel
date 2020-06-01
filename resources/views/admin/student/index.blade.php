@extends('sms.backend.app')

@section('sms-title')
All Student | Admission Form Data
@endsection

@section('css')

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/sms') }}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

@endsection

@section('main-content')
  <div class="container-fluid">
<div class="block-header">
   <a href="{{ route('admin.student.create') }}" class="btn btn-warning btn-lg waves-effect">
         <i class="material-icons">create</i>
         <span>Create</span>
    </a>
</div>
<!-- Exportable Table -->
<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="card">
<div class="header">
<button class="btn bg-purple btn-lg waves-effect" type="button">All Students <span class="badge">{{ $students->count() }}</span></button>
</div>
<div class="body">
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover dataTable js-exportable">
<thead>
    <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Full Name</th>
        <th>Parents</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
</thead>
<tfoot>
     <tr>
        <th>ID</th>
        <th>Photo</th>
        <th>Full Name</th>
        <th>Parents</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
</tfoot>
<tbody>
@foreach($students as $key=>$student)
<tr>
    <td>{{ $key + 1 }}</td>
    <td><img src="{{ asset('uploads/studentimages/'.$student->image) }}" width="60" height="60"></td>
    <td>{{ $student->fname ." ". $student->lname }}</td>
    <td>{{ $student->first_name ." ". $student->last_name }}</td>
    <td>{{ $student->addresses }}</td>
    <td>
     <a class="btn btn-primary" href=""><i class="material-icons">remove_red_eye</i></a>
     <a class="btn btn-success" href="{{ route('admin.student.edit', $student->id) }}"><i class="material-icons">edit</i></a> 
     <button class="btn btn-danger waves-effect" type="button" onclick="deleteType({{ $student->id }})">
        <i class="material-icons">delete</i>
    </button>
    <form id="delete-form-{{ $student->id }}" action="{{ route('admin.student.destroy',$student->id) }}" method="POST" style="display: none;">
        @csrf
          @method('DELETE')
    </form>
        
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- #END# Exportable Table -->
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
    <script src="{{ asset('js/sweetalert2.all.js') }}"></script>
     <!--<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>-->
     <script type="text/javascript">
        function deleteType(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection