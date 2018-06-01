@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="card">
               <div class="header">
                   &nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="{{url('/list/admin')}}"><button type="button" class="btn btn-info waves-effect m-r-20">Admin List</button></a>
                   &nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="{{url('/list_assign')}}"><button type="button" class="btn btn-primary waves-effect m-r-20">Assign List</button></a>
                </div>
            </div>
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

                        <form role="form" method="POST" id="AdminformId" action="{{ url('/addrole') }}">
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

                             <label for="password">Select Category</label>
                             <div class="form-group">
                                    <select class="form-control" id="category" name="category" onchange="CheckCategoryAdmin()">
                                    <option value="">--Select Category--</option>
                                     @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                     @endforeach
                                    </select>
                                </div>    

                            <input type="checkbox" id="remember_me" class="filled-in">
                            <label for="remember_me">Remember Me</label>
                            <br>

                            <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect" id="btnsubmit">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('super_admin.pages.admin.confirmation')
@endsection


@section('script')

<script>

function CheckCategoryAdmin()
{
    var urbase = "{{ url('/') }}"+"/admin/category/match/";
    var chk =$("#category").val();
    $.get(urbase+chk, function() {
        console.log( "This Category Is Available" );
    }).fail(function() {
        $("#btnsubmit").attr('disabled', true);
        $("#conformbox").show().css('opacity','100')
    });
}

 $(document).on('click', '#submiting', function(){
    $("#btnsubmit").attr('disabled', false);
    //document.getElementById("AdminformId").submit();
    $("#btnsubmit").trigger('click');
 })
    


//For Hide The Pop up
function ClosePopup()
{
    $("#conformbox").hide();
}


</script>

@endsection
