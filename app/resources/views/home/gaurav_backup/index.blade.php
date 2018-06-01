@extends('home.layouts.app')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" />

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
          <a href="registation"><button type="button" name="signup" style="width: 100px;background: #6f6f73;border: none;color: #fff;height: 40px;">Sign Up</button></a></center>
        </div>
        </form>
      </div>
    </div>
  </div>
<!-- The Modal End -->

<div class="my_car">
	<div class="container">
		<center><h1>Your Service Expert in India</h1>
		<p>Get instant access to reliable and affordable services</p>
		</center>
			<div class="row">
				
				<div class="col-sm-2"></div>
				<div class="col-sm-3" style="margin-top:10px;padding-right:0px;">
					<input type="text" id="map_location" name="input1-group3" class="form-control " placeholder="Enter Address" style="border-radius:4px;height:54px;border:1px solid #fff;">
				</div>
				<div class="col-sm-5" style="padding-left:0px;">
					<div class="search_bar_new">
						<div class="input-group" id="the-basics">
			               <input type="text" id="input1-group3" name="input1-group3" class="form-control typeahead" placeholder="Search for a services" style="border-radius:4px;height:54px;border:1px solid #fff; width: 430px;">
						</div>
					</div><!---end search_bar_new-->
					<div class="col-sm-2"></div>
			    </div><!---end of col-sm-6-->


	        </div><!---end of my row-->
	        <!---start textarea-->
            <div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8" style="padding-left:0px;">
				
					<div class="search_bar_new">
					<div class="input-group">
                     <textarea rows="2" cols="10" class="form-control" id="message" name="message" placeholder="Type Your Requirement Summary"></textarea>     
                    </div>
					</div>
					<div class="col-sm-2"></div>
			    </div><!---end of col-sm-8-->
               </div><!---end of row-->
               <!--end textarea-->

    </div><!---end of container-->

            <!--start Button-->
            <div class="row">
				
				<div class="col-sm-8"></div>
				<div class="col-sm-2" style="padding-left:0px;">
				<button type="button" class="btn btn-primary" name="submit" style="width: 50%;">Submit</button>
			    <div class="col-sm-2"></div>
			    </div><!---end of col-sm-2-->
            </div>
           <!--End Button-->
</div><!--end of my car-->




<div class="container-fluid" style="background:#f4f4f4;">
<div class="banner_below">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="modal_icon_1"></div>
			    <div class="btn_modal"><a href="#" data-toggle="modal" data-target="#searchmodal">Manufacturer</a></div>
			</div>
			<div class="col-sm-2">
				<div class="modal_icon_2"></div>
			    <div class="btn_modal"><a href="#" data-toggle="modal" data-target="#searchmodal">Supplier Service</a></div>
			</div>
			<div class="col-sm-2">
				<div class="modal_icon_3"></div>
			    <div class="btn_modal"><a href="#" data-toggle="modal" data-target="#searchmodal">Trader Service</a></div>
			</div>
			<div class="col-sm-2">
				<div class="modal_icon_4"></div>
			    <div class="btn_modal"><a href="#" data-toggle="modal" data-target="#searchmodal">Agent Service</a></div>
			</div>
			<div class="col-sm-2">
				<div class="modal_icon_5"></div>
			    <div class="btn_modal"><a href="#" data-toggle="modal" data-target="#searchmodal">Broker Service</a></div>
			</div>
			<div class="col-sm-2">
				<div class="modal_icon_6"></div>
			    <div class="btn_modal"><a href="#" data-toggle="modal" data-target="#searchmodal">Logistic Service</a></div>
			</div>
		</div>
	</div>
</div>
</div>





<div class="container">

	@foreach($categories->chunk(4) as $chunk_category)
		<div class="services_row">
			<h2>Recommended Services</h2>
			<div class="row">
				@foreach($chunk_category as $category)
					<div class="col-sm-3">
						<div class="service_1">
							
							<!--<a href="{{ route('register') }}" data-toggle="modal" data-target="#searchmodal">-->
								<a href="{{ route('enquriry_form',$category->slug ) }}">
								@if($category->image)
									<img src="{{asset("/storage/app/$category->image")}}"> 
								@else
									<img src="{{ asset('node_modules/img/service/s1.jpg') }}">
								@endif
							</a>
							<h4>{{ $category->name}}</h4>
							
						</div>
					</div>
				@endforeach
			</div>
		</div>
	@endforeach

	
</div>

