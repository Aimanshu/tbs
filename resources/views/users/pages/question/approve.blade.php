<div class="modal fade" id="defaultModal{{$proposal->id}}" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-body">
                 
                <form role="form" method="GET" action="{{ route('users_approve_status', $proposal->id) }}">
                   {!! method_field('patch') !!}
                        {!! csrf_field() !!}
                            
                            <p style="text-align: center;">Are You Sure You Want To Approve Activate And Deactivate</p>
                       <center><button type="Submit" class="btn btn-primary m-t-15 waves-effect">YES</button>
                        <button type="button" class="btn btn-primary m-t-15 waves-effect" data-dismiss="modal">NO</button></center>
                </form>
            </div>
        </div>
    </div>
</div>