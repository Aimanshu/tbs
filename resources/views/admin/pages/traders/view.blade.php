<!--vise assign category-->
  <!-- The Modal -->
  <div class="modal fade" id="myModal{{$trader->id or '-'}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background: #a9332b;">
          <h4 class="modal-title" style="color: #fff;font-size: 22px;">Traders Detail</h4>
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -38px;font-size: 30px;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form role="form" method="POST" action="{{ route('admin_update_trader_details', $trader->id) }}" >
        {{ csrf_field() }}

          <div class="row">
            <div class="col-md-4">
                Name: <input type="text"  name="name" id="name" value="{{$trader->name or '-'}}" class="form-control" />
            </div>
            <div class="col-md-4">
                Email: <input type="email" name="email" id="email" value="{{$trader->email or '-'}}" class="form-control"/>
            </div>
            <div class="col-md-4">
                Mobile Number: <input type="number" name="mobile" name="mobile" value="{{$trader->mobile or '-'}}" class="form-control"/>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
                Business Name: <input type="text" name="business_name" id="business_name" value="{{$trader->trader_profile->business_name or '-'}}" class="form-control"/>
            </div>
            <div class="col-md-4">
                Business Email: <input type="email" name="business_email" id="business_email" value="{{$trader->trader_profile->business_email or '-'}}" class="form-control"/>
            </div>
            <div class="col-md-4">
                Occupations: <input type="text" name="occupation" id="occupation" value="{{$trader->trader_profile->occupation or '-'}}" class="form-control"/>
            </div>
          </div>

           <div class="row">
            <div class="col-md-4">
               Business Contact No: <input type="number" name="business_cont_no" id="business_cont_no" value="{{$trader->trader_profile->business_cont_no	or '-'}}" class="form-control"/>
            </div>
            <div class="col-md-4">
                Website: <input type="text" name="website" id="website" value="{{$trader->trader_profile->website or '-'}}" class="form-control"/>
            </div>
            <div class="col-md-4">
            <!-- <input type="text" id="map_location" onFocus="geolocate()" name="location" placeholder="Enter Your Location" value="{{old('location')}}" class="form-control"> -->
            <!-- Location:  <input type="text" id="map_location" onFocus="geolocate()" name="location" placeholder="Enter Your Location"  class="form-control">   -->
                Location: <input type="text" name="location" id="location" value="{{$trader->trader_profile->location	or '-'}}" class="form-control"/>
            </div>
          </div>
        
        <div class="row">
            <div class="col-md-12">
               Full Address:  <textarea class="form-group" rows="2" cols="5" name="full_address" id="full_address">{{$trader->trader_profile->full_address or '-'}}</textarea>
            </div>
        </div>

         <div class="row">
            <div class="col-md-6">
              <label>Type Of Business</label>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <select class="form-control show-tick" id="types_of_business" name="types_of_business">
                          <option value="1" {{$trader->trader_profile->types_of_business == "1" ? 'selected' : '-'}}>Product</option>
                          <option value="2" {{$trader->trader_profile->types_of_business == "2" ? 'selected' : '-'}}>Service</option>
                          <option value="3" {{$trader->trader_profile->types_of_business == "3" ? 'selected' : '-'}}>Both</option>
                        </select>
                    </div>
                  </div>
            </div>

            <div class="col-md-6">
            <label>Sub Category</label>
              <div class="row clearfix">
                <div class="col-sm-12">
                    @php $subcat = json_decode($trader->trader_profile->prod_or_serv_offe);@endphp
                    <select class="form-control show-tick" id="prod_or_serv_offe" name="prod_or_serv_offe[]" multiple>
                            
                            @foreach($maincategory->categories as $subcategory)
                              @if(in_array($subcategory->id, $subcat))
                                <option  value="{{ $subcategory->id }}" selected>{{ $subcategory->name }}</option>
                              @else
                                <option  value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                              @endif
                            @endforeach                                      
                    </select>
                </div>
              </div>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect" >Submit</button>
      </form>  
        </div>
      </div>
    </div>
  </div>

@section('script')
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
						console.log(position);
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