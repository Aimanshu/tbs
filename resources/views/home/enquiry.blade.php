@extends('home.layouts2.app')
@section('css')
<style>
    .show_question {
        display: block;
    }
    .hide_question {
        display: none;
    }
</style>
@endsection

@section('content')
<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout">
	<div class="tg-main-section tg-haslayout" style="padding:30 0px;">
		<div class="container">
    		<div class="tg-appointmentsetting">
				<!-- <form class="tg-formbookappointment"> -->
                <form role="form" method="POST" class="tg-formbookappointment" action="{{ url ('/answer_save', $category->id) }}" id="myform">
                    {{ csrf_field() }}
                    <fieldset class="tg-formstepone tg-current">
                    
                        <div class="tg-appointmenthead">
                                <div class="tg-appointmentheading">
                                    <h3>Best Professional Sofa Cleaning Services in New Delhi</h3>
                                </div>
                            </div>

                        <div class="row" style="display: block">
                            <div class="alert alert-secondary" role="alert" style="display:none;">
                        </div>
                    
                        @if(count($category->questions))
                            <input type="hidden" name="forquestion" value="1">
                            @foreach($category->questions as $key => $question)
                                @php $key++; $class = $key == 1 ? 'show_question' : 'hide_question';@endphp 

                                <div class="tg-progressbox  total_question {{$class}} question{{$key}} form_hide" value="{{$key}}">
                                    <div class="tg-formprogressbar">
                                        <h3>{{$question->title}}</h3>
                                    </div>

                                    <div class="tg-description">
                                        @if($question->answer_type != 3)
                                            @php $options = json_decode($question->options); @endphp
                                            @foreach((array)$options as $op_key => $option)
                                                <div class="form-check">
                                                    <label class="{{$question->answer_type == 2 ?  'forcheck' : 'forradio'}}" for="exampleRadios{{$question->id}}{{$option->value}}">
                                                        {{$option->lable}}  

                                                        <input class="radiobut{{$key}}" name="exampleRadios[{{$question->id}}]" type="{{$question->answer_type == 2 ?  'checkbox' : 'radio'}}" name="exampleRadios[{{$question->id}}]" 
                                                        id="exampleRadios{{$question->id}}{{$option->value}}" value="{{$option->value}}" >
                                                        <span class="checkmark"></span>

                                                    </label>
                                                </div>
                                            @endforeach
                                            @else
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <!-- <label>Your Answer</label> -->
                                                    <div class="form-group">
                                                        <input type="text" name="exampleRadios[{{$question->id}}]" class="form-control radiobut{{$key}}" id="exampleRadios{{$question->id}}" placeholder="Enter">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else 
                            <input type="hidden" name="forquestion" value="0">
                            <center>
                                @include('layouts.errors')
                                @if(Session::has('flash_message')) 
                                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span>
                                    <em>{!! session('flash_message') !!}</em></div>
                                @endif
                            
                                <div class="form-group">
                                    <label for="sort" style="float: left;">Sort Description:</label>
                                    <input type="text" name="description" id="description" class="form-control show_question" placeholder="Enter Sort Description" style="color: #000;"/>
                                </div>
            
                                <div class="form-group">
                                    <label for="long" style="float: left;">Long Description:</label>
                                    <input tpye="text" name="long_description"   class="form-control" placeholder="Enter Long Description" style="color: #000;"/>
                                </div>
                            </center>
                        @endif
                            <!--Here is SHow nd hide Button Code-->
                        @if(count($category->questions))
                            @if(count($category->questions) == 1)
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="col-md-6">
                                    <div class="tg-btnarea">
                                        <a class="tg-btn" type="button" id="submitbtn" for="1" name="submit">Submit</a>
                                    </div>
                                </div>
                            </div>
                                <!-- <button class="btn btn-primary" type="button" id="submitbtn" for="1" name="submit">Submit1</button> -->
                            @else
                                <button class="btn btn-primary" type="button" id="nextbutton">Next</button>
    
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                                    <div class="col-md-6">
                                        <div class="tg-btnarea">
                                            <a class="tg-btn" type="button" id="submitbtn" for="1" name="submit" style="display:none">Submit</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button class="btn btn-primary" type="button" id="submitbtn" for="1" name="submit" style="display:none">Submit2</button> -->
                            @endif
                            
                        @else
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="col-md-6">
									<div class="tg-btnarea">
										<a class="tg-btn" type="button" id="submitbtn" for="0" name="submit">Submit</a>
									</div>
 								</div>
                            </div>
                                <!-- <button class="btn btn-primary" type="button" for="0" id="submitbtn" name="submit">Submit3</button> -->

                        @endif
                      </div>
     				</fieldset>
     			</form>
			</div>
		</div>
	</div>
 </main>

 <div class="modal fade" id="overlay2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Sucussfully Saved...!! </center> </h4>
      </div>
    </div>
  </div>
</div>
@include('home.loginform')
@endsection

@section('script')
<script>
setTimeout(function() {
    $('#overlay').modal('hide');
}, 5000);

</script>

<script>
var url  = "{{url('/checkloginfn')}}"
       // $('#loginsubmitbtn').click(function(){
        $(document).on('click', '#loginsubmitbtn', function(event){
            event.preventDefault();
        var datas = $( "form#loginform" ).serialize();
         $.ajax({
            type: 'POST',
            url: url,
            data: datas,
            dataType: "text",
            beforeSend: function() {
                $(".loader").show();
            },
            success: function(response) { 
                console.log(response);
                $("#submitbtn").attr("type", "submit");
                $("#myform").submit();

                // setTimeout(function() 
                // {
				//   location.reload();
                // },2500);
               },
               complete: function() {
                $(".loader").hide();
              },
            });
        })
 
      function login() {
          $('#displayblock').show().css("opacity", "100");
      }
      var checkaUTH = {{ Auth::check() }}
      
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
                        $("#submitbtn").attr("type", "submit");
                        $("#myform").submit();
                        $('#overlay').modal('show')
                    }else{
                        login()
                    }
                }else {
                    $('.alert').html('Please Enter Answer').show()
                }
            }else{
                if(checkaUTH == 1) {
                    $("#submitbtn").attr("type", "submit");
                    $("#myform").submit();
                    $('#overlay').modal('show')
                }else{
                    login()
                }
            }
        });  

     //here is Next Button   
    //$( "#nextbutton" ).click(function() {
     $(document).on('click', '#nextbutton', function(){
        //console.log("check2",checkaUTH);
       var check_value
       var questions = $('.total_question')
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

@endsection
