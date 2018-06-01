@extends('home.layouts.loadder')

@extends('home.layouts.app')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" />

<style>
  .twitter-typeahead > input {
    width: 400px;
    height: 30px;
  }

  .show_question {
      display: block;
  }
  .hide_question {
      display: none;
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
                <div ng-show="!cateoriesmodel.length"><center>No Category Found</center></div>
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
            <div ng-show="!subcateoriesmodel.length"><center>No SubCategory Found</center></div>
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
    </div>
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
        $(".loader").show();
          $scope.cateoriesmodel = response.data[0];
          $scope.subcateoriesmodel = response.data[0][0].categories;
          $scope.cateoriesmodel= $scope.ImageUrlmapping2($scope.cateoriesmodel)
          $scope.subcateoriesmodel = $scope.ImageUrlmapping($scope.subcateoriesmodel)
          //console.log($scope.cateoriesmodel);  
          $(".loader").hide();
      });

      $scope.mainCategory =function(index, $event){
        $(".loader").show();
        $event.preventDefault();
        $scope.subcateoriesmodel = $scope.cateoriesmodel[index].categories;
        $scope.subcateoriesmodel = $scope.ImageUrlmapping($scope.subcateoriesmodel);
        //console.log($scope.subcateoriesmodel);
        $(".loader").hide();
      }

  });

</script>

<script>
  var questiondata =[]
  var action
   var urlaction
  $(document).on('change', '.typeahead', function(){
    
    onselect_val = $(this).val()
    var categorydata = category_data.filter(function (el) {
        return (el.name === onselect_val);
    })
    
      //console.log(categorydata[0])
      if(categorydata.length > 0){
        var urbase = "{{ url('/') }}"+"/get/question/category/"+categorydata[0].id;
        urlaction = "{{ url('/answer_save') }}/" + categorydata[0].id;
        $.get(urbase, function(data){
            // $("#result").html(data);
            // Here is Check Question or not
            if(data.questions.length == 0){
              alert("No Question"); 
            }else{
              questiondata = data.questions; 
              $("#nextbutton").hide(); // By Defalut Hide Next Button
              $("#submitbtn").hide();   // By Defalut Hide Submit Button
              //Here is Show Submit Button
              if(questiondata.length ==1){
                $("#submitbtn").show();  
              }else{
                $("#nextbutton").show();  
              }
              //angular.element(document.getElementById('modelid')).scope().myfunction(questiondata);
              angular.element(document.getElementById('modelid'));
              
              console.log(questiondata);
              GetQuestionOneByOne(questiondata)
              $("form#PopUpSubmit").attr("action",urlaction); 
              $("#conformbox").show().css('opacity','100') 
            }
        });
      }
      
  })




  //Geting All Category
  var categoriesss = []
  $.get(url, function( data ) {
      category_data = data[1]
      $.each( data[1], function( key, value ) {
        categoriesss.push(value.name)
    });
  });

  function GetQuestionOneByOne(questions){
      $('#insertdata').empty()
      var questionsData="";
      var responsebutton="";
      var quesnumb=0;
      var questionpaper_body = "";
      $.each(questions, function(key, item) {

          quesnumb++;
          var clsques="hide_question";
          if(quesnumb==1){
            clsques='show_question';
          }
          var Optiondt="";
          var options
          if(item.answer_type == 1) {
              options =  JSON.parse(item.options);
              $.each(options, function(keyOpt, option) { 
                Optiondt += '<input class="form-check-input radiobut'+quesnumb+'" name="exampleRadios['+item.id+']" type="radio" id="exampleRadios'+item.id+option.value+'" value="'+option.value+'"><label class="form-check-label" for="exampleRadios'+item.id+'"'+option.value+'">'+option.lable+'</label><br>'
              })
          }else if(item.answer_type == 2){
              options = JSON.parse(item.options);
              $.each(options, function(keyOpt, option) { 
                Optiondt += '<input class="form-check-input radiobut'+quesnumb+'" name="exampleRadios['+item.id+']" type="checkbox" id="exampleRadios'+item.id+option.value+'" value="'+option.value+'"><label class="form-check-label" for="exampleRadios'+item.id+'"'+option.value+'">'+option.lable+'</label><br>'
              })
          }else{
              Optiondt += '<label>Your Answer</label><p style="padding-top:10px;"><input class="form-check-input radiobut'+quesnumb+'" type="text" name="exampleRadios['+item.id+']" id="exampleRadios'+item.id+'"></p>'
          }

          questionpaper_body += '<div class="col-md-12 total_question '+clsques+' question'+quesnumb+' form_hide" value="'+quesnumb+'"><div class="card form-control"><div class="card-body"><h5 class="card-title">'+item.title+'</h5><div class="form-check">'+Optiondt+'</div></div></div></div>'
      })
      $('#insertdata').append(questionpaper_body);
  }

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
   
      var datas = $( "form#loginform" ).serialize();
      $.ajax({
        type: 'POST',
        url: url2,
        data: datas,
        dataType: "text",
        success: function(response) { 
            $("#submitbtn").attr("type", "submit");
            console.log('success');
            $(".loader").show();
            submitform()
        }
      });
    })

    var url3  = "{{url('/checkloginfn2')}}"
    $(document).on('click', '#loginsubmitbtn2', function(event){
      var datas = $( "form#loginform2" ).serialize();
      $.ajax({
        type: 'POST',
        url: url3,
        data: datas,
        dataType: "text",
        beforeSend: function() {
          $(".loader").show();
      },
        success: function(response) { 
            $("#submitbtn").attr("type", "submit");
          //  console.log(response);
             var chgurl = "{{ url('/') }}"+"/dashboard";
             window.location.replace(chgurl);
        },
        error: function (textStatus, errorThrown) {
          $("#errormsg").show();   
        },
        complete: function() {
          $(".loader").hide();
    },
      });
    })
  function submitform() {
      var en_datas = $( "form#PopUpSubmit" ).serialize();
      var newurl = $( "form#PopUpSubmit" ).attr('action');
      $.ajax({
        type: 'POST',
        url: newurl,
        data: en_datas,
        dataType: "text",
        success: function(response) { 
          $(".loader").hide();
          location.reload()
        }
      });
  }

//This Login Form Open 
function login()
{
  $("#conformbox").hide()
  $('#displayblock').show().css("opacity", "100");
}

//This is Form Id after Submit


/// form submiting and showhide

// $( "#submitbtn" ).click(function() {
        $(document).on('click', '#submitbtn', function(e){
        // e.preventDefault();
            var forquest = $(this).attr('for')
            if (forquest == 1) {
                var check_value
                var current_q = $('.show_question').attr('value')
                var type = $(".radiobut"+current_q).attr('type')
                if(type == 'text') {
                    check_value = $(".radiobut"+current_q).val()
                }else {
                    check_value = $(".radiobut"+current_q+":checked").val()
                }
                if (check_value && forquest == 1) {
                    if(checkaUTH == 1) {
                        submitform()
                    }else{
                        login()
                    }
                }else {
                    $('.alert').html('Please Enter Answer').show()
                }
            }else{
                if(checkaUTH == 1) {
                    submitform()
                }else{
                    login()
                }
            }
            
        });  


    //$( "#nextbutton" ).click(function() {
     $(document).on('click', '#nextbutton', function(){
       var check_value
       var totol_question = $('.total_question').length
       var current_q = $('.show_question').attr('value')
        var type = $(".radiobut"+current_q).attr('type')
        if(type == 'text') {
            check_value = $(".radiobut"+current_q).val()
        }else {
            check_value = $(".radiobut"+current_q+":checked").val()
        }

        if (check_value) {
            var next_q = parseInt(current_q) + 1    
            if (next_q  <= totol_question) {
                $('.show_question').removeClass('show_question').addClass('hide_question')
                $('.question'+next_q).removeClass('hide_question').addClass('show_question')
            }
            if(next_q == totol_question)
            {
                $('#nextbutton').hide()
                $('#submitbtn').show()
            }
        }else {
            $('.alert').html('Please select a option').show()
        }

    });

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