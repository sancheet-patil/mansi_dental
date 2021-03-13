<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Precision-Lab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Patient List</h4>

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Patient Code</th>
                                            <th>Patient Name</th>
                                            <th>Reffered Doctor</th>
                                            <th>Warranty Expiry</th>
                                            <th class="text-right">Details</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($patient as $patients)
                                                <tr>
                                                    <td>{{$patients->work_code}}</td>
                                                    <td>{{$patients->patient_name}}</td>
                                                    <td>
                                                        <?php $doctorName=\App\Models\doctors::find($patients->doctor_id) ?>
                                                        {{$doctorName->FirstName}} {{$doctorName->LastName}}
                                                    </td>
                                                    <td>{{$patients->warranty_expiry_date}}</td>
                                                    <td class="text-right">
                                                        <a href="{{route('patient.qrcode',$patients->id)}}"><button class="btn btn-secondary btn-sm" ><i class="fa fa-qrcode"></i> </button></a>
                                                        <a href="{{route('patient.invoice',$patients->id)}}"><button class="btn btn-primary btn-sm" ><i class="fa fa-id-card"></i> </button></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit{{$patients->id}}"><i class="fa fa-edit"></i> </button>
                                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$patients->id}}"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                    <div class="modal fade" id="delete{{$patients->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Patient</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{route('patient.delete')}}" method="post">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                          are you sure to delete this patient ?
                                                                            <input type="hidden" class="form-control" name="_id" value="{{$patients->id}}">
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
                                                    <div class="modal fade" id="edit{{$patients->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Details</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{route('patient.update')}}" method="post">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <input type="hidden" class="form-control" name="patient_id" value="{{$patients->id}}">
                                                                        <div class="form-group">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">Name</span>
                                                                                </div>
                                                                                <input type="text" class="form-control" value="{{$patients->patient_name}}" name="patient_name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control mb-3 custom-select" name="doctor_id" style="width: 100%; height:36px;">
                                                                            <option value="{{$patients->doctor_id}}">{{$doctorName->FirstName}} {{$doctorName->LastName}}</option>
                                                                            <?php
                                                                                $doctors = App\Models\doctors::all()->sortby('FirstName');
                                                                            ?>
                                                                            @foreach ($doctors as $doctor)
                                                                                <option value="{{$doctor->id}}">{{$doctor->FirstName}} {{$doctor->LastName}}</option>
                                                                            @endforeach
                                                                            </select>
                                                                        </div>                                    
                                                                        <div class="form-group">
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">Tooth Number</span>
                                                                                </div>
                                                                                <input type="text" class="form-control" value="{{$patients->tooth_Number}}" name="tooth_number">
                                                                            </div>
                                                                        </div>                     
                                                                        <?php $work=DB::table('work_item')->select('work_item')->where('id',$patients->work_id)->first(); ?>                           
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control mb-3 custom-select" name="work_item_id" style="width: 100%; height:36px;">
                                                                            <option value="{{$patients->work_id}}">{{$work->work_item}}</option>
                                                                            <?php
                                                                                $work_items = App\Models\work_item::all()->sortby('work_item');
                                                                            ?>
                                                                            @foreach ($work_items as $item)
                                                                                <option value="{{$item->id}}">{{$item->work_item}}</option>
                                                                            @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <?php $shade=DB::table('tooth_shade')->select('shade_code')->where('id',$patients->shade)->first(); ?>
                                                                        <div class="form-group">
                                                                            <select class="select2 form-control mb-3 custom-select" name="shade_id" style="width: 100%; height:36px;">
                                                                            <option value="{{$patients->shade}}">{{$shade->shade_code}}</option>
                                                                            <?php
                                                                                $Shades = App\Models\tooth_shade::all()->sortby('shade_code');
                                                                            ?>
                                                                            @foreach ($Shades as $item)
                                                                                <option value="{{$item->id}}">{{$item->shade_code}}</option>
                                                                            @endforeach
                                                                            </select>
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
                                                </tr>
                                            @endforeach
                                    </tbody>
                                    </table>        
                                </div>
                            </div>
                        </div> <!-- end col -->
                </div> <!-- end row -->

                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2021 Precision-Lab <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Sancheet Patil</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/feather.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>    
        
        <!-- Required datatable js -->
        <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
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

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        
    </body>

</html>