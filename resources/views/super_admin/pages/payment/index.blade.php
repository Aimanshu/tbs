@extends('super_admin.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Payment List</h2>
                    </div>
                    
                    <div class="body">
                    @include('layouts.errors')
                       
                          <div class="body table-responsive">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Payment Id</th>
                                      <th>Traders Name</th>
                                      <th>Traders Email</th>
                                      <th>Registration Fee</th>
                                      <th>Payment Date</th>
                                  </tr>
                              </thead>
                              <tbody>
                              @foreach($payments as $key => $payment)
                              @php $key++;@endphp
                                    <tr>
                                        <th scope="row">{{$key}}</th>
                                        <td>{{$payment->payment_id or '-'}}</td>
                                        <td>{{$payment->payment->name or '-'}}</td>
                                        <td>{{$payment->payment->email or '-'}}</td>
                                        <td>{{$payment->price or '-'}}</td>
                                        <td>{{$payment->created_at or '-'}}</td>
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
