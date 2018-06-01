@extends('home.layouts.app')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" />

<!--AngularJS-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>
	<script src="js/app.js"></script>
 

@endsection

@section('css')
<style>
  .twitter-typeahead > input {
    width: 400px;
    height: 30px;
  }
</style>
@endsection

@section('content')
 <div class="app-body" style="margin-top:0px;overflow-x:inherit;">
 



<!-----second modal---->

 
<div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top:65px;">
          <div class="modal-dialog modal-primary" role="document">
            <div class="modal-content">
              <div class="modal-header" style="color:#666;background:#f4f4f4;">
              <center>  <h4 class="modal-title" >Tell Us About Your Business Profile</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body" style="padding-left:30px;background:#f4f4f4;">
                <div class="row">
					<div class="col-sm-4">
						<div class="modal_icon_1">
							
						</div>
							<div class="btn_modal">
							<a href="#" class="btn btn-primary">Manufacturer</a>
						  </div>
					</div>
					<div class="col-sm-4">
					<a href="#"><div class="modal_icon_2">
							
						</div></a>
						<div class="btn_modal">
							<a href="#" class="btn btn-primary">I am a Supplier</a>
						  </div>
					</div>
					<div class="col-sm-4">
						<a href="#"><div class="modal_icon_3">
							
						</div></a>
						<div class="btn_modal">
							<a href="#" class="btn btn-primary">I am a Trader</a>
						  </div>
					</div>
				</div>
				
				<div class="row" style="margin-top:40px;">
					<div class="col-sm-4">
						<a href="#"><div class="modal_icon_4">
							
						</div></a>
						<div class="btn_modal">
							<a href="#" class="btn btn-primary">I am a Agent</a>
						  </div>
					</div>
					<div class="col-sm-4">
					<a href="#"><div class="modal_icon_5">
							
						</div></a>
						<div class="btn_modal">
							<a href="#" class="btn btn-primary">I am a Broker</a>
						  </div>
					</div>
					<div class="col-sm-4">
						<a href="#"><div class="modal_icon_6">
							
						</div></a>
						<div class="btn_modal">
							<a href="#" class="btn btn-primary">I am a Logistics</a>
						  </div>
					</div>
				</div>
				
				
              </div>
             
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->	 
	 
	 <div class="modal fade" id="searchmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top:65px;">
          <div class="modal-dialog modal-primary" role="document">
            <div class="modal-content">
              <div class="modal-header" style="color:#666;background:#f4f4f4;">
              <center>  <h4 class="modal-title" >Select Your Requirement :</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body" style="background:#f4f4f4;">
                <div class="row">
					
<form id="regForm2" action="#">

  <!-- One "tab" for each step in the form: -->
					<div class="tab"><p class="regForm2_p">Q1. You need Yoga Trainer for:</p>
						<div class="form-check">
                          <input class="form-check-input" type="radio" value="radio1" id="radio1" name="radios">
                          <label class="form-check-label" for="radio1">
                          Weight Loss
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio2" name="radios">
                          <label class="form-check-label" for="radio2">
                          General Fitness
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio3" name="radios">
                          <label class="form-check-label" for="radio3">
                        Weight Increase
                          </label>
                        </div>
						<div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio4" name="radios">
                          <label class="form-check-label" for="radio3">
                          Other
                          </label>
                        </div>

					</div>
					
					<!--second tab-->
					
					<div class="tab"><p class="regForm2_p">Q2. You Are :</p>
						<div class="form-check">
                          <input class="form-check-input" type="radio" value="radio1" id="radio5" name="radios">
                          <label class="form-check-label" for="radio1">
                           Supplier 
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio6" name="radios">
                          <label class="form-check-label" for="radio2">
                           Manufacturer
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio7" name="radios">
                          <label class="form-check-label" for="radio3">
                          Trader
                          </label>
                        </div>
						<div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio8" name="radios">
                          <label class="form-check-label" for="radio3">
                          Agent / Broker
                          </label>
                        </div>

					</div>
				<!--Third tab-->
					
					<div class="tab"><p class="regForm2_p">Q3. Your Age :</p>
						<div class="form-check">
                          <input class="form-check-input" type="radio" value="radio1" id="radio9" name="radios">
                          <label class="form-check-label" for="radio1">
                          Less than 25 years
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio10" name="radios">
                          <label class="form-check-label" for="radio2">
                          25 - 30 years
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio11" name="radios">
                          <label class="form-check-label" for="radio3">
                          31 - 40 years
                          </label>
                        </div>
						<div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio12" name="radios">
                          <label class="form-check-label" for="radio3">
                          40+ years
                          </label>
                        </div>

					</div>
				<!--Forth tab-->
					
					<div class="tab"><p class="regForm2_p">Q4. Select Your Membership :</p>
						<div class="form-check">
                          <input class="form-check-input" type="radio" value="radio1" id="radio13" name="radios">
                          <label class="form-check-label" for="radio1">
                          Normal Member
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio14" name="radios">
                          <label class="form-check-label" for="radio2">
                          Silver Member
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio15" name="radios">
                          <label class="form-check-label" for="radio3">
                          Gold Member
                          </label>
                        </div>
				          		<div class="form-check">
                          <input class="form-check-input" type="radio" value="radio2" id="radio16" name="radios">
                          <label class="form-check-label" for="radio3">
                          Platinum Member
                          </label>
                        </div>

					</div>
  <div style="overflow:auto;margin-top:20px;">
    <center><div>
		<a class="btn btn-danger active" style="border-radius:5px;display:contents;" id="prevBtn2" onclick="nextPrev(-1)">&nbsp;&nbsp;Previous</a>
		<a class="btn btn-danger active" style="border-radius:5px;" id="nextBtn2" onclick="nextPrev(1)">&nbsp;&nbsp;Next</a>
    </div></center>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>


				</div><!--end of row-->
				
              </div>
             
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
		
