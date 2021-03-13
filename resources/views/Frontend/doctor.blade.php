@extends('layouts.layout')
@section('css')
<link href="{{asset('plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
<link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@stop
@section('frontend')
 <!-- Page-Title -->
 <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <button data-toggle="modal" data-target="#createnewdoctor" class="btn btn-primary waves-effect waves-light pull-right">Add Doctor</button>
            </div>
            <h4 class="page-title">Doctors</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
@if (session('Succes'))
<div class="card-body">
   <div class="alert alert-success">
      {{ session('Succes') }}
   </div>
</div>
@endif
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Doctors List</h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Doctor Name</th>
                        <th>Clinic Name</th>
                        <th>Address</th>
                        <th>PhoneNumber</th>
                        <th>Patient Count</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{$doctor->FirstName}} {{$doctor->LastName}}</td>
                        <td>{{$doctor->ClinicName}}</td>
                        <td>{{$doctor->Address}}</td>
                        <td>{{$doctor->PhoneNumber}}</td>
                        <td>{{\App\Models\patient_work::where('doctor_id', '=', $doctor->id)->get()->count()}}</td>
                        <td class="text-right">
                            <a href="{{route('patient.qrcode',$doctor->id)}}"><button class="btn btn-secondary btn-sm" ><i class="fa fa-qrcode"></i> </button></a>
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$doctor->id}}"><i class="fa fa-edit"></i> </button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$doctor->id}}"><i class="fa fa-trash"></i> </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="delete{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('doctor.delete')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                          are you sure to delete this course ?
                                            <input type="hidden" class="form-control" name="course_delete_id" value="{{$doctor->id}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="edit{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('doctor.update')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" name="doctor_id" value="{{$doctor->id}}">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">First and Last Name</span>
                                                </div>
                                                <input type="text" class="form-control" value="{{$doctor->FirstName}}" name="first_name">
                                                <input type="text" class="form-control" value="{{$doctor->LastName}}" name="last_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Clinic Name</span>
                                                </div>
                                                <input type="text" class="form-control" value="{{$doctor->ClinicName}}" name="clinic_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Address</span>
                                                </div>
                                                <input type="text" class="form-control" value="{{$doctor->Address}}" name="address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Phone Number</span>
                                                </div>
                                                <input type="text" class="form-control" value="{{$doctor->PhoneNumber}}" name="phone_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>        
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="modal fade" id="createnewdoctor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create New Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('doctor.save')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">First and Last Name</span>
                    </div>
                    <input type="text" class="form-control" name="first_name">
                    <input type="text" class="form-control" name="last_name">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Clinic Name</span>
                    </div>
                    <input type="text" class="form-control" name="clinic_name">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Address</span>
                    </div>
                    <input type="text" class="form-control" name="address">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Phone Number</span>
                    </div>
                    <input type="text" class="form-control" name="phone_number">
                </div>
            </div>
                <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Profile Picture</h4>
                                <input type="file" name="image" id="input-file-now" class="dropify" />                                                   
                            </div><!--end card-body-->
                        </div><!--end card-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop
@section('script')

<script src="{{asset('plugins/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/pages/jquery.form-upload.init.js')}}"></script>
<script src="{{asset('plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/pages/jquery.datatable.init.js')}}"></script>

@stop