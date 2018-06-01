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
							<h1>Login</h1>
						</div>
						<ol class="tg-breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="tg-active">Login</li>
						</ol>
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
											<h3>Login Now</h3>
										</div>
										<fieldset>
										<form role="form" id="loginform" method="POST" action="{{ url ('/checkloginfn') }}">
										<meta name="csrf-token" content="{{ csrf_token() }}">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" placeholder="Email">
											</div>
											<div class="form-group">
												<input type="password" id="password" name="password" class="form-control" placeholder="Password">
											</div>

											<div class="form-group">
												<button class="tg-btn tg-btn-lg" type="button" name="submit" value="submit" id="loginsubmitbtn" >Login Now</button>
											</div>
										</form>
										Social Login
											<ul class="tg-socialicons tg-socialsharewithtext">
													<li class="tg-facebook">
														<a class="tg-roundicontext" href="{{ url('/auth/facebook') }}">
															<em class="tg-usericonholder">
																<i class="fa fa-facebook-f"></i>
																<span>facebook</span>
															</em>
														</a>
													</li>
													<li class="tg-googleplus">
														<a class="tg-roundicontext" href="{{ url('/auth/google') }}">
															<em class="tg-usericonholder">
																<i class="fa fa-google-plus"></i>
																<span>googl+</span>
															</em>
														</a>
													</li>
												</ul>

										  <a class="tg-btnforgotpass" href="{{url('registation')}}">Create SignUp?</a></br>
											<a class="tg-btnforgotpass" href="{{url('forget_password')}}">Forgot your password?</a>
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
        <h4 class="modal-title"><center>Please Check Username/Password </center> </h4>
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
</script>
<script>
	var url2  = "{{url('/checkloginfn')}}"
    $(document).on('click', '#loginsubmitbtn', function(event){
	  var data = {
		email: $('#email').val(),
		password: $('#password').val(),
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
			console.log(response)
			if(response == "3" || response == "4")
			{
				window.location.href = "http://tbs.aresedge.com/";
			}
			else
			{
		  	window.location.href = "http://tbs.aresedge.com/dashboard";
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
		
		