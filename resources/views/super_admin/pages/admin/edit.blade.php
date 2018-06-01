<div class="modal fade" id="Modal{{$admin->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('update_admin_cat', $admin->id) }}">
                        {!! csrf_field() !!}
                         <div class="row">
                            <div class="col-sm-12">
                              <input type="text" id="name" name="name" value="{{$admin->name}}" class="form-control" placeholder="Enter your Name">
                            </div>
  
                            <div class="col-sm-12">
                             <input type="text" id="email" name="email" value="{{$admin->email}}"class="form-control" placeholder="Enter your email address">
                            </div>
  
                            <div class="col-sm-12">
                             <input type="number" id="mobile" name="mobile"  value="{{$admin->mobile}}"  class="form-control" placeholder="Enter your Mobile Number">
                            </div>
  
                            <label>Category</label>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <select class="form-control show-tick" name="category">
                                        @if (isset($admin['adminmaincategory']['maincategory']['id']))
                                            <option  value="{{$admin['adminmaincategory']['maincategory']['id'] }}" >{{$admin['adminmaincategory']['maincategory']['name']}}</option>
                                        @endif
                                        @foreach($MainCategorys as $MainCategory)
                                            <option value="{{$MainCategory->id}}" >{{ $MainCategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div><br>
                        <div>
                        <button type="Submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
