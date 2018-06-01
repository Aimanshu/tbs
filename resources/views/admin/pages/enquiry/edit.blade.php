@extends('admin.layouts.app')

@section('content')
<section class="content">
 <div class="container-fluid">
            <div class="block-header">
                <h2> Enquiry Assign</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif

                        @include('layouts.errors')
                        <form role="form" method="POST" action="{{ route('enquiry_to_trader',$enquiry->id)}}">
                            {!! csrf_field() !!}

                            @php $data = json_decode($enquiry->jsondata);@endphp    
                            @if($enquiry->isQuestioned ==0)
                               
                               <label>Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <textarea class="form-group" rows="5" cols="112" name="full_address"  value=" {{$data->description}}" disabled>{{$enquiry->description}}</textarea>
                                    </div>
                                </div>

                                <label>Long Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="password" class="form-control" value="{{$data->long_description}}" disabled>
                                    </div>
                                </div>
                              @else
                                @foreach ($data as $option) 
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                        <h3>{{$option->question->title}}</h3>
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

                                  
                                <label>Category</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="password" class="form-control" value="{{$enquiry->category->name}}" disabled>
                                    </div>
                                </div>
                                  

                                <label>Traders</label>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" id="traderid" name="traderid[]" multiple>
                                            <option value="">-- Select Trader --</option>
                                            @foreach ($traders as $trader)
                                                @php $subcategories = json_decode($trader->trader_profile->prod_or_serv_offe);@endphp
                                                @if(count($subcategories))
                                                    @if(in_array($enquiry->category_id, $subcategories))
                                                        <option value="{{$trader->id}}">{{$trader->name}}</option>
                                                    @endif
                                                @endif
                                            @endforeach      
                                        </select>
                                    </div>
                                </div>

                                <br>
                                <button type="Submit" name="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
        </div>
    </div>

@endsection


