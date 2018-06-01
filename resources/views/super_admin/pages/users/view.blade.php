<!--vise assign category-->
  <!-- The Modal -->
  <div class="modal fade" id="myModal{{$user->id or '-'}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background: #a9332b;">
          <h4 class="modal-title" style="color: #fff;font-size: 22px;">Users Detail</h4>
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -38px;font-size: 30px;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form role="form" method="POST" action="{{ route('update_user_details', $user->id) }}" >
        {{ csrf_field() }}

          <div class="row">
            <div class="col-md-4">
                Name: <input type="text"  name="name" id="name" value="{{$user->name or '-'}}" class="form-control" />
            </div>
            <div class="col-md-4">
                Email: <input type="email" name="email" id="email" value="{{$user->email or '-'}}" class="form-control"/>
            </div>
            <div class="col-md-4">
                Mobile Number: <input type="number" name="mobile" name="mobile" value="{{$user->mobile or '-'}}" class="form-control"/>
            </div>
          </div>

         <div class="row">
            <div class="col-md-6">
            Occupation: <input type="text"  name="occupation" id="occupation" value="{{$user->users_profile->occupation or '-'}}" class="form-control" />
            </div>

            <div class="col-md-6">
                Address: <input type="text" name="location" name="location" value="{{$user->users_profile->location or '-'}}" class="form-control"/>
            </div>
          </div>

       
        <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect" >Submit</button>
      </form>  
        </div>
      </div>
    </div>
  </div>