@extends('home.layouts2.app')

@section('content')

<body class="tg-login">
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<div class="tg-innerpagebanner">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-pagetitle">
							<h1>Forget Password</h1>
						</div>
						<!-- <ol class="tg-breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="tg-active">Login - Register</li>
						</ol> -->
					</div>
				</div>
			</div>
		</div>
		<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout">
			<div class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="tg-content" class="tg-content">
							<form class="tg-themeform tg-formlogin-register">
					<div class="col-md-4"></div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" style="    float: left;
									padding: 30px 30px 30px;
									border-radius: 5px;
									background: #f7f7f7;">
									<div class="tg-loginarea">
										<div class="tg-bordertitle">
											<h3>Forget Password</h3>
										</div>
										<fieldset>
										<form role="form" id="loginform" method="POST" action="{{ url ('/forget_send_link') }}">
										<meta name="csrf-token" content="{{ csrf_token() }}">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" placeholder="Email">
											</div>
											<div class="form-group">
												<button class="tg-btn tg-btn-lg" type="button" name="submit" value="submit" id="submitbtn" >Login Now</button>
											</div>
										</form>
										</fieldset>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>
		
<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>This Email Address is Invalidate.....!!</center> </h4>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="overlay2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Please Check Your mail for Password.....!!</center> </h4>
      </div>
    </div>
  </div>
</div>
@endsection		


@section('script')
<script>
setTimeout(function() {
    $('#overlay').modal('hide');
}, 5000);

setTimeout(function() {
    $('#overlay2').modal('hide');
}, 5000);

</script>
<script>
	var url2  = "{{url('/forget_send_link')}}"
    $(document).on('click', '#submitbtn', function(event){
	  var data = {
		email: $('#email').val(),
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
			if(response == "Success"){
					$('#overlay2').modal('show')
					setTimeout(function() {
					location.reload() },4500
					);
				}
				else
				{
					$('#overlay').modal('show')
				}
		},
		error: function (textStatus, errorThrown) {
			$('#overlay').modal('show')
        },
		 complete: function() {
          $(".loader").hide();
        },
      });
    })
</script>
@endsection		
		
		