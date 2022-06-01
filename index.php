<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href=".gitignore/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href=".gitignore/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login Page - Material Kit PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<!-- CSS Files -->
    <link href=".gitignore/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href=".gitignore/assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>
</head>

<body class="login-page">
	<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#">Material Kit PRO</a>
        	</div>

        	<div class="collpase navbar-collapse">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
    					<a href="#">
    						<i class="material-icons">apps</i> Components
    					</a>
    				</li>

    				<li class="dropdown">
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    						<i class="material-icons">view_day</i> Sections
    						<b class="caret"></b>
    					</a>
    					<ul class="dropdown-menu dropdown-with-icons">
    						<li>
    							<a href="#">
    								<i class="material-icons">dns</i> Headers
    							</a>
    						</li>
    						<li>
    							<a href="#">
    								<i class="material-icons">build</i> Features
    							</a>
    						</li>
    						<li>
    							<a href="#">
    								<i class="material-icons">list</i> Blogs
    							</a>
    						</li>
    						<li>
    							<a href="#">
    								<i class="material-icons">people</i> Teams
    							</a>
    						</li>
    						<li>
    							<a href="#">
    								<i class="material-icons">assignment</i> Projects
    							</a>
    						</li>
    						<li>
    							<a href="#">
    								<i class="material-icons">monetization_on</i> Pricing
    							</a>
    						</li>

    					</ul>
    				</li>

    				<li class="dropdown">
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    						<i class="material-icons">view_carousel</i> Examples
    						<b class="caret"></b>
    					</a>
    					<ul class="dropdown-menu dropdown-with-icons">
                            <li>
    							<a href="#">
    								<i class="material-icons">art_track</i> Blog Post
    							</a>
    						</li>
    						<li>
    							<a href="#">
    								<i class="material-icons">location_on</i> Contact Us
    							</a>
    						</li>
    						<li>
    							<a href="#">
    								<i class="material-icons">view_day</i> Landing Page
    							</a>
    						</li>
    					</ul>
    				</li>
        		</ul>
        	</div>
    	</div>
    </nav>

	<div class="page-header header-filter" style="background-image: url('.gitignore/assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup">
						<form class="form" method="" action="">
							<div class="header header-primary text-center">
								<h4 class="card-title">Log in</h4>
								<div class="social-line">
									<a href="#" class="btn btn-just-icon btn-simple">
										<i class="fa fa-facebook-square"></i>
									</a>
									<a href="#" class="btn btn-just-icon btn-simple">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#" class="btn btn-just-icon btn-simple">
										<i class="fa fa-google-plus"></i>
									</a>
								</div>
							</div>
							<p class="description text-center">Or Be Classical</p>
							<div class="card-content">

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">face</i>
									</span>
                                    <label for="idFirstName"></label>
									<input type="text" class="form-control" id="idFirstName" placeholder="First Name...">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
                                    <label for="idEmail"> Email </label>
									<input type="text" class="form-control" id="idEmail" placeholder="Email...">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
                                    <label for="idPass"></label>
									<input type="password" id="idPass" placeholder="Password..." class="form-control" />
								</div>
							</div>
							<div class="footer text-center">
								<a href="#" class="btn btn-primary btn-simple btn-wd btn-lg">Get Started</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
	        <div class="container">
	            <nav class="pull-left">
					<ul>
						<li>
							<a href="http://www.creative-tim.com">
								Creative Tim
							</a>
						</li>
						<li>
							<a href="http://presentation.creative-tim.com">
							   About Us
							</a>
						</li>
						<li>
							<a href="http://blog.creative-tim.com">
							   Blog
							</a>
						</li>
						<li>
							<a href="http://www.creative-tim.com/license">
								Licenses
							</a>
						</li>
					</ul>
	            </nav>
	            <div class="copyright pull-right">
	                &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">Creative Tim</a>
	            </div>
	        </div>
	    </footer>

	</div>

</body>
	<!--   Core JS Files   -->
	<script src=".gitignore/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src=".gitignore/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src=".gitignore/assets/js/material.min.js"></script>

	<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
	<script src=".gitignore/assets/js/moment.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
	<script src=".gitignore/assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
	<script src=".gitignore/assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
	<script src=".gitignore/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
	<script src=".gitignore/assets/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
	<script src=".gitignore/assets/js/jasny-bootstrap.min.js"></script>

	<!--    Plugin For Google Maps   -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src=".gitignore/assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>
</html>