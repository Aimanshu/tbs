@extends('super_admin.layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                          Traders List
                        </h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Business Name</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(count($traders))
    
                                    @foreach($traders as  $key => $trader)
                                    @php $key++; @endphp
                                    <tr>
                                            <th scope="row">{{$key}}</th>
                                            <td>{{$trader->name}}</td>
                                            <td>{{$trader->business_name}}</td>
                                            <td>{{$trader->status == 1 ? 'Active' : 'Deactived'}}</td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$trader->id}}">View</button></td>
                                        </tr>
                                
                                    @endforeach

                                @else
                                    <tr><td>Record No Found</td></tr>
                                @endif
                                    
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--vise assign category-->
<div class="container">

  <!-- The Modal -->
  <div class="modal fade" id="myModal{{$trader->id or '-'}}">
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
                Name: <input type="text"  value="{{$trader->name or '-'}}" class="form-control" readonly/>
            </div>
            <div class="col-md-4">
                Email: <input type="email"  value="{{$trader->name or '-'}}" class="form-control" readonly/>
            </div>
            <div class="col-md-4">
                Mobile Number: <input type="number"  value="{{$trader->mobile or '-'}}" class="form-control" readonly/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                Do You have Business: <input type="text" value="" class="form-control" readonly />
            </div>
            <div class="col-md-4">
                Are You: <input type="text"  value="" class="form-control" readonly />
            </div>
            <div class="col-md-4">
                Business Email: <input type="email" value="{{$trader->business_email or '-'}}" class="form-control" readonly/>
            </div>
          </div>

           <div class="row">
            <div class="col-md-4">
               Business Contact No: <input type="number" value="{{$trader->business_cont_no	or '-'}}" class="form-control" readonly />
            </div>
            <div class="col-md-4">
                Website: <input type="text"  value="{{$trader->website or '-'}}" class="form-control"  readonly />
            </div>
            <div class="col-md-4">
                Location: <input type="text" value="{{$trader->location	or '-'}}" class="form-control" readonly />
            </div>
          </div>
        
        <div class="row">
            <div class="col-md-4">
               Full Address:  <textarea class="form-group" rows="2" cols="5"  value="" readonly>{{$trader->full_address or '-'}}</textarea>
            </div>
            <div class="col-md-4">
               Type Of Business: <input type="text"  value="" class="form-control" readonly />
            </div>
            <div class="col-md-4">
               Product Or Service Offered: <input type="text" value="" class="form-control" readonly/>
            </div>
        </div>

        </div>
        
       
        
        
      </div>
    </div>
  </div>
  
</div>

@endsection