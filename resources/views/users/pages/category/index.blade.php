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
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key => $category)
                            @php $key++;@endphp
                                <tr>
                                    <th scope="row">{{$key}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger">Delete</button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$category->id}}">Edit</button>
                                        @include('super_admin.pages.category.edit_modal')
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
@endsection