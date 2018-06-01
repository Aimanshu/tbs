<div class="modal fade" id="defaultModal{{$enquiry->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                 
                <form role="form" method="POST" action="{{ route('update_status_admin', $enquiry->id ) }}">
                   {!! method_field('patch') !!}
                        {!! csrf_field() !!}
                            
                            <p style="text-align: center;">Are You Sure You Want To Status Activate And Deactivate</p>
                       <center><button type="Submit" class="btn btn-primary m-t-15 waves-effect">YES</button>
                        <button type="button" class="btn btn-primary m-t-15 waves-effect" data-dismiss="modal">NO</button></center>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div> -->
        </div>
    </div>
</div>