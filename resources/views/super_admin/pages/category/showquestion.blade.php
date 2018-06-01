@extends('super_admin.layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
       <div class="row clearfix" style="background-color: #fff;">
         <div class="header">
          <h2>Question List</h2>
            </div>

            @if(count($questions->questions))
            @foreach($questions->questions as $key => $question)
            @php $key++; $class = $key == 1 ? 'show_question' : 'hide_question';@endphp 
          
            <div class="col-md-12 total_question {{$class}} question{{$key}}" value="{{$key}}">
                


                <div class="col-md-11">
                <div class="header">
                  <h3>{{$question->title}}</h3>
                </div>

                <div class="card form-control" style="height: auto;border: none;box-shadow: none;">
                    <div class="card-body">
                        @php $options = json_decode($question->options); @endphp
                            @if($question->answer_type != 3)
                        @foreach((array)$options as $op_key => $option)

                           <div class="form-check">
                              <input class="form-check-input radiobut{{$key}}" type="{{$question->answer_type == 2 ?  'checkbox' : 'radio'}}" name="exampleRadios[{{$question->id}}]" 
                                id="exampleRadios{{$question->id}}{{$option->value}}" value="{{$option->value}}" disabled>

                                <label class="form-check-label" for="exampleRadios{{$question->id}}{{$option->value}}" style="color: #555;">
                                   {{$option->lable}}
                                </label>
                            </div>
                            @endforeach
                        @else
                        <div class="form-check">
                            <label>Your Answer</label><p style="padding-top:10px;">
                            <input class="form-check-input radiobut{{$key}}" type="text" name="exampleRadios[{{$question->id}}]" id="exampleRadios{{$question->id}}" disabled></p>
                        </div>
                        @endif
                </div>
            </div>
          </div>  

        <div class="col-md-1">
            <a href="{{route('edit_questions',$question->id)}}"><button type="button" class="btn btn-info waves-effect m-r-20">Edit</button></a>
        </div>

        </div>

        @endforeach
        @else
          <h3 style="text-align:center;">No Question Availabel</h3>
        @endif

     </div>
   </div>
</section>
@endsection


@section('script')
<!-- <script type="text/javascript"> 
    var app = angular.module('myApp',[]); 
    app.controller("admincontroller", ['$scope', '$http', function($scope, $http) { 
        $scope.showDiv=true;
        $scope.demo = function(){
            if($scope.questiontype == 1 || $scope.questiontype == 2)
            {
                $scope.showDiv=false;
            }else{
                $scope.showDiv=true;
            }
        }    
        $scope.options = [''] 
        $scope.addmore = function(){ 
           $scope.options.push('')
        } 
        $scope.deletef = function(index){ 
           var indexpo = $scope.options.indexOf(index); 
           $scope.options.splice(indexpo, 1); 
        } 
    }]);
 </script> -->

<script>
$("#updatebtn").hide();
$(".questiontypediv").hide();

$( "#nextbutton" ).click(function() {
    $('.alert').hide()
    hidden = !hidden;
    var questions = $('.total_question')
    var totol_question = $('.total_question').length
    var current_q = $('.show_question').attr('value')
    var check_value = $(".radiobut"+current_q+":checked").val()
    if (check_value) {
        var next_q = parseInt(current_q) + 1
    }else {
        $('.alert').html('Please select a option').show()
    }
});

$( "#editbtn" ).click(function() {
    $("input").prop("disabled", false);
    $(this).hide();
    alert("Now You Can Edit Questions");
    $("#updatebtn").show();
    $(".questiontypediv").show();
    $(".questiontypediv2").hide();

});

  </script>
@endsection



