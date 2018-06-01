<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$popup->id}}">View</button>
<!-- Modal -->
<div class="modal fade" id="myModal{{$popup->id}}" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                {!! $popup->description !!}
            </div>
        </div>

    </div>
</div>