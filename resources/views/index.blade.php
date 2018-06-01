@extends('layouts.app')

@section('css')

  <style>
  .jumbotron {
    padding: 4rem 2rem;
    background-image: url(image/bg.jpg);
    background-position: 50%;
    background-size: cover;
    background-repeat: no-repeat;
    text-align: center;
    padding-top: 46px;
    height: 380px;
    }

   .lead{
    font-weight: 500;
    color: #fff;
    margin-top: 15px;
    margin-bottom: 60px;
    z-index: 4;
    position: relative;
    text-shadow: 0 1px 8px rgba(0,0,0,.4);
    font-size: 21px;
   }

   .bg-light{
    background-color: #f4f4f4 !important;
    height: 150px;
    //text-align: center;
    margin-top: -32px;
   }
    
</style>
@endsection
@section('content')
   <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         <center> <h4 class="modal-title">Login Form</h4></center>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
         <div class="modal-body">
          <b>Username</b>
          <input type="email" placeholder="Enter Username" name="email" id="email" value="{{old('email')}}" style="height: 40px;width: 345px;margin-top: -5px;" required><br><br>

          <b>Password</b>&nbsp;
          <input type="password" placeholder="Enter Password" name="password" id="password" value="{{old('password')}}" style="height: 40px;width: 345px;margin-top: -5px;" required><br><br>
        
          <center><button type="submit" name="submit" style="width: 100px;background: #6f6f73;border: none;color: #fff;height: 40px;">Login</button>
          <a href="admin_registation"><button type="button" name="signup" style="width: 100px;background: #6f6f73;border: none;color: #fff;height: 40px;">Sign Up</button></a></center>
        </div>
        </form>
      </div>
    </div>
  </div>
<!-- The Modal End -->



<div class="jumbotron">
   
  <h1 class="display-4" style="font-family: roboto;color:#fff;">Your Service Expert in Chennai</h1>
  <p class="lead">Get instant access to reliable and affordable services</p>
  
  <form class="form-inline" style="display: initial;">
    <select name="choice" style="border-radius: 4px;width: 170px;height: 50px;margin-top:0;background-color: #fff;border: 1px solid #dedede;box-shadow: 0 1px 3px 0 #dedede;
         box-shadow: none;border: none;">
    <option value="noida">Noida</option>
    <option value="delhi">Delhi</option>
    </select>

    <input class="form-control" type="search" placeholder="Search for a service" aria-label="Search" style="height: 50px;width: 300px;margin-top: -5px;border: none;font-size: 16px;padding-left: 14px;border-radius: 4px;border: none;">
  </form>  

</div>

<div class="jumbotron-fluid bg-light">
  <div class="container">
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-2">
                <h5>{{ $category->name }}</h5>
                <img src="{{asset("/storage/app/$category->image")}}" alt="">
            </div>
        @endforeach
    </div>
  </div>
</div>

<!----------------------Recommended Services-------------------->

<h1 style="font-size: 20px;margin:40px;">Recommended Services</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="image/service.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">AC Service and Repair</p>
        </div>
        <div class="col-md-3">
            <img src="image/service1.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Salon at Home</p>

        </div>
        <div class="col-md-3">
            <img src="image/service2.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Party Makeup Artist</p>

        </div>
        <div class="col-md-3">
            <img src="image/service3.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Packers & Movers</p>

        </div>
    </div>
</div>

<!--------Health & Wellness-------------->
<h1 style="font-size: 20px;margin:40px;">Health & Wellness</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="image/health.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Yoga Trainer at Home</p>
        </div>
        <div class="col-md-3">
            <img src="image/health1.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Fitness Trainer at Home</p>

        </div>
        <div class="col-md-3">
            <img src="image/health2.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Dietician</p>

        </div>
        <div class="col-md-3">
            <img src="image/health3.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Physiotherapy at Home</p>

        </div>
    </div>
</div>

<!--------Home Cleaning-------------->
<h1 style="font-size: 20px;margin:40px;">Home Cleaning</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="image/clean.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Home Deep Cleaning</p>
        </div>
        <div class="col-md-3">
            <img src="image/clean1.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Bathroom Deep Cleaning</p>

        </div>
        <div class="col-md-3">
            <img src="image/clean2.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Kitchen Deep Cleaning</p>

        </div>
        <div class="col-md-3">
            <img src="image/clean3.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Sofa Cleaning</p>

        </div>
    </div>
</div>

<!--------Repairs-------------->
<h1 style="font-size: 20px;margin:40px;">Repairs</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="image/repair.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Carpenter</p>
        </div>
        <div class="col-md-3">
            <img src="image/repair1.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Plumber</p>

        </div>
        <div class="col-md-3">
            <img src="image/repair2.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Electrician</p>

        </div>
        <div class="col-md-3">
            <img src="image/repair3.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">AC Service and Repair</p>

        </div>
    </div>
</div>

<!--------Home Design & Construction-------------->
<h1 style="font-size: 20px;margin:40px;">Home Design & Construction</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="image/constraction.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Wall Painters</p>
        </div>
        <div class="col-md-3">
            <img src="image/constraction1.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Interior Designer</p>
        </div>
        <div class="col-md-3">
            <img src="image/constraction2.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Architect</p>
        </div>
        <div class="col-md-3">
            <img src="image/constraction3.webp" style="height: 140px;width: 269px;    border-radius: 4px;">
            <p style="font-size: 14px;color: #343434;font-weight: 400;margin: 0;
               margin-top: 10px;">Construction and Renovation</p>
        </div>
    </div>
</div>
<br><br><br>
<div class="container">
    <div class="row" style="display: -webkit-box;">
        
        <div class="col-md-6" style="background-color: #f5f5f5;padding: 32px 10px;
           text-align: center;margin: 0px 3px;">
         <img  src="image/c.png" alt="Card image cap" style="border-radius: 180px;">
         <h2 style="font-size: 28px;font-weight: 600;line-height: 1.5;text-align: center;
          color: #000;margin: 0 0 4px;">Planning a Wedding?</h2>
         <p class="card-text">Browse 25,000+ wedding photos, bridal looks, makeup styles, wedding themes.</p>
        </div>

       <div class="col-md-6" style="background-color: #f5f5f5;padding: 32px 10px;
           text-align: center;">
        <img  src="image/c1.png" alt="Card image cap" style="border-radius: 180px;">
        <h2 style="font-size: 28px;font-weight: 600;line-height: 1.5;text-align: center;
          color: #000;margin: 0 0 4px;">Renovating your home?</h2>
        <p class="card-text">Get inspiration and ideas from 1000+ projects on home renovation and design.</p>
      </div>
    </div>
</div>
<p style="margin-top: 60px;">

@endsection