<!-- Main content -->
<main class="main">
 
<div class="my_car">
	<div class="container">
		<div class="wrap_banner">
			<center><h1>Your Service Expert in India</h1>
		<p>Get instant access to reliable and affordable services</p>
		</center>

		</div>
	</div>
</div><!---end of my car-->

<div class="my_search_new" style="background: rgba(0,0,0,0.24);padding: 20px 0px;">
	<div class="container">
  <div class="row">
				<div class="col-sm-3">
					<div class="location_button_new">
						<input type="text" id="map_location" name="addresss" class="form-control" placeholder="Enter Address" style="border-radius:4px;height:54px;border:1px solid #fff;">
					</div> 
				</div>
				<div class="col-sm-9">
					<div class="search_bar_new_new">
					<div class="input-group" id="the-basics">
                           <input type="text" id="input1-group3" name="search" class="form-control typeahead" placeholder="Search for a services" style="border-radius:4px;height:54px;border:1px solid #fff;">
					</div>
					</div>
				</div>
			</div>
			</div>
</div>

<div class="container-fluid" style="background:#f4f4f4;">
<div class="banner_below">
	<div class="container">
	  <ul class="nav nav-tabs my_tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#sec1" role="tab" aria-controls="home">
					<center><div class="modal_icon_1"></div></center>
					<p style="padding:0px;margin-bottom:0px;">Category 1</p>
				  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#sec2" role="tab" aria-controls="profile">
				  <center><div class="modal_icon_2"></div></center>
				  <p style="padding:0px;margin-bottom:0px;">Category 2</p>
				  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#sec3" role="tab" aria-controls="messages">
				   <center><div class="modal_icon_3"></div></center>
				   <p style="padding:0px;margin-bottom:0px;">Category 3</p>
				  </a>
                </li>
				
				<li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#sec4" role="tab" aria-controls="home">
					<center><div class="modal_icon_4"></div></center>
					<p style="padding:0px;margin-bottom:0px;">Category 4</p>
				  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#sec5" role="tab" aria-controls="profile">
				  <center><div class="modal_icon_5"></div></center>
				  <p style="padding:0px;margin-bottom:0px;">Category 5</p>
				  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#sec6" role="tab" aria-controls="messages">
				   <center><div class="modal_icon_6"></div></center>
				   <p style="padding:0px;margin-bottom:0px;">Category 6</p>
				  </a>
                </li>
				
				
       </ul>
	</div>
