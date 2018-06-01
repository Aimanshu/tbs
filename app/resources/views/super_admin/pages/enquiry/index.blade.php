@extends('super_admin.layouts.app')

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
                                                <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$enquiry->id}}">Active</button>
                                                 @include('super_admin.pages.enquiry.status')
                                            @else
                                                <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal{{$enquiry->id}}">Deactive</button> 
                                                 @include('super_admin.pages.enquiry.status')       
                                            @endif
                                             
                                            
                                        </td>
                                        <td>
                                            @if($enquiry->assigned ==1)         
                                                <button type="button" class="btn btn-info">Yes</button>
                                            @else
                                                <button type="button" class="btn btn-info">No</button>        
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$enquiry->id}}">View</button></td>
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



<!--vise assign category-->
<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="myModal{{$enquiry->id or '-'}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background: #a9332b;">
          <h4 class="modal-title" style="color: #fff;font-size: 22px;">Traders Detail</h4>
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -38px;font-size: 30px;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
            Description: <input type="text"  value="{{$enquiry->description or '-'}}" class="form-control" readonly/>
            </div>
            <div class="col-md-4">
                Long Description:
                <input type="email"  value="{{$enquiry->long_description or '-'}}" class="form-control" readonly/>
            </div>
            <div class="col-md-4">
                Email: <input type="test"  value="{{$enquiry->user_email or '-'}}" class="form-control" readonly/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                Mobile: <input type="text" value="{{$enquiry->mobile or '-'}}" class="form-control" readonly />
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



@endsection





