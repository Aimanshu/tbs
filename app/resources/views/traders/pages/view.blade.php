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
            Email:<input type="email"  value="{{$trader->email or '-'}}" class="form-control" readonly/>
            </div>

            <div class="col-md-4">
             Mobile: <input type="text" value="{{$trader->mobile or '-'}}" class="form-control" readonly />
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>