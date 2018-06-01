@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{url('/list/advertiments')}}"><button type="button" class="btn btn-info waves-effect m-r-20">Advertiment List</button></a>
                    </div> 
                </div>
                <div class="card">
                    <div class="header">
                        <h2>
                        Create Advertisement
                        </h2>
                    </div>
                    <div class="body">
                    @include('layouts.errors')
                        
                      @if(Session::has('flash_message2'))
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message2') !!}</em></div>
                      @endif

                        @if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif

                   <form role="form" method="POST" action="{{ url('/add_advertiment') }}" enctype="multipart/form-data">
                     {!! csrf_field() !!}
                        
                    <label for="name">Image Title</label>
                    <div class="form-group">
                        <div class="form-line">
                    <textarea  id="titles" name="titles" class="form-control" placeholder="Enter Title" ></textarea>
                        </div>
                    </div>

                    <label for="name">Image Description</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea  id="description" name="description" class="form-control" placeholder="Enter Description" ></textarea>
                        </div>
                    </div>

                    <label for="name">Image</label>
                    <div class="form-group">
                        <input type="file" name="image" id="image" class="form-control"/>
                    </div>


                    <button type="Submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
