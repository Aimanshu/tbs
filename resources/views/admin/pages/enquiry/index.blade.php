@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                @include('layouts.errors')
                        
                        @if(Session::has('flash_message'))
                        <div class="alert alert-info"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif
                    <div class="header">
                        <h2>
                          Enquiry List
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sub Category</th>
                                    <th>User Email</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Assign</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($enquirys as $key => $category)
                            @php $key++;@endphp
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$category->category->name}}</td>
                                    <td>{{$category->user->email}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>
                                        @if($category->status ==1)         
                                          <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$category->id}}">Active</button>
                                          @include('admin.pages.enquiry.status')
                                        @else
                                          <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$category->id}}">Deactive</button> 
                                          @include('admin.pages.enquiry.status')  
                                        @endif
                                    </td>
                                    <td>
                                        @if($category->assigned ==1) 
                                            <a href="{{url('/admin/proposal/list',$category->id)}}"><button type="button" class="btn btn-primary" data-toggle="modal">Proposal View</button></a>
                                        @else
                                            <a href="{{url('AdminEnquiryAssign',$category->id)}}"><button type="button" class="btn btn-warning waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">View</button></a> 
                                        @endif
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