<div class="container">
	<div class="two_box">
		<div class="row">
			<div class="col-sm-6">
				<div class="two_box_1">
				<center>	<img src="{{ asset('node_modules/img/service/p1.jpg') }}" class="img-responsive">
				<h1>Renovating your home?</h1>
				<p>Get inspiration and ideas from 1000+ projects on home renovation and design.</p>
				<a href="#">Browse Lead </a></center>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="two_box_1">
				<center>	<img src="{{ asset('node_modules/img/service/p2.jpg') }}" class="img-responsive">
				<h1>Waiting For Event Planner?</h1>
				<p>Get inspiration and ideas from 1000+ projects on Wedding Planner and design.</p>
				<a href="#">Browse Lead </a></center>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="test">
		<center><h1>Customer Reviews</h1></center>
		<div class="row">
			<div class="col-sm-4">
				<div class="test1">
					<img src="{{ asset('node_modules/img/avatars/6.jpg') }}">
					<span>Minakshi</span>
					<p style="margin-bottom:1px ;">New found respect for UrbanClap today! I decided to try their housekeeping services. Very happy and would definitely be using it again.</p>
					<a href="#">Reviewed on Facebook <i class="fa fa-facebook-square"></i> (218) </a><br/><hr/>
					<p style="padding:10px 10px 0px 10px;">Professional Hired</p>
					<img src="{{ asset('node_modules/img/avatars/2.jpg') }}" style="margin-top:0px;">
					<span>Suzzain <small class="badge badge-green"> 5 <i class="fa fa-star"></i></small></span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="test1">
					<img src="{{ asset('node_modules/img/avatars/6.jpg') }}">
					<span>Minakshi</span>
					<p style="margin-bottom:1px ;">New found respect for UrbanClap today! I decided to try their housekeeping services. Very happy and would definitely be using it again.</p>
					<a href="#">Reviewed on Facebook <i class="fa fa-facebook-square"></i> (218) </a><br/><hr/>
					<p style="padding:10px 10px 0px 10px;">Professional Hired</p>
					<img src="{{ asset('node_modules/img/avatars/2.jpg') }}" style="margin-top:0px;">
					<span>Suzzain <small class="badge badge-green"> 5 <i class="fa fa-star"></i></small></span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="test1">
					<img src="{{ asset('node_modules/img/avatars/6.jpg') }}">
					<span>Minakshi</span>
					<p style="margin-bottom:1px ;">New found respect for UrbanClap today! I decided to try their housekeeping services. Very happy and would definitely be using it again.</p>
					<a href="#">Reviewed on Facebook <i class="fa fa-facebook-square"></i> (218) </a><br/><hr/>
					<p style="padding:10px 10px 0px 10px;">Professional Hired</p>
					<img src="{{ asset('node_modules/img/avatars/2.jpg') }}" style="margin-top:0px;">
					<span>Suzzain <small class="badge badge-green"> 5 <i class="fa fa-star"></i></small></span>
				</div>
			</div>
			
		</div>
	</div>
</div>

<div class="container">
	<div class="test" style="padding:20px 0px;">
		
		<div class="row">
			
			<div class="col-sm-4">
				<div class="mob">
					<img src="{{ asset('node_modules/img/mobile.png') }}">
				</div>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-6" style="margin-top:50px;">
			<h1>Download The App</h1>
				<div class="test2">
					<p>Choose from 100+ services and track them on the go with the MyClap App</p>
					<p style="font-weight:600;">Send a link via SMS to install the app</p>
					<div class="row">
						<div class="col-sm-9">
							<div class="input-group" style="margin-bottom:20px;">
								<input type="text"  name="input1-group3" class="form-control" placeholder="Enter Your Mobile Number " style="border-radius:4px;height:54px;border:1px solid #666;">
							</div>
							<img src="{{ asset('node_modules/img/googlePlay.png') }}">
							<img src="{{ asset('node_modules/img/appStore.png' ) }}">
						</div>
						<div class="col-sm-3">
							<a href="#" class="btn btn-primary" style="border-radius:4px;height:54px;padding-top:15px;">Text Link App</a>
						</div>
					</div>
					
			</div>
			
		</div>
	</div>
</div>		
 </div>
@include('home.modal')
@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

<script>

var url  = "{{route('categories')}}"
var categoriesss = []
$.get(url, function( data ) {
    $.each( data, function( key, value ) {
	  categoriesss.push(value.name)
	});
});

var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

$('#the-basics .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'categoriesss',
  source: substringMatcher(categoriesss)
});
</script>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn2").style.display = "none";
  } else {
    document.getElementById("prevBtn2").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn2").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn2").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm2").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
 <!--main content-->


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