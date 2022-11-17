<?php 
session_start();
?>

<!DOCTYPE HTML>
<html class="no-js" lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">

	<title>New Hope - Tubes Webpro</title>

	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/css/animate.css" rel="stylesheet">
	<link href="../assets/css/bootsnav.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<link href="../assets/css/owl.theme.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-default navbar-sticky bootsnav">
		<div class="container">
			<div class="row">
				<div class="attr-nav">
					<a class="donation" href="http://localhost/donate">donate now</a>
					<a class="login" href="http://localhost/login">login</a>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand logo" href="http://localhost"><img src="../assets/images/logo.png"
							class="img-responsive" /></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
						<li><a href="http://localhost">Home</a></li>
						<li><a href="http://localhost/about">About Us</a></li>
						<li><a href="http://localhost/project">Projects</a></li>
						<li><a href="http://localhost/contact">Contact Us</a></li>
                        <?php 
                        if(isset($_SESSION['username'])){
                            echo '<li><a href="http://localhost/history">History</a></li>';
                        }            
                        ?>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<section id="inner-banner">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h1>SPONSER A CHILD</h1>
					</div>
					<div class="col-sm-6">
						<h6 class="breadcrumb"><a href="../assets/index.html">Home</a> / Sponser a Child</h6>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="about-sec">
		<div class="container">
			<div class="row text-center">
				<div id="owl-demo" class="owl-carousel owl-theme">

					<div class="item">
						<div class="sponser-box">
							<img src="../assets/images/sponser.jpg" alt="Owl Image">
							<h4>Hi, I’m Ogwang</h4>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">Where I Live</div>
								<div class="col-xs-6">Uganda</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Age</div>
								<div class="col-xs-6">7</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Birthday</div>
								<div class="col-xs-6">1/09/2009</div>
							</div>
							<a href="../assets/sponser.html" class="btn1">Sponsor me</a>
						</div>
					</div>

					<div class="item">
						<div class="sponser-box">
							<img src="../assets/images/sponser.jpg" alt="Owl Image">
							<h4>Hi, I’m Ogwang</h4>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">Where I Live</div>
								<div class="col-xs-6">Uganda</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Age</div>
								<div class="col-xs-6">7</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Birthday</div>
								<div class="col-xs-6">1/09/2009</div>
							</div>
							<a href="../assets/sponser.html" class="btn1">Sponsor me</a>>
						</div>
					</div>

					<div class="item">
						<div class="sponser-box">
							<img src="../assets/images/sponser.jpg" alt="Owl Image">
							<h4>Hi, I’m Ogwang</h4>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">Where I Live</div>
								<div class="col-xs-6">Uganda</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Age</div>
								<div class="col-xs-6">7</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Birthday</div>
								<div class="col-xs-6">1/09/2009</div>
							</div>
							<a href="../assets/sponser.html" class="btn1">Sponsor me</a>>
						</div>
					</div>

					<div class="item">
						<div class="sponser-box">
							<img src="../assets/images/sponser.jpg" alt="Owl Image">
							<h4>Hi, I’m Ogwang</h4>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">Where I Live</div>
								<div class="col-xs-6">Uganda</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Age</div>
								<div class="col-xs-6">7</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Birthday</div>
								<div class="col-xs-6">1/09/2009</div>
							</div>
							<a href="../assets/sponser.html" class="btn1">Sponsor me</a>>
						</div>
					</div>

					<div class="item">
						<div class="sponser-box">
							<img src="../assets/images/sponser.jpg" alt="Owl Image">
							<h4>Hi, I’m Ogwang</h4>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">Where I Live</div>
								<div class="col-xs-6">Uganda</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Age</div>
								<div class="col-xs-6">7</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Birthday</div>
								<div class="col-xs-6">1/09/2009</div>
							</div>
							<a href="../assets/sponser.html" class="btn1">Sponsor me</a>>
						</div>
					</div>

					<div class="item">
						<div class="sponser-box">
							<img src="../assets/images/sponser.jpg" alt="Owl Image">
							<h4>Hi, I’m Ogwang</h4>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">Where I Live</div>
								<div class="col-xs-6">Uganda</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Age</div>
								<div class="col-xs-6">7</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Birthday</div>
								<div class="col-xs-6">1/09/2009</div>
							</div>
							<a href="../assets/sponser.html" class="btn1">Sponsor me</a>>
						</div>
					</div>

					<div class="item">
						<div class="sponser-box">
							<img src="../assets/images/sponser.jpg" alt="Owl Image">
							<h4>Hi, I’m Ogwang</h4>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">Where I Live</div>
								<div class="col-xs-6">Uganda</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Age</div>
								<div class="col-xs-6">7</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Birthday</div>
								<div class="col-xs-6">1/09/2009</div>
							</div>
							<a href="../assets/sponser.html" class="btn1">Sponsor me</a>>
						</div>
					</div>

					<div class="item">
						<div class="sponser-box">
							<img src="../assets/images/sponser.jpg" alt="Owl Image">
							<h4>Hi, I’m Ogwang</h4>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">Where I Live</div>
								<div class="col-xs-6">Uganda</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Age</div>
								<div class="col-xs-6">7</div>
							</div>
							<div class="spon-bdr clearfix">
								<div class="col-xs-6">My Birthday</div>
								<div class="col-xs-6">1/09/2009</div>
							</div>
							<a href="../assets/sponser.html" class="btn1">Sponsor me</a>>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>

	<section id="activities-sec">
		<div class="container">
			<div class="row text-center">
				<h1>WHAT WE DO?</h1>
				<hr>
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua.</h5>
				<div class="text-left">
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-heart"></i></div>
						<div class="grid-content-wrapper">
							<h4>Charity for Education</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="../assets/activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
						<div class="grid-content-wrapper">
							<h4>Feed for Hungry Child</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="../assets/activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-home"></i></div>
						<div class="grid-content-wrapper">
							<h4>Home for Homeless</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="../assets/activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-tint"></i></div>
						<div class="grid-content-wrapper">
							<h4>Bringing Clean Water</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="../assets/activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
						<div class="grid-content-wrapper">
							<h4>Help Little Hands</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="../assets/activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-money"></i></div>
						<div class="grid-content-wrapper">
							<h4>Donate for Children</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="../assets/activities.html" title="">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="video-sec">
		<div class="container">
			<div class="row text-center">
				<h1>How can you help?</h1>
				<hr>
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua.</h5>
				<div class="text-left">
					<div class="col-md-6 clearfix top-off">
						<video width="400" controls>
							<source src="../assets/images/mov_bbb.mp4" type="video/mp4">
						</video>
					</div>
					<div class="col-md-6 clearfix top-off">
						<div class="media">
							<div class="media-image">
								<img src="../assets/images/g1.png" class="attachment-full size-full" alt="g1">
							</div>
							<div class="media-text">
								<h5>BECOME A VOLUNTEER</h5>
								<p>Give us a brief description of the service that you are promoting.</p>
							</div>
						</div>
						<div class="media">
							<div class="media-image">
								<img src="../assets/images/g2.png" class="attachment-full size-full" alt="g1">
							</div>
							<div class="media-text">
								<h5>MAKE A GIFT</h5>
								<p>Give us a brief description of the service that you are promoting.</p>
							</div>
						</div>
						<div class="media">
							<div class="media-image">
								<img src="../assets/images/g1.png" class="attachment-full size-full" alt="g1">
							</div>
							<div class="media-text">
								<h5>GIVE A SCHOLASHIP</h5>
								<p>Give us a brief description of the service that you are promoting.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="callout">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Change Their World. Change Yours. This changes everything.</h2><!-- /.callout-title -->
				</div><!-- /.columns large-6 -->

				<div class="col-md-6">
					<div class="callout-actions">
						<a href="../assets/contact.html" class="button">Become Volunteer</a>

						<span class="callout-separator">
							<span>Or</span>
						</span>

						<a href="../assets/donate.html" class="button">Donate For Cause</a>
					</div><!-- /.callout-actions -->
				</div><!-- /.columns large-6 -->
			</div><!-- /.row -->
		</div>
	</div>

	<footer class="footer">
		<div class="footer-body">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">About Charity</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<p>Charity vitae diam pulvinar, tempus dia aliquam tellus. Quisque mattis odio eu
									placerat luctus. Vivamus magna elit, ultrices non lacinia vel, tempor vitae tell
									Fusce sit amet sem sit amet.</p>
							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->

					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<ul class="list-links">
								<li>
										<a href="http://localhost">Home</a>
									</li>

									<li>
										<a href="http://localhost/about">About Us</a>
									</li>

									<li>
										<a href="http://localhost/contact">Contact Us</a>
									</li>
									<li>
										<a href="http://localhost/project">Projects</a>
									</li>

								</ul><!-- /.list-links -->

							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->

					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">Newsletter Signup</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<p>Select your newsletters, enter your email address, and click "Subscribe"</p>

								<div class="subscribe">
									<form action="?" method="post">
										<input type="submit" value="Go" class="subscribe-btn">

										<div class="subscribe-inner">
											<input type="email" id="mail" name="mail" value=""
												placeholder="Email Address" class="subscribe-field">
										</div><!-- /.subscribe-inner -->
									</form>
								</div><!-- /.subscribe -->
							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->

					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<p><b>Address:</b> Telkom University, Bandung</p>

								<div class="footer-contacts">
									<p>
										<b>
											<i class="fa fa-phone"></i> Phone:
										</b>

										+628-126-666-001
									</p>

									<p>
										<b>
											<i class="fa fa-envelope-o"></i> Email:
										</b>

										info@newhope.com
									</p>
								</div><!-- /.footer-contacts -->
							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.footer-body -->

		<div class="bwt-footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6 copyright">
						<div class="left-text">Copyright &copy; New Hope 2017. All Rights Reserved</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/bootsnav.js"></script>
	<script src="../assets/js/banner.js"></script>
	<script src="../assets/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {

			$("#owl-demo").owlCarousel({

				autoPlay: 5000, //Set AutoPlay to 3 seconds
				navigation: true,
				navigationText: ["", ""],
				items: 4,
				itemsDesktop: [1199, 3],
				itemsDesktopSmall: [979, 3]

			});

		});
	</script>
	<script src="../assets/js/script.js"></script>
</body>

</html>