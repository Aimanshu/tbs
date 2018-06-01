<div class="modal fade" id="Modal{{$admin->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('update_admin_cat', $admin->id) }}">
                   
                        {!! csrf_field() !!}
                            
                        <label>Category</label>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <select class="form-control show-tick" name="category">
                                    @if (isset($admin['admincategory']['category']['id']))
                                        <option value="{{$admin['admincategory']['category']['id'] }}">{{$admin['admincategory']['category']['name']}}</option>
                                    @endif
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{ $categorie->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="Submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
