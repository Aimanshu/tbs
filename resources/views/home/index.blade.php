@extends('home.layouts2.app')

<!--This for Select Category-->
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
  i.lnr.lnr-magnifier {
    display: none;
}

</style>
@section('content')
<body class="tg-home tg-login">
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
	

	<div class="tg-homebannerandslider" >
	 <div class="container-fluid">
	  <div class="row">

		<!-- <div class="my_car" style="background-image: url(node_modules/css/shimpy/images/bannerone.jpg); height:400px;"> -->
    <div class="my_car" style="background-image: url(http://tbs.aresedge.com/storage/app/{{$advertiments->image}}); height:400px;">
          <div class="container">
		    <div class="wrap_banner">
		    	<center><h1>{{$advertiments->image_title}}</h1>
    		    <p>{{$advertiments->description}}</p></center>
			</div>
	  	  </div> 
		</div><!---end of my car-->

		<div class="tg-mapinnerbannernew">
			<div class="tg-searchbox">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-push-1">
							<form class="tg-themeform tg-formsearch">
								<fieldset>
									<!-- <div class="form-group">
										<input type="text" name="keyword" class="form-control" placeholder="Keyword">
									</div> -->
									<div class="form-group tg-inputwithicon">
										<div class="locate-me-wrap">
                      <div id="location-pickr-map" class="elm-display-none"></div>
                      <input type="text" id="map_location" onFocus="geolocate()" name="location" placeholder="Enter Your Location" value="{{old('location')}}" class="form-control">
											<!-- <input type="text" autocomplete="on" id="map_location"  name="geo_location" placeholder="Search Address" value="{{old('location')}}" class="form-control mapvalue"> -->
										</div>
									</div>
									<div class="form-group">
										<span class="tg-select" id="the-basics">
								     		<input type="text" id="input1-group3" name="search" class="form-control typeahead" placeholder="Search for a services">
										</span>
									</div
									<button class="tg-btn" type="submit"><i class="lnr lnr-magnifier"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>

<main id="tg-main" class="tg-main tg-haslayout" ng-app="myApp" id="modelid" ng-controller="myCtrl">
	<section class="tg-main-section tg-haslayout" style="padding: 9px 0;">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
					<div class="tg-sectionhead">
						<div class="tg-sectiontitle">
							<h2>Start With Top Categories</h2>
						</div>
						<!-- <div class="tg-description">
							<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim adia minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip extea commodo consequat.</p>
						</div>	 -->
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid" >
			<div class="banner_below">
				<div class="col-md-12">
					<div class="container">
						<div class="row">
							<ul class="nav nav-tabs my_tab" role="tablist" style="border-bottom:none !important;">
							<div ng-show="!cateoriesmodel.length"><center>No Category Found</center></div>
								<div class="col-md-3" ng-repeat="category in cateoriesmodel" style="margin-bottom: 18px;">
								@verbatim	
     								<li class="nav-item">
    								<a class="nav-link onclick"  ng-click="mainCategory($index, $event)" data-toggle="tab" href="#sec1" role="tab" aria-controls="home">
										<center><div class=""><img ng-src="{{category.icon}}" style="height:100;width:100px"></div></center>
										<center><p style="padding:0px;margin-bottom:0px; color:#034362;margin-left: 0%;">{{category.name}}</p></a></center>
									</li>
								@endverbatim	
								</div>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid" >
	<div class="banner_below">
		<div class="col-md-12">
			<div class="container">
			</div>
		</div>
	</div>
</div>



