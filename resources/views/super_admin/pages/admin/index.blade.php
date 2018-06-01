@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Admin List</h2>
                    </div>

                    <div class="body table-responsive">

                    @include('layouts.errors') 
                    @if(Session::has('flash_message'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                    @endif
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Main Category </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $admin)
                                    @php $key++;@endphp
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>{{$admin->admincategory->maincategory->name or '-'}}</td>
                                        <td>
                                            @if($admin->status ==1)         
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#defaultModalActive{{$admin->id}}">Active</button>
                                            @include('super_admin.pages.admin.status')    
                                            @else
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#defaultModalActive{{$admin->id}}">Deactive</button>        
                                            @include('super_admin.pages.admin.status')    
                                            @endif
                                        </td>
                                        <td>    
                                            <button type="button" class="btn btn-info waves-effect m-r-20" data-toggle="modal" data-target="#Modal{{$admin->id}}">Edit</button>
                                            @include('super_admin.pages.admin.edit')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}	
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection





