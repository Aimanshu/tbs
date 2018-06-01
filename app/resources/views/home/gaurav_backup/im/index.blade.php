@extends('home.layouts.app')
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" />
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
 <div class="app-body" style="margin-top:0px;overflow-x:inherit;" ng-app="myApp" id="modelid" ng-controller="myCtrl">

      <!-- Main content -->
      <main class="main" >
        <div class="my_car" >
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
                  <input type="text" id="map_location" name="addresss" class="form-control" placeholder="Enter Location" style="border-radius:4px;height:54px;border:1px solid #fff;">
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
              <div class="container" >
                <ul class="nav nav-tabs my_tab" role="tablist">
                  <li class="nav-item" ng-repeat="category in cateoriesmodel">
                    <a class="nav-link" data-toggle="tab" href="#sec1" role="tab" aria-controls="home">
                    @verbatim
                      <center ng-click="mainCategory($index, $event)"><img  ng-src="{{category.icon}}"></center>
                      <p style="padding:0px;margin-bottom:0px;" ng-click="mainCategory($index, $event)">{{category.name}}</p></a>
                      @endverbatim
                  </li>
                </ul>
              </div>
            </div>  
          </div>

      <div class="container">
        <div class="tab-content" style="border:none;">
          <div class="tab-pane active" id="sec1" role="tabpanel">
          <div class="services_row">
            <div class="row">
              <div class="col-sm-3 s1" ng-repeat="subcategory in subcateoriesmodel">
                <div class="service_1">
                @verbatim
                  <center><a href="{{ subcategory.url }}" target="_blank"><img  ng-src="{{subcategory.icon}}"></center>
                    <p>{{subcategory.name}}</p></a>
                @endverbatim
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        @include('home.homequestions')
    </div>
    @include('home.modal')
    @include('home.loginform')
    @endsection

    @section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script>
  var url  = "{{route('categories')}}"
  var baseurl  = "{{url('/')}}"
  var app = angular.module('myApp', []);
  var onselect_val = []
  var category_data= []
  var checkaUTH = {{ Auth::check() }}
  app.controller('myCtrl', function($scope, $http) {

  $scope.ImageUrlmapping = function(categories)
  {
    categories = categories.map(value => {
      if(value.image) {
        value['icon'] = baseurl+ '/storage/app/'+ value.image
      }else{
        value['icon'] = baseurl+ '/node_modules/img/icons/i1.png'
      }
      value['url'] = baseurl+'/enquriry_form/'+ value.slug
      return value;
    })
   return categories;
 }

//This IS Fr Main Menu Image 
 $scope.ImageUrlmapping2 = function(cateoriesmodel)
  {
    cateoriesmodel = cateoriesmodel.map(value => {
      if(value.image) {
        value['icon'] = baseurl+ '/storage/app/'+ value.image
      }else{
        value['icon'] = baseurl+ '/node_modules/img/icons/mainmenu.png'
      }
      value['url'] = baseurl+'/enquriry_form/'+ value.slug
      return value;
    })
     return cateoriesmodel;
  }
     
   //Category and Subcategory FUnction like Image Maping
    $scope.cateoriesmodel = []
    $scope.subcateoriesmodel = []
    $scope.allquestions = []
    $scope.questionShow = true;
      $http.get(url)
      .then(function(response) {
          $scope.cateoriesmodel = response.data[0];
          $scope.subcateoriesmodel = response.data[0][0].categories;
          $scope.cateoriesmodel= $scope.ImageUrlmapping2($scope.cateoriesmodel)
          $scope.subcateoriesmodel = $scope.ImageUrlmapping($scope.subcateoriesmodel)
          //console.log($scope.cateoriesmodel);  
      });

      $scope.mainCategory =function(index, $event){
        $event.preventDefault();
        $scope.subcateoriesmodel = $scope.cateoriesmodel[index].categories;
        $scope.subcateoriesmodel = $scope.ImageUrlmapping($scope.subcateoriesmodel);
        //console.log($scope.subcateoriesmodel);
      }
     
        //For Hide and show Next ANd Submit Button  
        $scope.index =0;
        $scope.HideButtonNext=false;
        $scope.HideButtonSubmit=true;
        $scope.myfunction = function (data) {
        $scope.allquestions = data;

        if($scope.allquestions.length != 0)
        {
          //for Show and hide Button
          if($scope.allquestions.length > 1)
          {
            $scope.HideButtonNext=true;
            $scope.HideButtonSubmit=false;
          }
          
          $scope.allquestion = $scope.allquestions[$scope.index]
          $scope.copyoptions=JSON.parse($scope.allquestion.options)
          $("#conformbox").show().css('opacity','100')  //Open Question Pop up
          $scope.$apply();
        }
    };

    // On Pop up Show Next Question
    $scope.getNext=function(index)
    {
      $scope.index = $scope.index + 1;
      $scope.allquestion = $scope.allquestions[$scope.index]
      $scope.temp = $scope.index+1

      if($scope.allquestions.length == $scope.temp)
      {
        $scope.HideButtonNext=false;
        $scope.HideButtonSubmit=true;
      }
    }
  });

