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
                <button data-toggle="modal" data-target="#createnewwork_item" class="btn btn-primary waves-effect waves-light pull-right">Add Tooth Shade</button>
            </div>
            <h4 class="page-title">Tooth Shade</h4>
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

                <h4 class="mt-0 header-title">Tooth Shade List</h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Tooth Shade</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($ToothShades as $toothshade)
                    <tr>
                        <td>{{$toothshade->shade_code}}</td>
                        <td class="text-right">
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$toothshade->id}}"><i class="fa fa-edit"></i> </button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$toothshade->id}}"><i class="fa fa-trash"></i> </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="delete{{$toothshade->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Course</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('tooth_shade.delete')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                          Are you sure to delete this course ?
                                            <input type="hidden" class="form-control" name="toothshade_id" value="{{$toothshade->id}}">
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


                    <div class="modal fade" id="edit{{$toothshade->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('tooth_shade.update')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" class="form-control" name="toothshade_id" value="{{$toothshade->id}}">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Shade Code</span>
                                                </div>
                                                <input type="text" class="form-control" value={{$toothshade->shade_code}} name="shade_code">
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

<div class="modal fade" id="createnewwork_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create New Work Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('tooth_shade.save')}}" method="post">
                @csrf
            <div class="modal-body">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Shade Code</span>
                    </div>
                    <input type="text" class="form-control" name="shade_code">
                </div>
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