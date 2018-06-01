@extends('home.layouts.app')
   


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

@section('content')


<div class="container">
@include('layouts.errors')

@if(Session::has('flash_message'))
  <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em>
 {!! session('flash_message') !!}</em></div> @endif

<form role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
<center><h1 style="color:red;margin-top: 7%;">Registation</h1></center>
<hr>
    
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
    <label for="inputEmail3" class="col-sm-2 col-form-label">Do You have Business:-</label>
      <div class="col-sm-10">
        <div class="radio">
         <label for="chkYes"><input type="radio" id="chkYes" checked name="chkPassPort"  onclick="ShowHideDiv()" value="0"/>Yes</label>
         <label for="chkNo"> <input type="radio" id="chkNo" name="chkPassPort"  onclick="ShowHideDiv()" value="1" />No</label>
       </div>
       </div>
   </div>
<hr>
 <br>
    <div id="dvPassport2" style="display: show">
        
   <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Are You:-</label>
      <div class="col-sm-10">
      <div class="radio">
       <label><input type="radio" name="isOwner" value="0">Owner</label>
       <label><input type="radio" name="isOwner" value="1">Executive</label>
    </div>
    </div>
    </div>


    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Business Name:-</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="business_name" name="business_name" value="{{old('business_name')}}" placeholder="Enter Your Business Name">
      </div>
    </div>

   <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Business Email:-</label>
      <div class="col-sm-10">
        <input type="Email" class="form-control" id="business_email" name="business_email" value="{{old('business_email')}}" placeholder="Enter Your Business Email">
      </div>
    </div>

     <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Business Contact No:-</label>
      <div class="col-sm-10">
        <input type="Number" class="form-control" id="business_cont_no" name="business_cont_no" value="{{old('business_count_no')}}" placeholder="Enter Your Business Contact Number">
      </div>
    </div> 
    
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Website:-</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="website" name="website" value="{{old('website')}}" placeholder="Enter Your Website">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Location:-</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="map_location" onFocus="geolocate()" name="location" placeholder="Enter Your Location" value="{{old('location')}}" >
      </div>
    </div>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Full Address:-</label>
      <div class="col-sm-10">
        <textarea class="form-group" rows="5" cols="112" name="full_address" id="full_address" value="{{old('full_address')}}"></textarea>
      </div>
    </div>

     <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Type Of Business:-</label>
      <div class="col-sm-10">
      <div class="radio">
       <label><input type="radio" name="types_of_business" value="0">Product</label>
       <label><input type="radio" name="types_of_business" value="1" >Service</label>
       <label><input type="radio" name="types_of_business" value="2">Both</label>
    </div>
    </div>
    </div>

   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Or Service Offered:-</label>
     <div class="col-sm-10">
       <select class="form-control" id="prod_or_serv_offe" name="prod_or_serv_offe">
       <option value="">--Select Category--</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
         </select>
      </div>
  </div>

    </div><!--Show End-->

<div id="dvPassport" style="display: none">

  <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Location:-</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="map2" name="location" placeholder="Enter Your Location" value="{{old('location')}}" >
       
      </div>
    </div>
   
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Occupations:-</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="occupation" name="occupation" value="{{old('occupation')}}" placeholder="Enter Your Occupations">
      </div>
    </div> 


</div><!--Show End-->


    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>
</div>

@endsection

@section('script')

   <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      var placeSearch, autocomplete;

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('map_location')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        // autocomplete.addListener('place_changed', fillInAddress);
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFye6-D7TepBrDf4PhgTg0oEgJ9OFYzvY&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection
  