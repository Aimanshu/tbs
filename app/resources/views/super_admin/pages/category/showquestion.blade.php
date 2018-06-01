

@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix" style="background-color: #fff;">
            @if(count($questions->questions))
            @foreach($questions->questions as $key => $question)
            @php $key++; $class = $key == 1 ? 'show_question' : 'hide_question';@endphp 
          
            <div class="col-md-12 total_question {{$class}} question{{$key}}" value="{{$key}}">
                <div class="header">
                        <h3>
                           {{$question->title}}
                        </h3>
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
         
        @endforeach
@else
         
          <h3 style="text-align:center;">  No Question Availabel</h3>
        
        @endif
        
                    
            
        </div>
    </div>
</section>
@endsection

@section('script')
  <script>
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
  </script>

 
@endsection



