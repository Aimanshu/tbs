<!---------------------------------------Header start------------------------------>
<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<ul class="tg-addressinfo">
								<li>
									<i class="lnr lnr-envelope"></i>
									<a href="#">info@domain.com</a>
								</li>
								<li>
									<i class="lnr lnr-phone-handset"></i>
									<span>+91 34 567890</span>
								</li>
							</ul>
		
						</div>
					</div>
				</div>
			</div>

			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<strong class="tg-logo"><a href="http://tbs.aresedge.com"><img src="node_modules/css/shimpy/images/logo.png" alt="image description"></a></strong>
							<div class="tg-rightarea">
								<nav id="tg-nav" class="tg-nav">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
										<ul>
									
										    <li {{ Request::url() === url('/') ? ' class=current-menu-item' : '' }}><a href="http://tbs.aresedge.com">Home</a></li>
											<li {{ Request::url() === url('about_us') ? ' class=current-menu-item' : '' }}><a href="{{url('about_us')}}">About</a></li>
											<li {{ Request::url() === url('contact_us') ? ' class=current-menu-item' : '' }}><a href="{{url('contact_us')}}">Contact Us</a></li>
											<li {{ Request::url() === url('faqs') ? ' class=current-menu-item' : '' }}><a href="{{url('faqs')}}">FAQ</a></li>
										@if (Auth::guest())
											<li {{ Request::url() === url('registation') ? ' class=current-menu-item' : '' }}><a href="{{url('registation')}}">Register</a></li>
											<li {{ Request::url() === url('logins') ? ' class=current-menu-item' : '' }}><a href="{{url('logins')}}">Login</a></li>
										@else
											<li {{ Request::url() === url('dashboard') ? ' class=current-menu-item' : '' }}><a href="{{ url('dashboard') }}">My Account</a></li>
											
											<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"	aria-haspopup="true" aria-expanded="false">
												{{ Auth::user()->name }}
											</a>
	
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" >
												<a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
								<!--<a class="tg-btn tg-btnpostanewjob" href="#">Post A New Job</a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
<!------------------------------------Header end------------------------------------> 