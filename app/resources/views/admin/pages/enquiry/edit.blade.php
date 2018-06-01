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

                                <label for="email_address">Email Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" value="{{$enquiry->user_email}}" disabled>
                                    </div>
                                </div>

                                <label>Mobile</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" value="{{$enquiry->mobile}}" disabled>
                                    </div>
                                </div>

                               <label>Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                    <textarea class="form-group" rows="5" cols="112" name="full_address"  value="{{$enquiry->description}}" disabled>{{$enquiry->description}}</textarea>
                                    </div>
                                </div>

                                <label>Long Description</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="password" class="form-control" value="{{$enquiry->long_description}}" disabled>
                                    </div>
                                </div>
                                  
                                <label>Category</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="password" class="form-control" value="{{$enquiry->category->name}}" disabled>
                                    </div>
                                </div>
                                  

                                <label>Traders</label>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" id="tradername" name="tradername">
                                            <option value="">-- Select Trader --</option>
                                            @foreach ($traders as $trader)
                                                <option value="{{$trader->id}}">{{$trader->name}}</option>
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


