@extends('users.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix" style="background-color: #fff;">
        @foreach ($questions as $question)
        @php $options = json_decode($question->jsondata); @endphp
        
        @if($question->isQuestioned == 0)
        <div class="body">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
           <h3>Description</h3>
              <div class="body">
                 <h4>{{$options->description}}</h4>
              </div>
                 <h3>Long Description</h3>
              <div class="body">
                <h4>{{$options->long_description}}</h4>
              </div>
            </div>
        </div>
           
        @else
            @foreach ($options as $option) 
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                <h3>{{$option->question->title or ''}}</h3>
                    <div class="body">
                       @if($option->question->answer_type ==3)
                        {{$option->answer}}
                       @else
                        @php $newoptions = json_decode($option->question->options);@endphp
                        @foreach($newoptions as $newoption)
                        <input type="{{$option->question->answer_type == 2 ?  'checkbox' : 'radio'}}"   value="{{$newoption->value}}"   style="position: unset;opacity: 4;" disabled {{ $newoption->value == $option->answer ? 'checked' : '' }}/>
                            {{$newoption->lable}}<br>
                            
                          
                        @endforeach
                       
                       @endif 

                    </div>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
        @endforeach
        </div>
    </div>
</section>
@endsection




