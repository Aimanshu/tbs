@extends('super_admin.layouts.app')


<!-- assin Traders to admin-->

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Create Traders
                        </h2>
                    </div>
                    <div class="body">
                        @include('layouts.errors') 
                        <form role="form" method="POST" action="{{ url('/addrole') }}">
                         {!! csrf_field() !!}
                        	<label>Name</label>
                        	<div class="form-group">
                                <div class="form-line">
                                 <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <label>Email Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email" name="email" value="{{old('email')}}"class="form-control" placeholder="Enter your email address">
                                </div>
                            </div>

                            <label>Mobile Number</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" id="number" name="number"  value="{{old('number')}}"  class="form-control" placeholder="Enter your Mobile Number">
                                </div>
                            </div>

                            <label>Password</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" id="password" name="password"  value="{{old('password')}}"  class="form-control" placeholder="Enter your password">
                                </div>
                            </div>

                            <label>Do You have Business</label>
                            <div class="form-group">
                               <input type="radio" name="business"  value="0">
                               <label for="male">Yes</label>
                               <input type="radio" name="business"  value="1">
                               <label for="female" class="m-l-20">No</label>
                            </div>
                           
                            <label>Are You</label>
                            <div class="form-group">
                               <input type="radio" name="isOwner" value="0">
                               <label for="male">Owner</label>
                               <input type="radio" name="isOwner" value="1">
                               <label for="female" class="m-l-20">Executive</label>
                            </div>
                                
                            <label>Business Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" id="business_name" name="business_name" value="{{old('business_name')}}" placeholder="Enter Your Business Name">
                                </div>
                            </div>

                           <label>Business Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                   <input type="Email" class="form-control" id="business_email" name="business_email" value="{{old('business_email')}}" placeholder="Enter Your Business Email">
                                </div>
                            </div>
                             
                            <label>Business Contact No</label>
                            <div class="form-group">
                                <div class="form-line">
	                                 <input type="Number" class="form-control" id="business_cont_no" name="business_cont_no" value="{{old('business_count_no')}}" placeholder="Enter Your Business Contact Number">
                                </div>
                            </div>     
                            
                            <label>Website</label>
                            <div class="form-group">
                                <div class="form-line">
                                   <input type="text" class="form-control" id="website" name="website" value="{{old('website')}}" placeholder="Enter Your Website">
                                </div>
                            </div> 

                            <label>Location</label>
                            <div class="form-group">
                                <div class="form-line">
                                   <input type="text" class="form-control" id="map" name="location" placeholder="Enter Your Location" value="{{old('location')}}" >
                                   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCx8x-tjyMRqhZoxuXPnZLE3H934OCQBNE&libraries=places"></script>
                                </div>
                            </div> 

                            <label>Full Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                   <textarea class="form-group" rows="5" cols="112" name="full_address" id="full_address" value="{{old('full_address')}}"></textarea>
                                </div>
                            </div> 

                            <label>Type Of Business</label>
                            <div class="form-group">
                               <input type="radio" name="types_of_business" value="0">
                               <label>Product</label>
                               <input type="radio" name="types_of_business" value="1">
                               <label  class="m-l-20">Service</label>
                               <input type="radio" name="types_of_business" value="3">
                               <label  class="m-l-20">Both</label>
                            </div>

                             <label>Product Or Service Offered</label>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" id="userid" name="userid">
                                    <option value="">--Select One--</option>
                                    <option value=""></option>
                                    </select>
                                </div>
                             </div>
                             
                            <input type="checkbox" id="remember_me" class="filled-in">
                            <label for="remember_me">Remember Me</label>
                            <br>
                            <input type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<!-- end assign Trades to admin-->
