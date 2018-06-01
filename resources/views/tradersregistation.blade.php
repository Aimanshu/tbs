@extends('home.layouts2.app')

@section('content')
<body class="tg-login">
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
	<div class="container-fluid">
				<div class="row">
			
			    </div>
	</div>

		<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout">
			<div class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="tg-content" class="tg-content">
							<!-- <form > -->
							@include('layouts.errors')
							@if(Session::has('flash_message'))
								<div class="alert alert-success">
								<span class="glyphicon glyphicon-ok"></span>
								<em>{!! session('flash_message') !!}</em>
								</div> 
							@endif
							
							<form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="/payment/add-funds/paypal">
							  {{ csrf_field() }}
							  <h2 class="w3-text-blue">Payment Form</h2>
							  <p>Demo PayPal form - Integrating paypal in laravel</p>
							  <p>      
							  <label class="w3-text-blue"><b>Enter Amount</b></label>
							  <input class="w3-input w3-border" name="amount" type="text"></p>      
							  <button class="w3-btn w3-blue">Pay with PayPal</button></p>
							</form>

							<form action="{{ url('/traders_registation') }}" method="POST" id="tradersform" class="tg-themeform tg-formlogin-register">
							{!! csrf_field() !!}

							<div class="col-md-2"></div>
								<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" style="float: left;padding: 30px 30px 30px;border-radius: 5px;background: #f7f7f7;">
									<div class="tg-heading">
										<h2>Register As</h2>
									</div>
									<fieldset>
										<ul class="tg-tabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#regularuser" data-toggle="tab">
													<span class="lnr lnr-user"></span>
													<div class="tg-navcontent">
													<h3>Step : 1</h3>
														<!-- <h3>Regular Single User</h3>
														<span>Step: 1</span> -->
													</div>
												</a>
											</li>
											<li role="presentation">
												<a href="#company" data-toggle="tab">
													<span class="lnr lnr-briefcase"></span>
													<div class="tg-navcontent">
													<h3>Step : 2</h3>
														<!-- <h3>Do You Have Buisness?</h3>
														<span>Step: 2</span> -->
													</div>
												</a>
											</li>
										</ul>
										<div class="tg-themetabcontent tab-content">
											<div class="tab-pane active fade in" id="regularuser">
												<div class="form-group">
													<div class="tg-registeras">
														<span>Already have an account?<a href="{{url('logins')}}"> Login Now</a></span>
													</div>
												</div>
												<div class="form-group">
    												<input type="text" id="name" value="{{old('name')}}" name="name" class="form-control" placeholder="Enter Full Name">
												</div>

												<div class="form-group">
													<input type="email"  name="email" value="{{old('email')}}" class="form-control form-control-sm" placeholder="Enter Email" style="border-radius:0px;">
												</div>
							
												<div class="form-group">
													<input type="text" id="mobile" name="mobile" value="{{old('mobile')}}" class="form-control" placeholder="Enter Mobile Number">
												</div>
												
												<ul class="tg-socialicons tg-socialsharewithtext">
													<li class="tg-facebook">
														<a class="tg-roundicontext" href="{{ url('/auth/facebook') }}">
															<em class="tg-usericonholder">
																<i class="fa fa-facebook-f"></i>
																<span>facebook</span>
															</em>
														</a>
													</li>
													<li class="tg-googleplus">
														<a class="tg-roundicontext" href="{{ url('/auth/google') }}">
															<em class="tg-usericonholder">
																<i class="fa fa-google-plus"></i>
																<span>googl+</span>
															</em>
														</a>
													</li>
												</ul>
																								
												<li role="presentation"><a href="#company" data-toggle="tab"><span class="lnr lnr-briefcase"></span><button class="tg-btn tab-pane fade in active" type="button" class="active">Next</button></a></li>
											

											</div>

											<div class="tab-pane fade in" id="company">
												<div class="form-group">
												<div class="tg-registeras">

												<span>Do You Have Buisness:</span>
														<div class="tg-radio">
															<input type="radio" class="chkPassPort" id="business" name="chkPassPort"  onclick="isbuessiness(1)" value="1" checked>
															<label for="business">Yes</label>
														</div>
														<div class="tg-radio">
															<input type="radio" class="chkPassPort" id="professional" name="chkPassPort" onclick="isbuessiness(0)" value="0">
															<label for="professional">No</label>
														</div>
													</div>
												</div>
												
												
												<div class="form-group" id="business_name">
												<input type="text"  name="business_name" value="{{old('business_name')}}" class="form-control" placeholder="Enter Business Name">
												</div>

												<div class="form-group" id="business_email">
													<input type="text"  name="business_email" value="{{old('business_email')}}" class="form-control" placeholder="Enter Email" >
												</div>

												<div class="form-group" id="business_cont_no">
													<input type="text"  name="business_cont_no" value="{{old('business_count_no')}}" class="form-control" placeholder="Enter Business Number" >													<!-- <input type="text" name="text" class="form-control" placeholder="Business Email"> -->
												</div>

												<div class="form-group" id="website">
													<input type="text"  name="website" value="{{old('website')}}" class="form-control" placeholder="Enter Website">
												</div>

												<div class="form-group tg-inputwithicon">
													<input type="text" id="map_location" onFocus="geolocate()" name="location" placeholder="Enter Your Location" value="{{old('location')}}" class="form-control">
														<i class="fa fa-crosshairs tg-icon"></i>
														<i class="fa fa-angle-down tg-icon"></i>
													</div>

												<div class="form-group" id="full_address">
													<input type="text" name="full_address"  value="{{old('full_address')}}" class="form-control" placeholder="Enter Address">
												</div>

												<div class="form-group" id="serviceorproduct">
												<span> Type Of Business: <span>
												<br>
												<div class="form-check">
													<input class="form-check-input" checked type="radio" name="types_of_business" value="1">  
													<label class="form-check-label" for="inline-radio3" style="display: inline;">PRODUCT</label>

													<input class="form-check-input" type="radio" name="types_of_business" value="2"> 
													<label class="form-check-label" for="inline-radio3" style="display: inline;">SERVICE</label>
													
													<input class="form-check-input" type="radio"  name="types_of_business" value="3">
													<label class="form-check-label" for="inline-radio3" style="display: inline;">BOTH</label>
												</div>
												</div>
							
							
												<div class="form-group" id="categories">
														<span class="tg-select">
															<select class="form-control show-tick" id="main_categories_id" name="main_categories_id">
															@foreach($main_categories as $main_categorie)
																<option value="{{ $main_categorie->id }}">{{ $main_categorie->name }}</option>
															@endforeach
															</select>
														</span>

														<span></span>
														<label>Product Or Service Offered</label>
																<div class="row clearfix">
																		<div class="col-sm-12" id="multiform">
																		</div>
																</div>
												</div>

												


												<div class="form-group">
													<input type="text" class="form-control" id="occupations" name="occupations" value="{{old('occupations')}}" placeholder="Enter Your Occupations">
												</div>

												<!-- <div class="form-group">
													<div class="tg-checkbox">
														<input type="checkbox" id="conditions">
														<label for="conditions">I have read the <a href="#">Terms &amp; Conditions</a> and accept them</label>
													</div>
												</div> -->
												<button class="tg-btn" type="button" id="submitbtn">Register Now</button>
												<ul class="tg-socialicons tg-socialsharewithtext">
													<li class="tg-facebook">
														<a class="tg-roundicontext" href="{{ url('/auth/facebook') }}">
															<em class="tg-usericonholder">
																<i class="fa fa-facebook-f"></i>
																<span>facebook</span>
															</em>
														</a>
													</li>
													<li class="tg-googleplus">
														<a class="tg-roundicontext" href="{{ url('/auth/google') }}">
															<em class="tg-usericonholder">
																<i class="fa fa-google-plus"></i>
																<span>googl+</span>
															</em>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</fieldset>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>

