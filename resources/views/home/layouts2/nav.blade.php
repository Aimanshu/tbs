<div class="my_header">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col_logo">
				<div class="logo">
					<a href="{{url('/')}}">
						<img src="{{ asset('node_modules/img/logo.png') }}" class="img-responsive">
					</a>
					<!-- <img src="img/logo_2.png" class="img-responsive"> -->
				</div>
			</div>
			<div class="col-sm-9 col_nav" >
				<nav class="navbar navbar-expand-lg navbar-light" style="float:right">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto my_navbar_2" >
                  	 @if (Auth::guest())
                    <li class="nav-item active">
                      <a class="nav-link" href="{{url('/')}}" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">ABOUT</a>
                    </li>
					 <li class="nav-item">
                      <a class="nav-link" href="#" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">CONTACT</a>
                    </li>
					 <li class="nav-item">
                      <a class="nav-link" href="#" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">FAQ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('registation') }}" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">REGISTER</a>
                    </li>
					<li class="nav-item">
                      <a class="nav-link" href="#" data-toggle="modal" data-target="#loginmodal" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">LOGIN</a>
                    </li>
                     @else
                     <li class="nav-item active">
                      <a class="nav-link" href="{{url('/')}}" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">ABOUT</a>
                    </li>
					 <li class="nav-item">
                      <a class="nav-link" href="#" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">CONTACT</a>
                    </li>
					 <li class="nav-item">
                      <a class="nav-link" href="#" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">FAQ</a>
                    </li>
                     <li class="nav-item active">
                      <a class="nav-link" href="{{ url('dashboard') }}" style="color:#666;font-size:15px;font-family: 'Roboto', sans-serif;">My Account</a>
                    </li>
                    <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                              
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                        @endif
                  </ul>
                </div>
            </nav>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top:65px;">
  <div class="modal-dialog modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #fff;border-bottom: none;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      @include('layouts.errors')
      <!-- @if(Session::has('flash_message')) 
          <div class="alert alert-error"><span class="glyphicon glyphicon-ok"></span>
          <em>{!! session('flash_message') !!}</em></div>
      @endif -->
      
      <center><p style="color:red;display:none" id="errormsg">Please Check Username/Password</p></center>
       <form class="form-horizontal" role="form" id="loginform2" method="POST" action="{{ url ('/checkloginfn') }}" style="margin-top: -19px;">
      <!-- <form class="form-horizontal" method="POST" action="{{ route('login') }}" style="margin-top: -19px;"> -->
          {{ csrf_field() }}
          <div class="modal-body" style="padding:50px 60px;background:#fff;">
            <div class="row">
              <input type="email" placeholder="Enter Username" class="form-control" name="email" id="email" value="{{old('email')}}" style="border-radius:4px;" required>
     				</div><br>
				<div class="row">
          <input type="password" placeholder="Enter Password" name="password" class="form-control" id="password" value="{{old('password')}}" style="border-radius:4px;" required>
				</div>
				
				<div class="row" style="margin-top:15px;">
					<div class="log_btn">
						<center>
              <!-- <button type="submit" name="submit" class="btn btn-danger active" style="width:100%;border-radius:4px;margin-bottom:15px;">Login</button> -->
              <input type="button"  name="submit" value="submit" id="loginsubmitbtn2" class="btn btn-danger active" style="width:100%;border-radius:4px;margin-bottom:15px;">
            </center>
					</div>
				</div>
				
				<center><h5 style="margin-top: -11px;">OR</h5></center>
					<div class="row" >
				  	<div class="log_btn">
					  	<center><a href="#" class="btn btn-danger active" style="width:100%;background:#3B5998;color:#fff;border:1px solid #3B5998;border-radius:4px;"><i class="fa fa-facebook"></i>&nbsp;&nbsp;Login With Facebook</a></center>
				  	</div>
					</div>
					
  			<div class="row" style="margin-top:15px;">
	 	  		<div class="log_btn">
	  					<center><a href="#" class="btn btn-danger active" style="width:100%;background:#fff;color:#D54C3F;border:2px solid #D54C3F;border-radius:4px;"><i class="fa fa-google"></i>&nbsp;&nbsp;Continue With Google</a></center>
					</div>
				</div>
					
        <div class="row" style="margin-top:15px;">
					<div class="log_btn">
            <p>Do Not Have Acoount? <a href="registation" name="signup">signup</a></p>
					<!-- <center><a href="registation"><button type="button" name="signup" class="btn btn-danger active" style="width:100%;border-radius:4px;margin-bottom:15px;">Sign Up</button></a></center> -->
			  	</div>
		   	</div>
			</div>
	</form>
 </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<!-- /.modal -->