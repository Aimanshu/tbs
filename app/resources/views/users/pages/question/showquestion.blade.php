

@extends('users.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix" style="background-color: #fff;">
        @foreach ($questions as $question)
        @if($question->isQuestioned == 0)
        {
            @php $options = json_decode($question->jsondata); @endphp

            {{$options}}
            
        }@else{
            I !
        }
        @endif


        @endforeach

        </div>
    </div>
</section>
@endsection




