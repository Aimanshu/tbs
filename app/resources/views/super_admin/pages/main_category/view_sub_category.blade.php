<div class="modal fade" id="defaultModal{{ $category->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">{{ $category->name }}</h4>
            </div>
            <div class="modal-body">
                <div class="menu" style="height: auto;">

                    <ul>
                        @foreach($category->categories as $subcategory)
                        <li>
                           {{$subcategory->name}}
                        </li>
                        @endforeach
                    </ul>
                </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
