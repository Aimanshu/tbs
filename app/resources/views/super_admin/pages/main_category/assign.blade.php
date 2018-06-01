@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Assigned Category
                        </h2>
                    </div>
                    <div class="body">
                     @include('layouts.errors')
                        
                        @if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif

                        <form role="form" method="POST" action="{{ url('/assign_category_to_sub_category') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}

                                
                            <div class="row clearfix">
                                <div class="col-sm-5">
                                    <select class="form-control show-tick" id="main_category" name="main_category">
                                    <option value="">--Select Main Category--</option>
                                     @foreach($main_categories as $cate)
                                     <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-5">
                                    <select class="form-control" id="category" name="category">
                                    <option value="">--Select Sub Category--</option>
                                      @foreach($categories as $cat)
                                     <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                     @endforeach
                                    </select>
                                </div>
    
                       
                                <div class="col-sm-2">
                                <button type="Submit" class="btn btn-primary m-t-15 waves-effect"     style="margin-top:1px;">SUBMIT</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
