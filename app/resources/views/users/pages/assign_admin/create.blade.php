@extends('super_admin.layouts.app')

@section('content')
<!--vise assign category-->
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
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
                                    <th>Name</th>
                                    <th>Category </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryadmins as $key => $categoryadmin)
                             @php $key++;@endphp
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>{{$categoryadmin->admin->name}}</td>
                                        <td>{{$categoryadmin->category->name}}</td>
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

<!--end assign category-->

<!-- assin category to admin-->

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Create Category
                        </h2>
                    </div>
                    <div class="body">
                     @include('layouts.errors')
                        
                        @if(Session::has('flash_message'))
                        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif

                        <form role="form" method="POST" action="{{ url('/add-category-to-admin') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}

                                
                            <div class="row clearfix">
                                <div class="col-sm-5">
                                    <select class="form-control show-tick" id="userid" name="userid">
                                    <option value="">--Select Admin--</option>
                                     @foreach($users as $user)
                                     <option value="{{ $user->id }}">{{ $user->name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-5">
                                    <select class="form-control" id="categoryid" name="categoryid">
                                    <option value="">--Select Category--</option>
                                     @foreach($categories as $category)
                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
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

<!-- end assign category to admin-->
