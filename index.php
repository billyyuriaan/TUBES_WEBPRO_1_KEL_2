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

	<title>Tubes Webpro</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="./assets/bootsrap/js/bootstrap.min.js">

	<link href="./assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="./assets/css/animate.css" rel="stylesheet">
  <link href="./assets/css/bootstrap.css" rel="stylesheet">
	<link href="./assets/css/bootsnav.css" rel="stylesheet">
	<link href="./assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/swipebox.css">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
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
					<a class="navbar-brand logo" href="http://localhost"><img src="./assets/images/logo.png"
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

	<div id="first-slider">
		<div id="carousel-example-generic" class="carousel slide carousel-fade">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<!-- Item 1 -->
				<div class="item active slide1">
					<h2 data-animation="animated bounceInDown"><span>Give a little change a lot</span></h2>
					<h3 data-animation="animated bounceInDown">I will follow the coaching process, but I will give it the same time
						They happened with some great labor and pain. For to come to the smallest detail, what is our exercise?
						no effort except to get some benefit from it.</h3>
					<h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>
				</div>
				<!-- Item 2 -->
				<div class="item slide2">
					<h2 data-animation="animated bounceInDown"><span>More charity More better life</span></h2>
					<h3 data-animation="animated bounceInDown">I will follow the coaching process, but I will give it the same time
						They happened with some great labor and pain. For to come to the smallest detail, what is our exercise?
						no effort except to get some benefit from it.</h3>
					<h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>
				</div>
				<!-- Item 3 -->
				<div class="item slide3">
					<h2 data-animation="animated bounceInDown"><span>Raise fund Warm heart</span></h2>
					<h3 data-animation="animated bounceInDown">I will follow the coaching process, but I will give it the same time
						They happened with some great labor and pain. For to come to the smallest detail, what is our exercise?
						no effort except to get some benefit from it.</h3>
					<h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>
				</div>
				<!-- Item 4 -->
				<div class="item slide4">
					<h2 data-animation="animated bounceInDown"><span>Raise your funds for a cause</span></h2>
					<h3 data-animation="animated bounceInDown">I will follow the coaching process, but I will give it the same time
						They happened with some great labor and pain. For to come to the smallest detail, what is our exercise?
						no effort except to get some benefit from it.</h3>
					<h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>
				</div>
				<!-- End Item 4 -->

			</div>
			<!-- End Wrapper for slides-->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<section id="about-sec">
		<div class="container">
			<div class="row text-center">
				<h1>ABOUT CHARITY HOPE</h1>
				<hr>
				<h5>It is very important for the customer to follow the customer's training, but it is the same time as the work
					and with some great pain.</h5>
				<p>It is very important for the customer to follow the customer's training, but it is the same time as the work
					and with some great pain. For let me come to the smallest detail, no one should practice any kind of work except that
					some of it is useful. Doubts or irure pain in reprimanding in pleasure wants to be
					let no hair flee from pain Unless they are blinded by lust, they do not come out, they are in
					The guilt of those who abandon their duties softens the soul, that is, the labors.</p>
				<p>But in order that you may see whence all this born error is of those who accuse pleasure and praise pain,
					I will open the whole matter, and those very things which have come from that discoverer of truth and, as it were, the architect of a happy life
					I will explain what was said. For no one despises or hates or runs away from pleasure itself because it is pleasure.
					but because great sorrows result to those who do not know how to follow pleasure with reason. Nor any further
					he is one who wants to pursue pain because it is pain, but because it is never his
					There are times when he seeks some great pleasure through labor and pain. In order to make it as small as possible
					I am sorry, who of us undertakes any physical exercise that is laborious, except to get something out of it
					benefit? But who can rightfully criticize him who prefers to be in that pleasure rather than nothing
					will result in trouble.</p>
				<div class="text-center">
					<a href="donate.html" class="btn1">donate now</a>
					<a href="about-us.html" class="btn2">Read More</a>
				</div>
			</div>
		</div>
	</section>

	<section id="activities-sec">
		<div class="container">
			<div class="row text-center">
				<h1>WHAT WE DO?</h1>
				<hr>
				<h5>It is very important for the customer to follow the customer's training, but it is the same time as the work
					and with some great pain.</h5>
				<div class="text-left">
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-heart"></i></div>
						<div class="grid-content-wrapper">
							<h4>Charity for Education</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
						<div class="grid-content-wrapper">
							<h4>Feed for Hungry Child</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-home"></i></div>
						<div class="grid-content-wrapper">
							<h4>Home for Homeless</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-tint"></i></div>
						<div class="grid-content-wrapper">
							<h4>Bringing Clean Water</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
						<div class="grid-content-wrapper">
							<h4>Help Little Hands</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="activities.html" title="">Read More</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-content-left"><i class="fa fa-money"></i></div>
						<div class="grid-content-wrapper">
							<h4>Donate for Children</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
								dignissim.</p>
							<a href="activities.html" title="">Read More</a>
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
							<source src="./assets/images/mov_bbb.mp4" type="video/mp4">
						</video>
					</div>
					<div class="col-md-6 clearfix top-off">
						<div class="media">
							<div class="media-image">
								<img src="./assets/images/g1.png" class="attachment-full size-full" alt="g1">
							</div>
							<div class="media-text">
								<h5>BECOME A VOLUNTEER</h5>
								<p>Give us a brief description of the service that you are promoting.</p>
							</div>
						</div>
						<div class="media">
							<div class="media-image">
								<img src="./assets/images/g2.png" class="attachment-full size-full" alt="g1">
							</div>
							<div class="media-text">
								<h5>MAKE A GIFT</h5>
								<p>Give us a brief description of the service that you are promoting.</p>
							</div>
						</div>
						<div class="media">
							<div class="media-image">
								<img src="./assets/images/g1.png" class="attachment-full size-full" alt="g1">
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

	<section id="projects-sec">
		<div class="container">
			<div class="row text-center">
				<h1>OUR PROJECTS</h1>
				<hr>
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua.</h5>
				<div class="text-center">
					<div class="col-md-4 clearfix top-off">
						<div class="grid-image"><img src="/assets/images/test1.jpg"></div>
						<div class="post-content">
							<h3>Nepal Earthquake: Clean Water Initiative</h3>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua.</p>
							<a href="projects.html" title="">View Project</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-image"><img src="/assets/images/test2.jpg"></div>
						<div class="post-content">
							<h3>Nepal Earthquake: Clean Water Initiative</h3>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua.</p>
							<a href="projects.html" title="">View Project</a>
						</div>
					</div>
					<div class="col-md-4 clearfix top-off">
						<div class="grid-image"><img src="./assets/images/test3.jpg"></div>
						<div class="post-content">
							<h3>Nepal Earthquake: Clean Water Initiative</h3>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua.</p>
							<a href="projects.html" title="">View Project</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gallery-sec">
		<div class="container">
			<div class="row text-center">
				<h1>OUR GALLERY</h1>
				<hr>
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
					et dolore magna aliqua.</h5>
				<ul class="clearfix">

					<li>
						<a href="images/gallery1.jpg" class="swipebox" title="My Caption">
							<div class="image"><img src="./assets/images/gallery1.jpg">
								<div class="overlay"><i class="fa fa-search-plus"></i></div>
							</div>
						</a>
					</li>
					<li>
						<a href="images/gallery2.jpg" class="swipebox" title="My Caption">
							<div class="image"><img src="./assets/images/gallery2.jpg">
								<div class="overlay"><i class="fa fa-search-plus"></i></div>
							</div>
						</a>
					</li>

					<li>
						<a href="images/gallery3.jpg" class="swipebox" title="My Caption">
							<div class="image"><img src="./assets/images/gallery3.jpg">
								<div class="overlay"><i class="fa fa-search-plus"></i></div>
							</div>
						</a>
					</li>

					<li>
						<a href="images/gallery4.jpg" class="swipebox" title="My Caption">
							<div class="image"><img src="./assets/images/gallery4.jpg">
								<div class="overlay"><i class="fa fa-search-plus"></i></div>
							</div>
						</a>
					</li>
					<li>
						<a href="images/gallery5.jpg" class="swipebox" title="My Caption">
							<div class="image"><img src="./assets/images/gallery5.jpg">
								<div class="overlay"><i class="fa fa-search-plus"></i></div>
							</div>
						</a>
					</li>
					<li>
						<a href="images/gallery6.jpg" class="swipebox" title="My Caption">
							<div class="image"><img src="./assets/images/gallery6.jpg">
								<div class="overlay"><i class="fa fa-search-plus"></i></div>
							</div>
						</a>
					</li>
					<li>
						<a href="images/gallery7.jpg" class="swipebox" title="My Caption">
							<div class="image"><img src="./assets/images/gallery7.jpg">
								<div class="overlay"><i class="fa fa-search-plus"></i></div>
							</div>
						</a>
					</li>
					<li>
						<a href="images/gallery8.jpg" class="swipebox" title="My Caption">
							<div class="image"><img src="./assets/images/gallery8.jpg">
								<div class="overlay"><i class="fa fa-search-plus"></i></div>
							</div>
						</a>
					</li>
				</ul>
				<div class="text-center">
					<a href="gallery.html" class="btn1">View More</a>
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
						<a href="contact.html" class="button">Become Volunteer</a>

						<span class="callout-separator">
							<span>Or</span>
						</span>

						<a href="donate.html" class="button">Donate For Cause</a>
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

	<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.js"></script>
	<script src="./assets/js/bootsnav.js"></script>
	<script src="./assets/js/banner.js"></script>
	<script src="./assets/js/jquery.swipebox.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			/* Basic Gallery */
			$('.swipebox').swipebox();

			/* Video */
			$('.swipebox-video').swipebox();

			/* Dynamic Gallery */
			$('#gallery').click(function (e) {
				e.preventDefault();
				$.swipebox([
					{ href: 'http://swipebox.csag.co/mages/image-1.jpg', title: 'My Caption' },
					{ href: 'http://swipebox.csag.co/images/image-2.jpg', title: 'My Second Caption' }
				]);
			});

		});
	</script>
	<script src="/assets/js/script.js"></script>
</body>

</html>