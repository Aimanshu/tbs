@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                <div class="header">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ url('/admin/traders/list/get') }}"><button type="button" class="btn btn-info waves-effect m-r-20">Traders List</button></a>
                   </div> 
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            Create Traders
                        </h2>
                    </div>
                    <div class="body">
                        @include('layouts.errors') 

                        @if(Session::has('flash_message'))
                        <div class="alert alert-info"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif

                        <form action="{{ url('/admin/traders_registation') }}" method="POST">
                         {!! csrf_field() !!}
                        	<label>Name</label>
                        	<div class="form-group">
                                <div class="form-line">
                                <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control" placeholder="Enter Full Name">
                                </div>
                            </div>

                            <label>Email Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="email"  name="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>

                            <label>Mobile Number</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text" id="mobile" name="mobile" value="{{old('mobile')}}" class="form-control" placeholder="Enter Mobile Number">
                                </div>
                            </div>

                            <label>Do You have Business</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" id="isbuessiness" name="isbuessiness">
                                     <option value="1">Yes</option>
                                     <option value="0">No</option>
                                    </select>
                                </div>
                             </div>

                         <div id="business_name">
                            <label>Business Name</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text"  name="business_name" value="{{old('business_name')}}" class="form-control" placeholder="Enter Business Name">
                                </div>
                            </div>
                          </div>

                        <div id="business_email">
                           <label>Business Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text"  name="business_email" value="{{old('business_email')}}" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                        </div> 

                        <div id="business_cont_no">
                            <label>Business Contact No</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text"  name="business_cont_no" value="{{old('business_count_no')}}" class="form-control" placeholder="Enter Business Number">
                                </div>
                            </div>     
                        </div> 

                        <div id="website">
                            <label>Website</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text"  name="website" value="{{old('website')}}" class="form-control" placeholder="Enter Website">                      
                                </div>
                            </div> 
                           </div> 
   
                            <label>Location</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text" id="map_location" onFocus="geolocate()" name="location" placeholder="Enter Your Location" value="{{old('location')}}" class="form-control">
                                </div>
                            </div> 

                        <div id="full_address">  
                            <label>Full Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text" name="full_address"  value="{{old('full_address')}}" class="form-control" placeholder="Enter Address">
                                </div>
                            </div> 
                         </div>

                        <div id="serviceorproduct">                        
                            <label>Type Of Business</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" id="types_of_business" name="types_of_business">
                                     <option checked  name="types_of_business" value="1">Product</option>
                                     <option  name="types_of_business" value="2">Service</option>
                                     <option  name="types_of_business" value="3">Both</option>
                                    </select>
                                </div>
                             </div>
                       </div>

                    <div id="categories">    
                             <label>Main Category</label>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" id="main_categories_id" name="main_categories_id">
                                            <option value="{{ $maincategory->id }}">{{ $maincategory->name }}</option>
                                    </select>
                                </div>
                             </div>

                  
                            <label>Product Or Service Offered</label>
                                <div class="row clearfix">
                                    <select class="form-control show-tick" id="subcategory" name="subcategory[]" multiple>
                                            @foreach($maincategory->categories as $subcategory)
                                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                            @endforeach                                      
                                    </select>
                                </div>
                        </div>
                        
                       
                            <label>Occupations</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="occupations" name="occupations" value="{{old('occupations')}}" placeholder="Enter Your Occupations">
                                </div>
                             </div>
                                
                           
                            <br>
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary m-t-15 waves-effect">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<!-- end assign Trades to admin-->
@section('script')
<script>
$('#isbuessiness').on('change', function() {
  var value = $(this).val();
  if(value == 1) {
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
});
</script>

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
