@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            List Advertisement
                        </h2>
                    </div>
                    
                    <div class="body">
                    @include('layouts.errors')
                       
                          <div class="body table-responsive">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Image Title</th>
                                      <th>Image Description</th>
                                      <th>Image</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                              @foreach($advertiments as $key => $advertiment)
                              @php $key++;@endphp
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>{{$advertiment->image_title}}</td>
                                        <td>{{$advertiment->description}}</td>
                                        <td><img src="http://project.mars-edge.com/urbanclap/storage/app/{{$advertiment->image}}" style="height:50;width:50px"></td>
                                        <td>    
                                            @if($advertiment->status ==1)         
                                                <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$advertiment->id}}">Active</button>
                                                @include('super_admin.pages.advertiment.status')
                                            @else
                                                <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$advertiment->id}}">Deactive</button> 
                                                @include('super_admin.pages.advertiment.status')       
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info waves-effect m-r-20" data-toggle="modal" data-target="#Modal{{$advertiment->id}}">Update</button>
                                            @include('super_admin.pages.advertiment.edit_modal')
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
    </div>
</section>
@endsection
