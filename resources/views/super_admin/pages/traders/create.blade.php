@extends('super_admin.layouts.app')
<!-- assin Traders to admin-->

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                <div class="header">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{url('/list/traders')}}"><button type="button" class="btn btn-info waves-effect m-r-20">Traders List</button></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <!-- <a href="{{url('/list_assign')}}"><button type="button" class="btn btn-primary waves-effect m-r-20">Assign List</button></a>-->
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
                        <form action="{{ url('/traders_registation') }}" method="POST" id="tradersform">
                         {!! csrf_field() !!}
                        	<label>Name</label>
                        	<div class="form-group">
                                <div class="form-line">
                                <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control" placeholder="Enter Full Name">
                                 <!-- <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Enter Your Name"> -->
                                </div>
                            </div>

                            <label>Email Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="email"  name="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email">
                                    <!-- <input type="text" id="email" name="email" value="{{old('email')}}"class="form-control" placeholder="Enter your email address"> -->
                                </div>
                            </div>

                            <label>Mobile Number</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text" id="mobile" name="mobile" value="{{old('mobile')}}" class="form-control" placeholder="Enter Mobile Number">
                                    <!-- <input type="number" id="number" name="number"  value="{{old('number')}}"  class="form-control" placeholder="Enter your Mobile Number"> -->
                                </div>
                            </div>

                            <label>Do You have Business</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" id="isbuessiness" name="chkPassPort">
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
                                    <!-- <input type="text" class="form-control" id="business_name" name="business_name" value="{{old('business_name')}}" placeholder="Enter Your Business Name"> -->
                                </div>
                            </div>
                          </div>

                        <div id="business_email">
                           <label>Business Email</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text"  name="business_email" value="{{old('business_email')}}" class="form-control" placeholder="Enter Email">
                                   <!-- <input type="Email" class="form-control" id="business_email" name="business_email" value="{{old('business_email')}}" placeholder="Enter Your Business Email"> -->
                                </div>
                            </div>
                        </div> 

                        <div id="business_cont_no">
                            <label>Business Contact No</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text"  name="business_cont_no" value="{{old('business_count_no')}}" class="form-control" placeholder="Enter Business Number">
	                                 <!-- <input type="Number" class="form-control" id="business_cont_no" name="business_cont_no" value="{{old('business_count_no')}}" placeholder="Enter Your Business Contact Number"> -->
                                </div>
                            </div>     
                        </div> 

                        <div id="website">
                            <label>Website</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text"  name="website" value="{{old('website')}}" class="form-control" placeholder="Enter Website">                      
                                   <!-- <input type="text" class="form-control" id="website" name="website" value="{{old('website')}}" placeholder="Enter Your Website"> -->
                                </div>
                            </div> 
                           </div> 
   
                            <label>Location</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text" id="map_location" onFocus="geolocate()" name="location" placeholder="Enter Your Location" value="{{old('location')}}" class="form-control">
                                <!-- <input type="text" class="form-control" id="map_location" onFocus="geolocate()" name="location" placeholder="Enter Your Location" value="{{old('location')}}" > -->
                                </div>
                            </div> 

                        <div id="full_address">  
                            <label>Full Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                <input type="text" name="full_address"  value="{{old('full_address')}}" class="form-control" placeholder="Enter Address">
                                   <!-- <textarea class="form-group" rows="5" cols="112" name="full_address" id="full_address" value="{{old('full_address')}}"></textarea> -->
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
                                    @foreach($main_categories as $main_categorie)
                                     <option value="{{ $main_categorie->id }}">{{ $main_categorie->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                             </div>
                        </div>
      
                        <div id="categories">    
                             <label>Product Or Service Offered</label>
                             <div class="row clearfix">
                                <div class="col-sm-12" id="multiform">
                                   
                                </div>
                             </div>
                        </div>
                       
                            <label>Occupations</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="occupations" name="occupations" value="{{old('occupations')}}" placeholder="Enter Your Occupations">
                                </div>
                             </div>
                                
                           
                            <br>
                            <input type="button" name="submit" value="Submit" id="submitbtn" class="btn btn-primary m-t-15 waves-effect">
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
            console.log(response);
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
            $("#submitbtn").attr("type", "submit");
            console.log(response);
            if(response == "success")
            {
                alert("Please Check Your Mail For Password");  
                location.reload();
            }else
            {
                console.log(response);
                alert("Error");
            }
        },
        error: function (textStatus, errorThrown) {
        alert("Error In to Validate");
        },
        complete: function() {
        $(".loader").hide();
        },
    });
})
</script>

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
