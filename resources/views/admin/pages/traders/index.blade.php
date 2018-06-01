@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                          Traders List
                        </h2>
                    </div>
                    @include('layouts.errors') 
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                    @endif

                    <div class="body table-responsive" style="overflow-x: unset; ">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Business Name</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(count($traders))
                                    @foreach($traders as  $key => $trader)
                                    @php $key++; @endphp
                                    <tr>
                                            <th scope="row">{{$key}}</th>
                                            <td>{{$trader->name}}</td>
                                            <td>{{$trader->trader_profile->business_name or ''}}</td>
                                            <td>{{$trader->trader_profile->location or ''}}</td>
                                            <td>
                                                @if($trader->status ==1)         
                                                    <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$trader->trader_profile->user_id}}">Active</button>
                                                @include('super_admin.pages.traders.status')
                                                @else
                                                    <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$trader->trader_profile->user_id}}">Deactive</button> 
                                                @include('super_admin.pages.traders.status')
                                                @endif
                                            </td>
                                            <td>
                                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$trader->id}}">View</button>
                                              @include('admin.pages.traders.view')
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr><td>Record No Found</td></tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


