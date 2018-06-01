@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Create Admin
                        </h2>
                    </div>
                    <div class="body">
                        @include('layouts.errors') 

                        @if(Session::has('flash_message'))
                         <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif

                        <form role="form" method="POST" action="{{ url('/addrole') }}">
                         {!! csrf_field() !!}
                        	<label for="Username">Name</label>
                        	<div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter your Name">
                                </div>
                            </div>
                            <label for="email_address">Email Address</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="email" name="email" value="{{old('email')}}"class="form-control" placeholder="Enter your email address">
                                </div>
                            </div>
                             <label for="mobile">Mobile Number</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" id="number" name="number"  value="{{old('number')}}"  class="form-control" placeholder="Enter your Mobile Number">
                                </div>
                            </div>
                            <label for="password">Password</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" id="password" name="password"  value="{{old('password')}}"  class="form-control" placeholder="Enter your password">
                                </div>
                            </div>

                            <!-- <label for="password">He Is:-</label> -->
                           
                          <!--  <div class="body">
                            <div class="row clearfix">
                             <div class="col-sm-6">
                           
                               	<select>
                                        <option value="">-- Please select --</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select></div>
                                
                                
                            </div>
                        </div> -->
                                    <!--<div class="form-group">
                                    <input type="radio" name="role" value="2" id="male" class="with-gap">
                                    <label for="male">Admin</label>

                                    <input type="radio" name="role" id="female" value="3" class="with-gap">
                                    <label for="female" class="m-l-20">Trades</label>

                                    <input type="radio" name="role" id="female" value="4" class="with-gap">
                                    <label for="female" class="m-l-20">Users</label>
                                </div>-->

                            <input type="checkbox" id="remember_me" class="filled-in">
                            <label for="remember_me">Remember Me</label>
                            <br>
                            <input type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection