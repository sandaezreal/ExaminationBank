
<html lang="en">
	
<head>
	
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Examination Bank</title>	
	
    <link href="css/login.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
	
</style>




</head>

<body>





    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.php">Examination Paper</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                      <li>
                        <a href="#Download">Download</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Online Examination</h1>
                        <h3>And Bank Generator With Android Application</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        <!-- Button trigger modal -->
	







							<li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-student-modal-sm">I'M A I.T. Student</button></li>
							<li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-professor-modal-sm">I'M A Professor</button></li>
							<li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-dean-modal-sm">I'M A Dean</button></li>
				        </ul>
					 </div>
						<!-- It Student Modal -->
						<div class="modal fade bs-student-modal-sm" tabindex="-1" role="dialog" aria-labelledby="I.T.StudentLabel">
						  <div class="modal-dialog modal-sm" role="document">
						  		 <h4 class="modal-title" id="gridSystemModalLabel">
						      </div>
						 		<div class="container">
						    <div class="row vertical-offset-100">
						    	<div class="col-md-4 col-md-offset-4">
						    		<div class="panel panel-default">
									  	<div class="panel-heading">
									    	<h3 class="panel-title">Please sign in</h3>
									 	</div>
									  	<div class="panel-body">
											///
											<form name="form1" method="post" action="Studentlogin.php">
											///
									    	
						                    <fieldset>
									    	  	<div class="form-group">
									    		    <input class="form-control" placeholder="Student "  id ="myusername" name="myusername" type="text"required>
									    		</div>
									    		<div class="form-group">
									    			<input class="form-control" placeholder="Password"  id="mypassword" name="mypassword" type="password" value=""required>
									    		</div>
									    		<div class="checkbox">
									    	    	<label>
									    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
									    	    	</label>
									    	    </div>
									    		<input class="btn btn-lg btn-success btn-block" type="submit" name="Submit" value="Login">
									    	</fieldset>
									      	</form>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /.I.t. Student Modal -->	
					<!-- Professor Modal -->
						<div class="modal fade bs-professor-modal-sm" tabindex="-1" role="dialog" aria-labelledby="ProfessorLabel">
						  <div class="modal-dialog modal-sm" role="document">
						  		 <h4 class="modal-title" id="gridSystemModalLabel">
						      </div>
						 		<div class="container">
						    <div class="row vertical-offset-100">
						    	<div class="col-md-4 col-md-offset-4">
						    		<div class="panel panel-default">
									  	<div class="panel-heading">
									    	<h3 class="panel-title">Professor Sigin </h3>
									 	</div>
									  	<div class="panel-body">
									    	<form name="form1" method="post" action="Proflogin.php">
						                    <fieldset>
									    	  	<div class="form-group">
									    		    <input class="form-control" id='user' placeholder="E-mail" name="user" id ="user" type="text"required>
									    		</div>
									    		<div class="form-group">
									    			<input class="form-control" id='password' placeholder="Password" name="password" type="password" value=""required>
									    		</div>
									    		<div class="checkbox">
									    	    	<label>
									    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
									    	    	</label>
									    	    </div>
									    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
									    	</fieldset>
									      	</form>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /. Professor Modal -->	
						<!-- Dean Modal -->
						<div class="modal fade bs-dean-modal-sm" tabindex="-1" role="dialog" aria-labelledby="DeanLabel">
						  <div class="modal-dialog modal-sm" role="document">
						  		 <h4 class="modal-title" id="gridSystemModalLabel">
						      </div>
						 		<div class="container">
						    <div class="row vertical-offset-100">
						    	<div class="col-md-4 col-md-offset-4">
						    		<div class="panel panel-default">
									  	<div class="panel-heading">
									    	<h3 class="panel-title">Dean Sigin </h3>
									 	</div>
									  	<div class="panel-body">
									    	<form accept-charset="UTF-8" role="form">
						                    <fieldset>
									    	  	<div class="form-group">
									    		    <input class="form-control" placeholder="E-mail" name="email" type="text"required>
									    		</div>
									    		<div class="form-group">
									    			<input class="form-control" placeholder="Password" name="password" type="password" value=""required>
									    		</div>
									    		<div class="checkbox">
									    	    	<label>
									    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
									    	    	</label>
									    	    </div>
									    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
									    	  <button type="button" class="btn btn-lg default" data-dismiss="modal">Close</button>
									    	</fieldset>
									      	</form>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- /. Dean Modal -->	
				</div><!-- /.container -->
     		</div>
   	 </div>  <!-- /.intro-header -->
</div>
    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2>
                    <p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2>
                    <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Google Web Fonts and<br>Font Awesome Icons</h2>
                    <p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to Start Bank Generator:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 5px; right: 5px; opacity: 1; cursor: pointer;"><img src="../images/up.png"></div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
</body>

</html>
