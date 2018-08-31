

<html lang="en">
<?php


	$AccessLevel0 = 'cfcd208495d565ef66e7dff9f98764da';
	$AccessLevel1 = 'c4ca4238a0b923820dcc509a6f75849b';
	$Accesslevel2 = 'c81e728d9d4c2f636f067f89cc14862c';
if(isset($_COOKIE['OLVerified'])) {
		switch ( $_COOKIE['OLExamAccess']) {
	    case $AccessLevel0:
	        header('Location:Dean');
	        break;
	    case $AccessLevel1:
	        header('Location:Professor');
	        break;
	    case $Accesslevel2:
	        header('Location:Student');
	        break;
	    default:
        	//Do Nothing
	    break;
	}
}



	if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
		echo "<script type='text/javascript'> alert('YOUR USERNAME OR PASSWORD MIGHT BE WRONG. PLEASE LOGIN AGAIN TO VERIFY!')</script>";
	}
	?>	
<head>
	
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Examination Bank</title>	
	<link rel="stylesheet" type="text/css" href="">
    <link href="css/login.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 
		<style>


		/* Scroll to TOP!!!*/

.scrollToTop{
    width: 100px;
    height: 130px;
    padding: 10px;
    text-align:center;
    background: whiteSmoke;
    font-weight: bold;
    color: #444;
    text-decoration: none;
    position:fixed;
    bottom: 10px;
    right: 20px;
    display: none;
	background: url('img/ArrowUp.png') no-repeat 0px 0px;
}
.scrollToTop:hover{
	text-decoration:none;
}

.opaque-navbar {
    background-color: rgba(0,0,0,0.5);
  /* Transparent = rgba(0,0,0,0) / Translucent = (0,0,0,0.5)  */
    height: 60px;
    border-bottom: 0px;
    transition: background-color .5s ease 0s;
}

.opaque-navbar.opaque {
    background-color: 	#cd3700;
    height: 60px;
    transition: background-color .5s ease 0s;
}
0
ul.dropdown-menu {
    background-color: black;
}


@media (max-width: 992px) {
  body
  {
    background:red;
  }
  .opaque-navbar {
    background-color: black;
    height: 60px;
    transition: background-color .5s ease 0s;
}


}
		</style>
	</head>

	<body > 

<!--
********************************************************************
* Responsive Transparent Navbar
********************************************************************
-->
<div class="navbar navbar-default navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
  <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
    
  </button>
      <a class="navbar-brand" href="#">Examination Bank</a>
    </div>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="nav navbar-nav pull-right">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services and Pricing</a></li> 
        <li><a href="#">Contact Us</a></li> 
      </ul>
    </div>
  </div>
</div>


		<!-- Header -->
		<a name="about"></a>
		<div class="intro-header">
			<div class="container">

				<div class="row">
					<div class="col-lg-12">
						<div class="intro-message">
							<h1>Online Examination</h1>
							<h3> Bank Generator 	
							  <a href="#" class="typewrite" data-period="2000" data-type='[ 
							  "With Android Application",
							  "For Teacher.",
							  "For Information Technology Student.",
							  "In Pamantasan ng Lungsod ng Marikina." ]'>

							<span class="wrap"></span>
							  </a> </h3>
						
							
							<hr class="intro-divider">
							<ul class="list-inline intro-social-buttons">
							<!-- Button trigger modal -->
							
	
	<script>
	var TxtType = function(el, toRotate, period) {
			this.toRotate = toRotate;
			this.el = el;
			this.loopNum = 0;
			this.period = parseInt(period, 10) || 2000;
			this.txt = '';
			this.tick();
			this.isDeleting = false;
		};

		TxtType.prototype.tick = function() {
			var i = this.loopNum % this.toRotate.length;
			var fullTxt = this.toRotate[i];

			if (this.isDeleting) {	
			this.txt = fullTxt.substring(0, this.txt.length - 1);
			} else {
			this.txt = fullTxt.substring(0, this.txt.length + 1);
			}

			this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

			var that = this;
			var delta = 200 - Math.random() * 100;

			if (this.isDeleting) { delta /= 2; }

			if (!this.isDeleting && this.txt === fullTxt) {
			delta = this.period;
			this.isDeleting = true;
			} else if (this.isDeleting && this.txt === '') {
			this.isDeleting = false;
			this.loopNum++;
			delta = 500;
			}

			setTimeout(function() {
			that.tick();
			}, delta);
		};

		window.onload = function() {
			var elements = document.getElementsByClassName('typewrite');
			for (var i=0; i<elements.length; i++) {
				var toRotate = elements[i].getAttribute('data-type');
				var period = elements[i].getAttribute('data-period');
				if (toRotate) {
				  new TxtType(elements[i], JSON.parse(toRotate), period);
				}
			}
			// INJECT CSS
			var css = document.createElement("style");
			css.type = "text/css";
			css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
			document.body.appendChild(css);
		};
	</script>
								<li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#StudModal">I'M A I.T. Student</button></li>
								<li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ProfModal">I'M A Professor</button></li>
								<li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#AdminModal">I'M A Dean</button></li>
	<br>
	<br>
	
							</ul>	
						 </div>
