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
    <link href="../assets/https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
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
                        <h1>Login</h1>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="breadcrumb"><a href="../assets/index.html">Home</a> / Login </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-sec">
        <div class="container">
            <div class="row justify-content-center text-center">
            <div class="col">
            <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Password</label>
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
            <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>

            </div>
            </div>
        </div>
    </section>

   
    <footer class="footer">
		<div class="footer-body">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">About Charity</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<p>Charity is the pillow of life, and time is the day of some earth. Everyone really hates football
mourns We live a great life, basketball is not lacinia or, tell the time of life
Let's be honest.</p>
							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->

					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->

<<<<<<< HEAD
							<div class="footer-section-body">
								<ul class="list-links">
									<li>
										<a href="http://localhost/">Home</a>
									</li>

									<li>
										<a href="http://localhost/about/">About Us</a>
									</li>
									<li>
										<a href="http://localhost/project/">Projects</a>
									</li>
									<li>
										<a href="http://localhost/contact/">Contact Us</a>
									</li>

								</ul><!-- /.list-links -->

							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->

					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">Newsletter Signup</h4><!-- /.footer-section-title -->
=======
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
>>>>>>> e8be3ba011e979db9d228f1077318c370fb8ba88

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