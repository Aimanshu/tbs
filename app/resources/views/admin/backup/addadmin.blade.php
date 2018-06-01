<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    @section('css')
      <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
          height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
          height: 100%;
          margin: 0;
          padding: 0;
        }
      </style>
    @endsection
  <body>
<center><h1 style="color:red">Add Role Information</h1></center>
<hr>

<div class="container">
@include('layouts.errors')
<form role="form" method="POST" action="{{ url('/addrole') }}">
 {!! csrf_field() !!}
 
  @if(Session::has('flash_message'))
   <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
  @endif
     
  <div class="form-group row">
   <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
     <div class="col-sm-10">
        <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Enter Your Name">
      </div>
    </div>

     <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email:-</label>
      <div class="col-sm-10">
        <input type="Email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter Your Email Address">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile Number:-</label>
      <div class="col-sm-10">
        <input type="Number" class="form-control" id="mobile" name="mobile" value="{{old('mobile')}}" placeholder="Enter Your Mobile Number">
      </div>
    </div>

    <div class="form-group row">
     <label for="inputEmail3" class="col-sm-2 col-form-label">Password:-</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Enter Your Password">
      </div>
    </div>

   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">He Is:-</label>
      <div class="col-sm-10">
        <div class="radio">
         <label><input type="radio" name="role" value="2" >Admin</label>
         <label><input type="radio" name="role" value="3" >Trades</label>
         <label><input type="radio" name="role" value="4" >Users</label>
       </div>
       </div>
   </div>
<hr>


    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>
</div>


  </body>
</html>