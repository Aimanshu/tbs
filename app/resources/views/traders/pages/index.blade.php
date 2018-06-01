@extends('traders.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            My Information
                        </h2>
                    </div>
                     @include('layouts.errors')

                     @if(Session::has('flash_message'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em>
                      {!! session('flash_message') !!}</em></div> @endif
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($traders as $key => $trader)
                                    <tr>
                                        <td>{{$trader->name}}</td>
                                        <td>{{$trader->email}}</td>
                                        <td>{{$trader->mobile}}</td>
                                        <td>
                                        <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$trader->id}}">Edit</button>
                                         @include('traders.pages.edit')
                                        
                                        <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#myModal{{$trader->id}}">View</button> 
                                        @include('traders.pages.view')
                                        </td>
                                    </tr>
                              @endforeach
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection





