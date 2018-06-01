@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                   &nbsp;&nbsp;&nbsp;&nbsp;
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$admin->id}}">Change Password</button>
                    @include('admin.pages.update_password')
                   &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>

                <div class="card">
                    <div class="header">
                        <h2>Admin List</h2>
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
                                    <th>Assigned Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->mobile}}</td>
                                    <td>{{$admin->adminmaincategory->maincategory->name or '-'}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$admin->id}}">Edit</button>
                                        @include('admin.pages.edit')
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection





