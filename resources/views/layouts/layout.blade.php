<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Precision-Lab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Work Item Record" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <link href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <!-- DataTables -->
        <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- Plugins css -->
        <link href="{{asset('plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
        <link href="{{asset('plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/timepicker/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />


        @yield('css')
        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

    <body class="dark-topbar">

             <!-- Top Bar Start -->
             <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{route('dashboard')}}" class="logo">
                        <span>
                            <img src="{{asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                        </span>
                        <span>
                            <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg">
                        </span>
                    </a>
                </div>
                <!--end logo-->
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-right mb-0"> 
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="../assets/images/users/user-1.png" alt="profile-user" class="rounded-circle" /> 
                                <span class="ml-1 nav-user-name hidden-sm">Precision-Lab<i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Lock screen</a>
                                <div class="dropdown-divider mb-0"></div>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile waves-effect waves-light">
                                <i class="ti-menu nav-icon"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu">
                    <li>
                        <a href="{{route('dashboard')}}"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Doctors<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('doctor.list')}}">Add Doctor</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Patient<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('patient.list')}}">Patient list</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Work Item<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('work_item.list')}}">Work Item list</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="ti-control-record"></i>Shade Code<span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('tooth_shade.list')}}">Shade Code list</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('patient.addView')}}"><i class="ti-user"></i><span>Add New Patient</span><span class="menu-arrow"></span></a>
                    </li>                 
                </ul>
            </div>
            <!-- end left-sidenav-->

            <div class="page-wrapper">
                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('frontend')
                    </div>
                </div>
            </div>

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/feather.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>

        @yield('script')

        <script src="{{asset('plugins/moment/moment.js')}}"></script>
        <script src="{{asset('plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.canvaswrapper.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.colorhelpers.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.js')}}"></script>        
        <script src="{{asset('plugins/flot-chart/jquery.flot.saturated.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.browser.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot.drawSeries.js')}}"></script> 
        <script src="{{asset('plugins/flot-chart/jquery.flot.uiConstants.js')}}"></script>
        <script src="{{asset('plugins/flot-chart/jquery.flot-dataType.js')}}"></script>
        <script src="{{asset('assets/pages/jquery.crm_dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <!----Script for drop box-->
        <script src="{{asset('assets/pages/jquery.forms-advanced.js')}}"></script>
        <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/feather.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script> 

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
    </body>
</html>