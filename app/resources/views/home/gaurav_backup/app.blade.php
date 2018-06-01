
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>My Clap India</title>

  <!-- Icons -->
  <link href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('node_modules/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <!-- Main styles for this application -->
  <link href="{{ asset('node_modules/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('node_modules/css/abdul_home.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <!-- Styles required by this views -->
    
@yield('css')
</head>


<body class="app header-fixed" style="background:#fff;">

@include('home.layouts.nav')
<div class="app-body" style="margin-top:0px;" id="app">
 
<!-- Main content -->
<main class="main">

    @yield('content')
 
    @include('home.layouts.footer')


</main>
</div>

  


  <!-- Bootstrap and necessary plugins -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="{{ asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('node_modules/pace-progress/pace.min.js')}}"></script>

  <!-- Plugins and scripts required by all views -->
 

  <!-- CoreUI main scripts -->
  @yield('script')

</body>
</html>