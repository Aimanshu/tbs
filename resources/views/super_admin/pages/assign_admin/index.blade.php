@extends('super_admin.layouts.app')

@section('content')
<!--vise assign category-->
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                @if(Session::has('flash_message')) <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div> @endif
                    <div class="header">
                        <h2>
                          Assigned Category List
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category </th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categoryadmins as $key => $categoryadmin)
                             @php $key++;@endphp
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>{{$categoryadmin->admin->name}}</td>
                                        <td>{{$categoryadmin->category->name}}</td>
                                        <td> 
                                        <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#Modal{{$categoryadmin->id}}">Delete</button>&nbsp;&nbsp;
                                         @include('super_admin.pages.assign_admin.delete')
                                         <!-- <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure'); ">Delete</button>&nbsp;&nbsp; -->
                                         <button type="button" class="btn btn-info waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$categoryadmin->admin->id}}">Edit</button>
                                            @include('super_admin.pages.assign_admin.edit')
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
<!--end assign category-->
@endsection
