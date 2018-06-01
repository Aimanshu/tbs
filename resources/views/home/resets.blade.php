<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #337ab7;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
    z-index: 999999;
    display: block;
    position: fixed;
    margin: 6px 0px 0px 600px;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
 <div class="row">
	<div class="col-sm-12">
		<h1>Change Password</h1>
  </div>
</div>

<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
	 <p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>
		
		<form method="post" id="passwordForm" method="POST" action="{{ url ('/reset_password_change')}}" >
		<meta name="csrf-token" content="{{ csrf_token() }}">
	
			<input type="password" class="input-lg form-control" name="password" id="password" placeholder="New Password">
			<input type="password" class="input-lg form-control" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password">
			<input type="button" name="submit" id="submitbtn" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
		</form>

	</div><!--/col-sm-6-->
	</div><!--/row-->
</div>


<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Password And Conform Password Do Not Match ...!! </center> </h4>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="overlay2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Password Successfull Change ...!!</center> </h4>
      </div>
    </div>
  </div>
</div>



<script>

setTimeout(function() {
    $('#overlay').modal('hide');
}, 5000);

setTimeout(function() {
    $('#overlay2').modal('hide');
}, 5000);

	var url2  = "{{url('/reset_password_change', $data->token)}}";
    $(document).on('click', '#submitbtn', function(event){
	  var data = {
			password: $('#password').val(),
			password_confirmation: $('#password_confirmation').val(),
			_token: "{{ csrf_token() }}"
	  }

	//  console.log(data)
    $.ajax({
        	type: 'POST',
        	url: url2,
					data: data,
					beforeSend: function() {
          $(".loader").show();
      },
        success: function(response) { 
			  if(response == "Success")
				{
					$('#overlay2').modal('show')
					setTimeout(function() {
					window.location.replace("http://project.mars-edge.com/urbanclap/logins");},2500);
				}
	     else{
				$('#overlay').modal('show')
			 }				
   		},
				error: function (textStatus, errorThrown) {
			alert("Error");
				// $('#overlay').modal('show')
      },
		 complete: function() {
          $(".loader").hide();
        },
      });
    })
</script>




<div class="loader" style="display:none"></div>

