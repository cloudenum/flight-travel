
<body>
	<div id="page-wrapper">
		<header id="header" class="navbar-fixed-top style1">
            <div class="hidden-mobile container">
                <address class="contact-details">
                    <span class="contact-phone"><i class="soap-icon-phone circle"></i> 1-800-123-HELLO</span>
                </address>
                <ul class="social-icons style2 clearfix">
					<li><a title="My account" href="#" data-toggle="tooltip"><i class="soap-icon-user"></i></a></li>
                    <li><a title="Login" href="#travelo-login" class="soap-popupbox" data-toggle="tooltip"><i class="soap-icon-user"></i></a></li>
					<li><a title="Singup" href="#travelo-signup" class="soap-popupbox" data-toggle="tooltip"><i class="soap-icon-user"></i></a></li>
                </ul>
            </div>
            
            <div id="logo" class="container">
                <h1 class="logo navbar-brand">
                    <a href="<?php echo base_url();?>" title="Travelo - home">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="Travelo HTML5 Template" />
                    </a>
                </h1>
            </div>
            <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                Mobile Menu Toggle
            </a>
            
            <div id="main-menu">
                <nav role="navigation" class="container">
						<ul class="menu">
							<li class="menu-item">
								<a href="<?php echo base_url();?>">Home</a>
							</li>
							<li class="menu-item">
								<a href="flight-index.html">Flights</a>
							</li>
						</ul>
					</nav>
				</div>
				
				<nav id="mobile-menu-01" class="mobile-menu collapse">
					<ul id="mobile-primary-menu" class="menu">
						<li class="menu-item">
							<a href="index.html">Home</a>
						</li>
						<li class="menu-item">
							<a href="hotel-index.html">Flights</a>
						</li>
					</ul>
					
					<ul class="mobile-topnav container">
						<li><a href="#">MY ACCOUNT</a></li>
						<li class="ribbon language menu-color-skin">
							<a href="#" data-toggle="collapse">ENGLISH</a>
							<ul class="menu mini">
								<li class="active"><a href="#" title="English">English</a></li>
							</ul>
						</li>
						<li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
						<li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
						<li class="ribbon currency menu-color-skin">
							<a href="#">USD</a>
							<ul class="menu mini">
								<li class="active"><a href="#" title="USD">USD</a></li>
							</ul>
						</li>
					</ul>
					
				</nav>

			<div id="travelo-signup" class="travelo-signup-box travelo-box">
				<div class="email-signup">
					<form action="<?php echo base_url()?>crud/register" method="post">
						<div class="form-group">
							<input name="fullname" type="text" class="input-text full-width" placeholder="Full Name">
							<input name="username" type="text" class="input-text full-width" placeholder="Username">
							<input name="password" type="password" class="input-text full-width" placeholder="Password">
							<input type="password" class="input-text full-width" placeholder="Retype Password">
						</div>
						<div class="form-group">
							<p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
						</div>
						<button type="submit" class="full-width btn-medium">SIGNUP</button>
					</form>
				</div>
				<div class="seperator"></div>
				<p>Already a Travelo member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
			</div>
			<div id="travelo-login" class="travelo-login-box travelo-box">
				<form>
					<div class="form-group">
						<input type="text" class="input-text full-width" placeholder="email address">
					</div>
					<div class="form-group">
						<input type="password" class="input-text full-width" placeholder="password">
					</div>
					<div class="form-group">
						<a href="#" class="forgot-password pull-right">Forgot password?</a>
						<div class="checkbox checkbox-inline">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</form>
				<div class="seperator"></div>
				<p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
			</div>
		</header>
