<div class="modal fade" id="defaultModal{{$categoryadmin->admin->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit &nbsp;{{$categoryadmin->category->name}}</h4>
            </div>
            <div class="modal-body">
            
                
                <form role="form" method="POST" action="{{ route('update_admin_assign_cat', $categoryadmin->admin->id) }}">
                {!! method_field('patch') !!}
                  {!! csrf_field() !!}
                        
                  <label>Category</label>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <select class="form-control show-tick" id="category" name="category">
                                 @if (isset($categoryadmin['category']['id']))
                                        <option value="{{$categoryadmin['category']['id'] }}">{{$categoryadmin['category']['name']}}</option>
                                    @endif
                            @foreach($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
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

