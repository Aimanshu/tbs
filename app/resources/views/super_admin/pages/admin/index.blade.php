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
                    <form role="form" method="POST" action="">

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
                                @foreach($users as $key => $admin)
                                    @php $key++;@endphp
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->admincategory->category->name or '-'}}</td>
                                        <td>
                                            @if($admin->status ==1)         
                                                <button type="button" class="btn btn-danger">Active</button>
                                            @else
                                                <button type="button" class="btn btn-danger">Deactive</button>        
                                            @endif
                                            <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$admin->id}}">Edit</button>
                                            @include('super_admin.pages.admin.edit')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection





