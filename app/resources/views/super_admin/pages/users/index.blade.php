@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            user List
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
                            @foreach($users as $key => $user)
                            @php $key++;@endphp
                                    <tr>
                                   <th scope="row">{{$key}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>
                                           @if($user->status ==1)         
                                                <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$user->id}}">Active</button>
                                                 @include('super_admin.pages.users.status')
                                            @else
                                                <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$user->id}}">Deactive</button> 
                                                 @include('super_admin.pages.users.status')       
                                            @endif
                                             
                                            
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





