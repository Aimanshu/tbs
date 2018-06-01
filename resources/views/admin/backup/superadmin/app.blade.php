<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
    <link rel="shortcut icon" href="img/favicon.png">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

     <!-- Icons -->
     <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
     <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

      <!-- Main styles for this application -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/abdul_style.css" rel="stylesheet">
  <!-- Styles required by this views -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My Clap India</title>

    <!-- Styles -->
   
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed ">
<div id="app">
    @include('admin.superadmin.nav')
    @yield('content')
    @include('admin.superadmin.footer')
</div>
 <!-- CoreUI main scripts -->
<script type="text/javascript">
   document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};

</script>
<script type="text/javascript">
   document.getElementById("files_2").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image_2").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};

</script>
<!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
<!-- Bootstrap and necessary plugins -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/pace-progress/pace.min.js"></script>

  <!-- Plugins and scripts required by all views -->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="js/my.js"></script>
  

 

</body>
</html>