</script>

<script>
  var questiondata =[]
  var action
  $(document).on('change', '.typeahead', function(){
    
    onselect_val = $(this).val()
    var categorydata = category_data.filter(function (el) {
        return (el.name === onselect_val);
    })
    
      console.log(categorydata[0])
      if(categorydata.length > 0){
        var urbase = "{{ url('/') }}"+"/get/question/category/"+categorydata[0].id;
        var urlaction = "{{ url('/answer_save') }}/" + categorydata[0].id;
        $.get(urbase, function(data){
            $("#result").html(data);
            if(!data){
              alert("No Question"); 
            }else
            {
              questiondata=data.questions; 
              angular.element(document.getElementById('modelid')).scope().myfunction(questiondata);
            // $("#conformbox").show().css('opacity','100') 
            }
        });
      }

        //For Popup Question Submit Form Here Get URl
        $(document).on('click', '#submiting', function(event){
         // dd(copyoption.value);
          if(checkaUTH == 1)
          {

            $("#submiting").attr("type", "submit");
           // $("button#submiting").trigger('click');
            $("#PopUpSubmit").attr("action",urlaction); 
            console.log( $("#PopUpSubmit").attr('action'));
            $("form#PopUpSubmit").submit();
          } else{
            login()
          } 
           
        // $("#PopUpSubmit").attr("action",urlaction); 
        // // console.log( $("#PopUpSubmit").attr('action'));
        // $("form#PopUpSubmit").submit();
      })

  })

  //Geting All Category
  var categoriesss = []
  $.get(url, function( data ) {
      category_data = data[1]
      $.each( data[1], function( key, value ) {
        categoriesss.push(value.name)
    });
  });

  //For Hide The Pop up
  function ClosePopup(){
      $("#conformbox").hide();
  }

  //Searching Category Into Text Field Automatically
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
  },{
    name: 'categoriesss',
    source: substringMatcher(categoriesss)
  });
  $('.typeahead ').css('width', '100%')
  $('.input-group span.twitter-typeahead').css('height','50%')
  //console.log($('.twitter-typeahead').)
</script>


<!--Pop Up Form Submit Here is Check Login Or Not -->
<script>
var url2  = "{{url('/checkloginfn')}}"
        $(document).on('click', '#loginsubmitbtn', function(event){
          //  event.preventDefault();
        var datas = $( "form#loginform" ).serialize();
         $.ajax({
            type: 'POST',
            url: url2,
            data: datas,
            dataType: "text",
            success: function(response) { 
                console.log("Login Successfull");
                //$("form#PopUpSubmit").submit();
                $("#submiting").attr("type", "submit");
                // $("button#submiting").trigger('click');
                $("#PopUpSubmit").attr("action",urlaction); 
                console.log( $("#PopUpSubmit").attr('action'));
                $("form#PopUpSubmit").submit();
               }
            });
        })

//This Login Form Open 
function login()
{
  $('#displayblock').show().css("opacity", "100");
}

//This is Form Id after Submit
// $( "#PopUpSubmit" ).submit(function( event ) {
//   if(checkaUTH == 1) {
//     $("#submiting").attr("type", "submit");
//     // $("button#submiting").trigger('click');
//     $("#PopUpSubmit").attr("action",urlaction); 
//     $("form#PopUpSubmit").submit();
//   }else{
//       login()
//     }
// });

</script>


 <!--main content-->
   <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      var placeSearch, autocomplete;

      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('map_location')),
            {types: ['geocode']});
        // autocomplete.addListener('place_changed', fillInAddress);
      }
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