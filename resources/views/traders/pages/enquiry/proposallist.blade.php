@extends('traders.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                       <h2>Proposal List</h2>
                    </div>

                     @include('layouts.errors')
                        
                    @if(Session::has('flash_message'))
                    <div class="alert alert-info"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                    @endif
                    
                   <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Proposal Description</th>
                                    <th>files</th>
                                    <th>Admin Approved</th>
                                    <th>User Accept</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($proposals as $key => $proposal)
                            @php $key++;@endphp
                                <tr>
                                    <th scope="row"><b>{{$key}}</b></th>
                                    <td>{!! $proposal->description !!}</td>
                                    <td>
                                    @if($proposal->file_type !=null) 
                                        @if($proposal->file_type ==0)
                                            <img src="http://tbs.aresedge.com/storage/app/{{$proposal->files}}" style="height:50;width:50px">
                                        @else
                                            <a href="http://tbs.aresedge.com/storage/app/{{$proposal->files}}"><button type="button" class="btn btn-success waves-effect m-r-20">Open File</button></a>  
                                        @endif
                                    @else
                                      <h3>No File Send</h3>
                                    @endif
                                    </td>
                                    <!-- <td>{{$proposal->files}}</td> -->
                                    <td>
                                        @if($proposal->issadmin_approved ==1)         
                                          <button type="button" class="btn btn-success waves-effect m-r-20">Yes</button>
                                        @else
                                        <button type="button" class="btn btn-warning waves-effect m-r-20">No</button> 
                                        @endif
                                    </td>
                                    <td>
                                    @if($proposal->issuser_accept ==1)         
                                        <button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$proposal->id}}">Yes</button>
                                        @include('traders.pages.enquiry.approve')
                                     @else
                                     <button type="button" class="btn btn-warning waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$proposal->id}}">No</button>
                                        @include('traders.pages.enquiry.approve')
                                    @endif
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
