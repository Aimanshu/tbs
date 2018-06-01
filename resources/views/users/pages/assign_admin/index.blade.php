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
                                         <button type="button" class="btn btn-danger">Delete</button>&nbsp;&nbsp;
                                         <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal1">Edit</button>
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
