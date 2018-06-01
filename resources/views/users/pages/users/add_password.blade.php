
<!--vise assign category-->
  <!-- The Modal -->
  <div class="modal fade" id="myModalPassword{{$user->id or '-'}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background: #a9332b;">
          <h4 class="modal-title" style="color: #fff;font-size: 22px;">Add Password</h4>
          <button type="button" class="close" data-dismiss="modal" style="margin-top: -38px;font-size: 30px;">&times;</button>
        </div>
        <form role="form" method="POST" action="{{ route('add_user_password', $user->id) }}">
            {{ csrf_field() }}
        <!-- Modal body -->
        <div class="modal-body">
       
          <div class="row">
            <div class="col-sm-12">
            New Password: <input type="password" name="password" id="password" value="" class="form-control" />
            </div>
            <div class="col-sm-12">
            Conform Password: <input type="password" name="password_confirmation" id="password_confirmation" value="" class="form-control" />
            </div>
          </div>
          <br> <br>
          <button class="btn btn-primary" type="Submit" id="submit"  name="submit">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
