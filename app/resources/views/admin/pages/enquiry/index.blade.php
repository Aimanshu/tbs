@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Enquiry List
                        </h2>
                    </div>
                    <div class="body table-responsive">
                    <form role="form" method="POST" action="">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Assigned</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($enquirys as $key => $enquiry)
                            @php $key++;@endphp
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>{{$enquiry->description}}</td>
                                        <td>{{$enquiry->mobile}}</td>
                                        <td>
                                            @if($enquiry->status ==1)  

                                                 <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$enquiry->id}}">Active</button>
                                                 @include('admin.pages.enquiry.status')
                                            @else
                                                <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$enquiry->id}}">Deactive</button> 
                                                 @include('admin.pages.enquiry.status')       
                                            @endif       
                                        </td>
                                        <td>
                                            @if($enquiry->assigned ==1)         
                                                <button type="button" class="btn btn-info">Yes</button>
                                            @else
                                            <a href="{{url('AdminEnquiryAssign',$enquiry->id)}}"><button type="button" class="btn btn-info">No</button></a>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$enquiry->id}}">View</button>
                                            @include('admin.pages.enquiry.view')
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





