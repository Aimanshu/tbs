@extends('super_admin.layouts.app')

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
                            Category List
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>User Email</th>
                                    <th>Status</th>
                                    <th>Assign</th>
                                    <th>View Question</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($enquirys as $key => $category)
                            @php $key++;@endphp
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$category->category->name}}</td>
                                    <td>{{$category->user->email or ''}}</td>
                                    <td>
                                        @if($category->status ==1)         
                                          <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$category->id}}">Active</button>
                                        @else
                                          <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$category->id}}">Deactive</button> 
                                        @endif
                                    </td>
                                    <td>
                                        @if($category->assigned ==1)         
                                          <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Yes</button>
                                        @else
                                       <button type="button" class="btn btn-warning waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">No</button>
                                        @endif
                                    </td>
                                    <td>
                                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$category->id}}">Show Question</button>
                                         @include('super_admin.pages.enquiry.view') 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$enquirys->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection