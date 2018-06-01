@extends('users.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               <div class="header">
                   &nbsp;&nbsp;&nbsp;&nbsp;
                  @if($user->password != Null)
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$user->id}}">Change Password</button>
                    @include('users.pages.users.update_password')
                  @else
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalPassword{{$user->id}}">Add Password</button>
                   @include('users.pages.users.add_password')
                  @endif 
                </div>
            </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            User List
                        </h2>
                    </div>
                     @include('layouts.errors')

                     @if(Session::has('flash_message'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em>
                      {!! session('flash_message') !!}</em></div> @endif

                    @if(Session::has('flash_message2'))
                    <div class="alert alert-danger"><span class="glyphicon glyphicon-ok"></span><em>
                      {!! session('flash_message2') !!}</em></div> @endif

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
                                    <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>
                                            <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$user->id}}">Edit</button>
                                            @include('users.pages.users.edit')
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