<!-----tab 1 to 4 sections------>
    <!-- <div class="tab-pane onclick" id="sec1" role="tabpanel" style="background-color:#f6f6f6;">
		<button type="button" class="close" value="1" data-dismiss="modal" aria-hidden="true" style="position:absolute; right:5px; z-index:9999; color:#cc554d; opacity:1;"><i class="fa fa-times colorwhite"></i></button>
		  <div class="services_row">
     		<div class="row">
	
			 <div ng-show="!subcateoriesmodel.length > 0"><center>No SubCategory Found</center></div>
				<div class="col-sm-2 s1" ng-repeat="subcategory in subcateoriesmodel">
				<div class="service_1">
				@verbatim
					<center><a  href="{{ subcategory.url }}" data-toggle="modal" data-target="#searchmodal"><img ng-src="{{subcategory.icon}}"></a></center>
					<p>{{subcategory.name}}</p>
				@endverbatim
				</div>
		    </div>

	   </div>
   	</div>
   </div>
 </div> -->


<div class="dispaly">
  <div  style="border:none;">
    <div class="tab-pane onclick" id="sec1" role="tabpanel">
		<button type="button" class="close" value="1" data-dismiss="modal" aria-hidden="true" style="position:absolute; right:5px; z-index:9999; color:#cc554d; opacity:1;"></button>
		  <div class="services_row">
        <div class="container">
          <div class="row">
         
            <div ng-show="!subcateoriesmodel.length"><center style="font-size: 20px;font-family: cursive;">No SubCategory Found</center></div>
              <div class="col-sm-3 s1" ng-repeat="subcategory in subcateoriesmodel">
              <div>
              @verbatim
                <center><a href="{{ subcategory.url }}" target="_blank"><img ng-src="{{subcategory.icon}}" style="height:130;width:130px">
                <p style="color:#034362;">{{subcategory.name}}</p></center></a>
              @endverbatim
              </div>
            </div>
          </div>
        </div>
     </div>


   </div>
 </div>
</div>
</div>
@include('home.loginform')

<div class="modal fade" id="overlay2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Data Save Successfully...!! </center> </h4>
      </div>
    </div>
  </div>
</div>


<!-- <div class="tg-btnbox">
   <a class="tg-btn tg-btnviewall" href="#">view all</a>
</div> -->
@include('home.homequestions')
</div>
</div>
</section>
</main>

@endsection

@section('script')
<script>
	$(document).ready(function(event){
		$(".close").click(function(){
			$("#sec1").hide(1000);
		});
		// $(".onclick").on('click', function() {
		// 	console.log("hi");
		// 	$("#sec1").show();
		// })
	});

  setTimeout(function() {
    $('#overlay2').modal('hide');
}, 5000);


</script>

<!--HImanshu WOrk-->

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
      value['url'] = baseurl+ '/'+ value.slug
      // value['url'] = baseurl+'/enquriry_form/'+ value.slug
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
        // $(".loader").show();
          $scope.cateoriesmodel = response.data[0];
          $scope.subcateoriesmodel = response.data[0][0].categories;
          $scope.cateoriesmodel= $scope.ImageUrlmapping2($scope.cateoriesmodel)
          $scope.subcateoriesmodel = $scope.ImageUrlmapping($scope.subcateoriesmodel)
          // console.log($scope.subcateoriesmodel);  
          // $(".loader").hide();
      });

      $scope.mainCategory =function(index, $event){
        $(".loader").show();
        $event.preventDefault();
        $scope.subcateoriesmodel = $scope.cateoriesmodel[index].categories;
        $scope.subcateoriesmodel = $scope.ImageUrlmapping($scope.subcateoriesmodel);
      //  console.log($scope.subcateoriesmodel);
	    	$("#sec1").show()
		  // document.getElementById('sec1').css.style.display = 'block'
        $(".loader").hide();
      }

  });
</script>

<script>
  var questiondata =[]
  var action
   var urlaction
  $(document).on('change', '.typeahead', function(){
    $(".loader").show();
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
            var location_val = $("#map_location").val()
            $("#locationdata").val(location_val)
            if(data.questions.length == 0){
              // alert("No Question"); 
              $("#nextbutton").hide(); // By Defalut Hide Next Button
              $("#submitbtn").hide();   // By Defalut Hide Submit Button
              $(".loader").hide();  
              $('#insertdata').empty()
              var questionpaper_body = "";     
              questionpaper_body += '<input type="hidden" name="forquestion" value="0"><div class="form-group"><label for="sort" style="float: left;">Sort Description:</label><input type="text" name="description" id="description" class="form-control show_question" placeholder="Enter Sort Description" style="color: #000;"/></div><div class="form-group"><label for="long" style="float: left;">Long Description:</label><input tpye="text" name="long_description"   class="form-control" placeholder="Enter Long Description" style="color: #000;"/></div><button type="button" class="btn btn-primary m-t-15 waves-effect" for="0" id="submitbtn" name="submit" value="submit">Submit</button>'  

              $('#insertdata').append(questionpaper_body);

              $("form#PopUpSubmit").attr("action",urlaction); 
              $("#conformbox").show().css('opacity','100') 

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
              $(".loader").hide();
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
                Optiondt += '<div class="form-check"><label class="forradio" for="exampleRadios'+item.id+option.value+'">'+option.lable+'<input class="radiobut'+quesnumb+'" name="exampleRadios['+item.id+']" type="radio" id="exampleRadios'+item.id+option.value+'" value="'+option.value+'"><span class="checkmark"></span></label><br></div>'
              })
          }else if(item.answer_type == 2){
              options = JSON.parse(item.options);
              $.each(options, function(keyOpt, option) { 
                Optiondt += '<div class="form-check"><label class="forcheck" for="exampleRadios'+item.id+option.value+'">'+option.lable+'<input class="radiobut'+quesnumb+'" name="exampleRadios['+item.id+']" type="checkbox" id="exampleRadios'+item.id+option.value+'" value="'+option.value+'"><span class="checkmark"></span></label><br></div>'
              })
          }else{
              Optiondt += '<label>Your Answer</label><p style="padding-top:10px;"><input class="form-control radiobut'+quesnumb+'" type="text" name="exampleRadios['+item.id+']" id="exampleRadios'+item.id+'"></p>'
          }
          questionpaper_body += '<input type="hidden" name="forquestion" value="1"><div class="tg-progressbox total_question '+clsques+' question'+quesnumb+' form_hide" value="'+quesnumb+'"><div class="tg-formprogressbar"><h3>'+item.title+'</h3></div><div class="tg-description">'+Optiondt+'</div></div>'
      })
      $('#insertdata').append(questionpaper_body);
  }

  //For Hide The Pop up
  function ClosePopup(){
      $("#conformbox").hide();
  }
  function CloseLoginPopup(){
      $("#displayblock").hide();
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
        beforeSend: function() {
          $(".loader").show();
      },
        success: function(response) { 
            console.log(response);
            $("#submitbtn").attr("type", "submit");
            $(".loader").show();
            submitform()
        },
        error: function (textStatus, errorThrown) {
          $("#errormsg").show();   
        }, 
        complete: function() {
          $(".loader").hide();
    },
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
   
    var en_datas = $("#PopUpSubmit").serialize();
    // $("#locationremove").remove()
    var newurl = $("#PopUpSubmit" ).attr('action');
      console.log(en_datas);
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: newurl,
        data:  en_datas,
        dataType: "text",
        beforeSend: function() {
            $(".loader").show();
          },
        success: function(response) { 
          $(".loader").hide();
          $('#overlay2').modal('show')

          setTimeout(function() {
					location.reload() },2500
					);
        },
        complete: function() {
          $(".loader").hide();
        },
      });
  }

//This Login Form Open 
function login()
{
  $("#conformbox").hide()
  $('#displayblock').show().css("opacity", "100");
}
    //This is Form Id after Submit
    // form submiting and showhide
    // $( "#submitbtn" ).click(function() {
        $(document).on('click', '#submitbtn', function(e){
        // e.preventDefault();
            var forquest = $(this).attr('for')
            // console.log(forquest);
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
  
@endsection