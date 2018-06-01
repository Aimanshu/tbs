<div class="modal fade" id="Modal{{$advertiment->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit</h4>
            </div>
            <div class="modal-body">
            
            <form role="form" method="POST" action="{{ route('update_advertiment', $advertiment->id) }}" enctype="multipart/form-data">
                {!! method_field('patch') !!}
                  {!! csrf_field() !!}
                        
                    <label for="name">Image Title</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="image_title" name="image_title" class="form-control" value="{{$advertiment->image_title}}">
                        </div>
                    </div>
                    
                     <label for="name">Image Description</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea  id="description" name="description" class="form-control">{{$advertiment->description}}</textarea>
                        </div>
                    </div>

                    <label for="name">Image</label>
                    <div class="form-group">
                        <input type="file" name="image" id="image" class="form-control"/>
                    </div>

                    <button type="Submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
