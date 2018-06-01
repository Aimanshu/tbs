<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TBS Point</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/normalize.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/font-awesome.min.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/linearicons.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/scrollbar.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/jquery-ui.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/prettyPhoto.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/owl.carousel.min.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/jquery.countdown.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/animate.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/transitions.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/main.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/color.css">
	<link rel="stylesheet" href="node_modules/css/shimpy/css/responsive.css">
	<!--Thpeahead-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" />

  <style>
    .form-control {
      color: #151b1e !important; 
    }
  </style>
  <!-- Styles required by this views -->
    
@yield('css')
</head>


<body class="app header-fixed" style="background:#fff;">
@include('home.layouts.loadder')
@include('home.layouts2.header')
<div class="app-body" style="margin-top:0px;" id="app">
 
<!-- Main content -->
<main class="main">

    @yield('content')
 
    @include('home.layouts2.footer')


</main>
</div>

  


  @yield('script')

</body>
</html>