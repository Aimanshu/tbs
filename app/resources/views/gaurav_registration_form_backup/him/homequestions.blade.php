<div class="modal fade" id="conformbox" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                
 <div class="row" style="display: block">
  <div class="alert alert-secondary" role="alert" style="display:none;">
   </div>

  
        <form role="form" method="POST" action="" id="myform">
            {{ csrf_field() }}
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
                
        
            <!--Here is SHow nd hide Button Code-->
                @if(count($category->questions) ==1)
                    <button class="btn btn-primary" type="button" id="submitbtn" for="1" name="submit">Submit</button>
                @else
                <button class="btn btn-primary" type="button" id="nextbutton">Next</button>
                <button class="btn btn-primary" type="button" id="submitbtn" for="1" name="submit" style="display:none">Submit</button>
                @endif
        
        </form> 
                
                <center><button type="button" class="btn btn-primary m-t-15 waves-effect" id="submiting" name="submit" value="submit">YES</button>
                <button type="button" class="btn btn-primary m-t-15 waves-effect"  onClick="ClosePopup()">NO</button></center>

            </div>
        </div>
    </div>
</div>



<script>

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