<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Please Fill all Fields !!</center> </h4>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="overlay3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Thansk For Registation !!</center> </h4>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="overlay2">
<form class="w3-container w3-display-middle w3-card-4 " method="POST" id="paymentform"  action="/payment/add-funds/paypal">
	{{ csrf_field() }}
	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Thank You For Registation.Now You Have To Pay 6000 only. </center> </h4>
				<!-- <br><button class="w3-btn w3-blue" id="submitbtn" >Pay Now !!</button></p> -->
				<center><button type="Submit" class="btn btn-primary m-t-15 waves-effect" id="submitbtn">SUBMIT</button></center>
      </div>
    </div>
  </div>
	<form>
</div>

@endsection

@section('script')
<script>
setTimeout(function() {
    $('#overlay').modal('hide');
}, 5000);

setTimeout(function() {
    $('#overlay2').modal('hide');
}, 5000);
 
setTimeout(function() {
    $('#overlay3').modal('hide');
}, 5000); 
</script>

<script>
$('#main_categories_id').on('change', function() {
var value = $(this).val();


var baseurl  = "{{ url('/getsubcategories') }}/" + value;
$.ajax({
        type: 'GET',
        url: baseurl,
        beforeSend: function() {
          $(".loader").show();
      },
        success: function(response) { 
           // console.log(response);
            var options = ''             
            $.each( response, function( index, value ){
                options +='<option value='+value.id+'>'+value.name+'</option>';
            });
                $('#multiform').append('<select class="form-control show-tick" id="prod_or_serv_offe" name="prod_or_serv_offe[]" multiple>'+options+'</select>');
        },
        complete: function() {
          $(".loader").hide();
    },
    });
});
</script>

<script>
  var url2  = "{{url('/traders_registation')}}"
    $(document).on('click', '#submitbtn', function(event){
      event.preventDefault();
		var datas = $( "form#tradersform" ).serialize();
      $.ajax({
        type: 'POST',
        url: url2,
        data: datas,
        dataType: "text",
        beforeSend: function() {
          $(".loader").show();
      },
        success: function(response) { 
           // console.log(response);
						if(response == "traders")
						{
							$("#paymentform").submit();	
						}else{
							if(response == "success"){
							$('#overlay3').modal('show');
						
            }else{
							$('#overlay').modal('show');
            }
					}
	        },
        error: function (textStatus, errorThrown) {
          console.log("Error In to Validate");
        },
        complete: function() {
          $(".loader").hide();
        },
      });
    })
</script>

<script>
    function isbuessiness(id){
      if(id == 1) {
        $('#business_name').show()
        $('#business_email').show()
        $('#business_cont_no').show()
        $('#website').show()
        $('#full_address').show()
        $('#serviceorproduct').show()
        $('#categories').show()
      }else{
        $('#business_name').hide()
        $('#business_email').hide()
        $('#business_cont_no').hide()
        $('#website').hide()
        $('#full_address').hide()
        $('#serviceorproduct').hide()
        $('#categories').hide()
      }
    }
</script>

<!--Auto Fill Address-->
   <script>
      var placeSearch, autocomplete;
      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('map_location')),
            {types: ['geocode']});
             }
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
					//	console.log(position);
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