</div>
</div>
<!--end of services-->
<div class="container">

 <div class="tab-content" style="border:none;">
                <div class="tab-pane active" id="sec1" role="tabpanel">
					<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i1.png')}}"></a></center>
			<p>Cleaning</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i2.png')}}"></a></center>
			 <p>Mechanic</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i3.png')}}"></a></center>
			<p>Carpenter</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i4.png')}}"></a></center>
			<p>Yoga Teacher</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i5.png')}}"></a></center>
			<p>Beautician</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i6.png')}}"></a></center>
			<p>Dancer</p>
			</div>
		</div>
	</div>
	</div>
	
	
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Photographer</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i8.png')}}.png"></a></center>
			 <p>Techs Support</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i9.png')}}"></a></center>
			<p>Buffet Planner</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i10.png')}}"></a></center>
			<p>Pest Control</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i11.png')}}"></a></center>
			<p>Wedding Shoot</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i12.png')}}"></a></center>
			<p>AC Repair</p>
			</div>
		</div>
	</div>
	</div>
	
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i13.png')}}"></a></center>
			<p>Swimming Trainer</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i14.png')}}"></a></center>
			 <p>Plumber</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i15.png')}}"></a></center>
			<p>Electrician</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i16.png')}}"></a></center>
			<p>Kitchen Chef</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i17.png')}}"></a></center>
			<p>Home Spa</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i18.png')}}"></a></center>
			<p>Orchestra Band</p>
			</div>
		</div>
	</div>
	</div>
                </div>
				
				
<!--section 2 start-->				
				
                <div class="tab-pane" id="sec2" role="tabpanel">
					
	
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Photographer</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i8.png')}}g"></a></center>
			 <p>Techs Support</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i9.png')}}"></a></center>
			<p>Buffet Planner</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i10.png')}}"></a></center>
			<p>Pest Control</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i11.png')}}"></a></center>
			<p>Wedding Shoot</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i12.png')}}"></a></center>
			<p>AC Repair</p>
			</div>
		</div>
	</div>
	</div>
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i1.png')}}"></a></center>
			<p>Cleaning</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i2.png')}}"></a></center>
			 <p>Mechanic</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i3.png')}}"></a></center>
			<p>Carpenter</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i4.png')}}"></a></center>
			<p>Yoga Teacher</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i5.png')}}"></a></center>
			<p>Beautician</p>
			</div>
		</div>
	
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Swimming Trainer</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			 <p>Plumber</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Electrician</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Kitchen Chef</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Home Spa</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Orchestra Band</p>
			</div>
		</div>
	</div>
	</div>
                </div>
				<!---------------------------------third section start of tab ---------->
				
				
				<div class="tab-pane" id="sec3" role="tabpanel">
					<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Swimming Trainer</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			 <p>Plumber</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Electrician</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Kitchen Chef</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Home Spa</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Orchestra Band</p>
			</div>
		</div>
	</div>
	</div>
	
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Photographer</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			 <p>Techs Support</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Buffet Planner</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Pest Control</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Wedding Shoot</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>AC Repair</p>
			</div>
		</div>
	</div>
	</div>
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Cleaning</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			 <p>Mechanic</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Carpenter</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Yoga Teacher</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Beautician</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Dancer</p>
			</div>
		</div>
	</div>
	</div>
	
	
                </div>
				
				<!--------fourth section start of tab ---------->
				
				
				<div class="tab-pane" id="sec4" role="tabpanel">
					
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Photographer</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			 <p>Techs Support</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Buffet Planner</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Pest Control</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Wedding Shoot</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>AC Repair</p>
			</div>
		</div>
	</div>
	</div>
	
	
                </div>
				
				
				<!---------------------------------fifth section start of tab ---------->
				
				
				<div class="tab-pane" id="sec5" role="tabpanel">
					<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Cleaning</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			 <p>Mechanic</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Carpenter</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Yoga Teacher</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Beautician</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Dancer</p>
			</div>
		</div>
	</div>
	</div>
	<div class="services_row">
	
	<div class="row">
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Photographer</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			 <p>Techs Support</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#" data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Buffet Planner</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Pest Control</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
			<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>Wedding Shoot</p>
			</div>
		</div>
		<div class="col-sm-2 s1">
			<div class="service_1">
		<center><a href="#"data-toggle="modal" data-target="#searchmodal"><img src="{{asset('node_modules/img/icons/i7.png')}}"></a></center>
			<p>AC Repair</p>
			</div>
		</div>
	</div>
	</div>
	
	
                </div>
				
				<!---------------------------------six section start of tab ---------->
				
				
				<div class="tab-pane" id="sec6" role="tabpanel">
					<div class="service_add_img">
						<center><img src="img/services_tab.jpg" class="img-responsive" alt="tbs point"></center>
					</div>
				</div>
                
   </div><!--end of tab content-->
	
	
	
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
$('.typeahead ').css('width', '100%')

$('.input-group span.twitter-typeahead').css('height','50%')
//console.log($('.twitter-typeahead').)
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
  
 @endsection