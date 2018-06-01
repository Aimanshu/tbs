<div class="modal fade" id="defaultModal{{$trader->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit&nbsp;&nbsp;{{$trader->name}}</h4>
            </div>
            <div class="modal-body">
             
               
                <form role="form" method="POST" action="{{ route('update_trader', $trader->id) }}"/>
                    
          
                  {!! csrf_field() !!}   
                        
                    <label for="name">Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="name" name="name" class="form-control" value="{{$trader->name}}">
                        </div>
                    </div>
                   
                    <label for="name">Mobile Number</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="number" name="number" class="form-control" value="{{$trader->mobile}}">
                        </div>
                    </div>

                    <button type="Submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
