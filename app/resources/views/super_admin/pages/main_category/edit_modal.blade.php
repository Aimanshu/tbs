<div class="modal fade" id="Modal{{$categories->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit {{$categories->name}}</h4>
            </div>
            <div class="modal-body">
            
                
                <form role="form" method="POST" action="{{ route('update_cate', $categories->id) }}" enctype="multipart/form-data">
                {!! method_field('patch') !!}
                  {!! csrf_field() !!}
                        
                    <label for="name">Category Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="category_name" name="category_name" class="form-control" value="{{$categories->name}}">
                        </div>
                    </div>
                    
                     <label for="name">Description</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea  id="description" name="description" class="form-control">{{$categories->description}}</textarea>
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
