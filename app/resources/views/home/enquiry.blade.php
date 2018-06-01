@extends('home.layouts.app')
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
<div class="container" style="margin-top:15%;width:50%;">

 <div class="row" style="display: block">
  <div class="alert alert-secondary" role="alert" style="display:none;">
   </div>

  
        <form role="form" method="POST" action="{{ url ('/answer_save', $category->id) }}" id="myform">
            {{ csrf_field() }}
            @if(count($category->questions))
                <input type="hidden" name="forquestion" value="1">
                @foreach($category->questions as $key => $question)
                    @php $key++; $class = $key == 1 ? 'show_question' : 'hide_question';@endphp 

                    <div class="col-md-12 total_question {{$class}} question{{$key}} form_hide" value="{{$key}}">
                        <div class="card form-control">
                            <div class="card-body">
                                <h5 class="card-title">{{$question->title}}</h5>
                                @if($question->answer_type != 3)
                                    @php $options = json_decode($question->options); @endphp
                                    @foreach((array)$options as $op_key => $option)
                                        <div class="form-check">
                                            <input class="form-check-input radiobut{{$key}}" name="exampleRadios[{{$question->id}}]" type="{{$question->answer_type == 2 ?  'checkbox' : 'radio'}}" name="exampleRadios[{{$question->id}}]" 
                                            id="exampleRadios{{$question->id}}{{$option->value}}" value="{{$option->value}}">
                                        
                                            <label class="form-check-label" for="exampleRadios{{$question->id}}{{$option->value}}">
                                            {{$option->lable}}
                                            </label>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="form-check">
                                    <label>Your Answer</label><p style="padding-top:10px;">
                                    <input class="form-check-input radiobut{{$key}}" type="text" name="exampleRadios[{{$question->id}}]" id="exampleRadios{{$question->id}}"></p>
                                    </div>
                                @endif
                            </div>
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
                
                @if(count($category->questions) ==1)
                    <button class="btn btn-primary" type="button" id="submitbtn" for="1" name="submit">Submit</button>
                @else
                <button class="btn btn-primary" type="button" id="nextbutton">Next</button>
                <button class="btn btn-primary" type="button" id="submitbtn" for="1" name="submit" style="display:none">Submit</button>
                @endif
            @else
                <button class="btn btn-primary" type="button" for="0" id="submitbtn" name="submit">Submit</button>
            @endif

        </form>
    </div>
</div>
@include('home.loginform')
@endsection

@section('script')
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
            success: function(response) { 
                console.log("Step");
                $("#submitbtn").attr("type", "submit");
                //$("form#myform").submit();
                $("button#submitbtn").trigger('click');
                $(document).on('click', '#submitbtn', function(event){
                    $("form#myform").submit();
                })
                console.log("Done");
            }
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
                }else{
                    
                    login()
                }
            }
            
        });  


    //$( "#nextbutton" ).click(function() {
     $(document).on('click', '#nextbutton', function(){
        
        console.log("check2",checkaUTH);
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
