@extends('traders.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  @include('layouts.errors')
                        @if(Session::has('flash_message'))
                        <div class="alert alert-info"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                        @endif
                    <div class="header">
                       <h2>Create Proposal </h2>
                    </div>

                    <div class="body table-responsive">
                      <form role="form" method="POST" action="{{ route('save_proposal', $enqueryid) }}" enctype="multipart/form-data"/>
                        {!! csrf_field() !!}

                    <label>Create Format</label>   
                     <textarea name="content" id="editor" style="height:100px">This is some sample content.</textarea>
                    <br>

                    <label>Attachment File</label>    
                    <input type="file" name="image" id="image" class="form-control">
                        
                    <br><center>
                    <button type="submit" class="btn btn-info" name="submit" id="submit" vlaue="submit">Submit</button></center>

                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
			ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.then( editor => {
					console.log( editor );
				} )
				.catch( error => {
					console.error( error );
				} );
		</script>
@endsection
