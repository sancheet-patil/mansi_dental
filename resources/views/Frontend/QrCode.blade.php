<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
        <title>Precision-Lab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <link href="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
        <div class="page-wrapper">
                <!-- Page Content-->
                <div class="page-content">
                        <div class="container-fluid">
                        {!! QrCode::size(100)->generate($QrCode); !!}
                        </div>
                </div>
        </div>

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
        <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
        <script src="{{asset('assets/pages/jquery.forms-advanced.js')}}"></script>
    
</body>
</html>
