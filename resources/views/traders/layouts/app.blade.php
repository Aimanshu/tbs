<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Trader Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('node_modules/superadmin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('node_modules/superadmin/plugins/node-waves/waves.css') }}" rel="stylesheet">

    <!-- Animation Css -->
    <link href="{{ asset('node_modules/superadmin/plugins/animate-css/animate.css') }}" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="{{ asset('node_modules/superadmin/plugins/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('node_modules/superadmin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('node_modules/superadmin/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
     <link href="{{ asset('node_modules/superadmin/css/themes/all-themes.css') }}" rel="stylesheet">

     <script src="https://cdn.ckeditor.com/ckeditor5/10.0.0/classic/ckeditor.js"></script>
    @yield('css')
</head>

<body class="theme-red">

   @include('traders.layouts.nav') 
   @include('traders.layouts.side_bar') 
   @yield('content')
 <!-- Jquery Core Js -->
    <script src="{{ asset('node_modules/superadmin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('node_modules/superadmin/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('node_modules/superadmin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('node_modules/superadmin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('node_modules/superadmin/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
     <script src="{{ asset('node_modules/superadmin/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('node_modules/superadmin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('node_modules/superadmin/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('node_modules/superadmin/plugins/chartjs/Chart.bundle.js') }}"></script>
    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('node_modules/superadmin/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('node_modules/superadmin/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('node_modules/superadmin/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('node_modules/superadmin/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('node_modules/superadmin/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('node_modules/superadmin/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('node_modules/superadmin/js/admin.js') }}"></script>
    <script src="{{ asset('node_modules/superadmin/js/pages/index.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('node_modules/superadmin/js/demo.js') }}"></script>
    @yield('script')
</body>

</html>