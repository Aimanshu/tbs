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
							<h1>contact</h1>
						</div>
						<ol class="tg-breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="tg-active">contact</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<main id="tg-main" class="tg-main tg-paddingzero tg-haslayout">
			<div class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>Get In Touch</h2>
								</div>
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim adia minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip extea commodo consequat.</p>
								</div>
							</div>
						</div>
						<div class="tg-contactusarea">
							<div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
								<form class="tg-themeform" id="loginform" method="POST" action="{{ url ('/fromcontact') }}">
								<meta name="csrf-token" content="{{ csrf_token() }}">
									<fieldset>
										<div class="row">
											<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
												<div class="form-group">
													<input type="text" name="name" id="name" class="form-control" placeholder="Full Name">
												</div>
											</div>
											<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
												<div class="form-group">
													<input type="number" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone">
												</div>
											</div>
											<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
												<div class="form-group">
													<input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<textarea placeholder="Subject" id="subject" name="subject"></textarea>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
												<button	 class="tg-btn" type="button" name="submit" value="submit" id="contactsubmitbtn">Submit</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="tg-main-section tg-haslayout tg-bglight">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<figure class="tg-noticeboard"><img src="node_modules/css/shimpy/images/noticeboard.png" alt="image description"></figure>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<div class="tg-secureandreliable">
								<div class="tg-textshortcode">
									<h2>Start Earning Today!</h2>
									<h3>It’s Secure, Its Reliable</h3>
									<div class="tg-description">
										<p>Consectetur adipisicing elit sed eiusmod tempor incididunt labore et dolore magna aliqua enim adia minim veniam quis nostrud exercitation ullamco laboris atuiuip extea commo consequat aute irure dolor reprehenderit.</p>
									</div>
								</div>
								<a class="tg-btn" href="{{url('registation')}}">Join Now</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		</main>

<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>Please Fill All Fields....!! </center> </h4>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="overlay2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><center>We Will Contact You Soon !! </center> </h4>
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
	var url2  = "{{url('/fromcontact')}}"
    $(document).on('click', '#contactsubmitbtn', function(event){
	  var data = {
		name: $('#name').val(),
		phone: $('#phone').val(),
		email: $('#email').val(),
		subject: $('#subject').val(),
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
			  // console.log(response)
				$('#overlay2').modal('show')
				setTimeout(function() {
					location.reload() },2500
					);
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
		
		