<!-------------------Student----Modal Containers------------>
<div id="StudModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div closeass="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student </h4>
      </div>
      <div class="modal-body">
      <!-------------------------------------MODAL BODY!!!!!!!!!!!------------------------- -->
		<form name='frmStudent' method='post' action='Login.php'>
	
		<fieldset>
		<?php

		$usr ="";
		$pwd = "";
		$isChecked="Unchecked";
		if (isset($_COOKIE["OLExamAccess"])){
			if($_COOKIE["OLExamAccess"] === "c81e728d9d4c2f636f067f89cc14862c")
			{
				if (isset($_COOKIE["OLExamUserName"])){$usr=$_COOKIE["OLExamUserName"];}else{$usr="";}
				if (isset($_COOKIE["OLExamPassword"])){$pwd =$_COOKIE["OLExamPassword"];}else{$pwd="";}
				if (isset($_COOKIE["OLExamRemPwd"])){$isChecked =$_COOKIE["OLExamRemPwd"];}else{$isChecked="";}
			}
		}
			$frm =	"<div class='form-group'>
					<input class='form-control' placeholder='Username' name='Username'
					type='text' value='".$usr."' required>
				</div>
				

				<div class='form-group'>
					<input class='form-control' placeholder='Password' name='Password'
					type='password' value='".$pwd."' required>
				</div>
				<div class='checkbox'>
					<label>
						<input name='RememberPwd' type='checkbox' value='Remember Me' ".$isChecked."> Remember Me
					</label>
				</div>
				<input name='Access' style='visibility:hidden' value =2>
				<input class='btn btn-lg btn-success btn-block' type='submit' name='Submit' value='Login'>";		

		echo $frm;
		?>

      </div>
    </div>
  </div>
</div>	
<!-------------------Professor----Modal Containers------------>
<div id="ProfModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Professor </h4>
      </div>
      <div class="modal-body">
      <!-------------------------------------MODAL BODY!!!!!!!!!!!------------------------- -->
		<form name='frmStudent' method='post' action='Login.php'>
	
		<fieldset>
		<?php

		$usr ="";
		$pwd = "";
		$isChecked="Unchecked";
		if (isset($_COOKIE["OLExamAccess"])){
			if($_COOKIE["OLExamAccess"] === "c4ca4238a0b923820dcc509a6f75849b")
			{
				if (isset($_COOKIE["OLExamUserName"])){$usr=$_COOKIE["OLExamUserName"];}else{$usr="";}
				if (isset($_COOKIE["OLExamPassword"])){$pwd =$_COOKIE["OLExamPassword"];}else{$pwd="";}
				if (isset($_COOKIE["OLExamRemPwd"])){$isChecked =$_COOKIE["OLExamRemPwd"];}else{$isChecked="";}
			}
		}
			$frm =	"<div class='form-group'>
					<input class='form-control' placeholder='Professor' name='Username'
					type='text' value='".$usr."' required>
				</div>
				

				<div class='form-group'>
					<input class='form-control' placeholder='Password' name='Password'
					type='password' value='".$pwd."' required>
				</div>
				<div class='checkbox'>
					<label>
						<input name='RememberPwd' type='checkbox' value='Remember Me' ".$isChecked."> Remember Me
					</label>
				</div>
				<input name='Access' style='visibility:hidden' value =1>
				<input class='btn btn-lg btn-success btn-block' type='submit' name='Submit' value='Login'>";		

		echo $frm;
		?>

      </div>
    </div>
  </div>
</div>	




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
		
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Latest compiled and minified CSS -->
<script type="text/javascript">
	 /*
  **********************************************************
  * OPAQUE NAVBAR SCRIPT
  **********************************************************
  */

  // Toggle tranparent navbar when the user scrolls the page


var $ = jQuery.noConflict();
jQuery(document).ready(function( $ ){
    scrollToTop.init( );
});

var scrollToTop =
{
    /**
     * When the user has scrolled more than 100 pixels then we display the scroll to top button using the fadeIn function
     * If the scroll position is less than 100 then hide the scroll up button
     *
     * On the click event of the scroll to top button scroll the window to the top
     */
    init: function(  ){
 
       //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        // Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    /*OPAQUE NAV!!!!!!!!!!!!*/
	$(window).scroll(function() {
	    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
	    {
	        $('.opaque-navbar').addClass('opaque');
	    } else {
	        $('.opaque-navbar').removeClass('opaque');
	    }
	});

    }
};
  
</script>

<a href="#" class="scrollToTop">Scroll To Top</a>
	</body>

	</html>
