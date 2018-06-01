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
                Mobile: <input type="text" value="{{$enquiry->mobile or '-'}}" class="form-control" readonly />
            </div>

            <div class="col-md-4">
                Email: <input type="test"  value="{{$enquiry->user_email or '-'}}" class="form-control" readonly/>
            </div>

          </div>
          <div class="row">
          <div class="col-md-12">
                Long Description:
                <textarea class="form-control" rows="5" cols="50" id="comment" class="form-control" readonly >{{$enquiry->long_description or '-'}}"</textarea>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>