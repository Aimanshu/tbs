@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Admin List
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                @php $key++;@endphp
                                    <tr>
                                    <th scope="row">{{$key}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->admincategory->category->name or ''}}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger">Delect</button>&nbsp;&nbsp;
                                            <button type="button" class="btn btn-default waves-effect m-r-20" >Edit</button>
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