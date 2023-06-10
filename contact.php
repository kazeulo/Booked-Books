<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<title>Booked Books | Contact Us</title>
			<meta name="description" content="">
			<meta name="keywords" content="">
			<meta name="author" content="">
			<!-- Website favicon -->
			<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
			<!-- Bootstrap CDN -->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
			<!-- AOS CDN -->
			<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
			<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
			<!-- Icons -->
			<link rel="shortcut icon" type="image/png" href="./images/main-logo-favicon.png">
			<!-- Normalize.css for consistent styling across browsers -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
			<!-- Icomoon.css for icon fonts -->
			<link rel="stylesheet" href="icomoon/icomoon.css">
			<!-- Vendor.css for third-party libraries or frameworks -->
			<link rel="stylesheet" href="css/vendor.css">
			<!-- Style.css for custom styles -->
			<link rel="stylesheet" href="style.css">
		</head>
<!-- Header -->
<?php
	require 'php/header.php';
?>

<!-- Contact Section -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-title">Contact Us</h1>
				<div class="breadcrumbs">
					<span class="item"><a href="index.html">Home /</a></span>
					<span class="item">Contact Us</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Information Section -->
<section class="contact-information padding-large mt-3">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-0 mb-3">
				
				<h2>Get in Touch</h2>

				<div class="contact-detail d-flex flex-wrap mt-4">
					<div class="detail mr-6 mb-4">
						<p>Want to share your favorite book with us, or suggest a new addition to our collection? We'd love to hear from you! Fill out the form below to get in touch with us and let's chat about all things books.</p>
						<ul class="list-unstyled list-icon">
							<li><i class="icon icon-phone"></i>+(63)9 123 4567</li>
							<li><i class="icon icon-envelope-o"></i><a href="mailto:info@yourcompany.com">bookedbooks@gmail.com</a></li>
							<li><i class="icon icon-location2"></i>UPV Miag-ao Campus, College of Arts and Sciences</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6 p-0">
				<!-- Form -->
				<div class="contact-information">
					<h2>Send Us A Message</h2>
					<form name="contactform" action="contact.php" method="post" class="contact-form d-flex flex-wrap mt-4">
						<div class="row">
					    	<div class="col-md-6">
								<input type="text" minlength="2" name="name" placeholder="Name" class="u-full-width" required>
							</div>
							<div class="col-md-6">
								<input type="email" name="email" placeholder="E-mail" class="u-full-width" required>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">

								<textarea class="u-full-width" name="message" placeholder="Message" style="height: 150px;resize: none;" required></textarea>

								<label>
								    <input type="checkbox" required>
								    <span class="label-body">I agree to all the <a href="#">Terms and Conditions</a></span>
								</label>

								<button type="submit" name="submit" class="btn btn-full btn-rounded">Submit</button>
							</div>
						</div>
					</form>

				</div>

			</div>

		</div>
	</div>
</section>

<!-- Google Maps Embed -->
<section class="google-map">
	<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1386.355648042417!2d122.22722529167724!3d10.641104924559578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ae5c7bbb361ba7%3A0xb1e1bde7fa8e567c!2sCollege%20of%20Arts%20and%20Sciences!5e0!3m2!1sen!2sus!4v1683102529881!5m2!1sen!2sus" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com/fmovies"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
</section>

<!-- Footer -->
<footer id="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				
				<div class="footer-item">
					<div class="company-brand">
						<img src="images/main-logo.png" alt="logo" class="footer-logo">
						<p>Escape into a world of endless possibilities with our online book library. </p>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="footer-menu">
					<h5>About Us</h5>
					<ul class="menu-list">
						<li class="menu-item">
							<a href="/about.html#our-team">Team Members</a>
						</li>
						<li class="menu-item">
							<a href="/about.html#our-mission">Our Mission </a>
						</li>
						<li class="menu-item">
							<a href="/about.html#our-vision">Our Vision</a>
						</li>
						<li class="menu-item">
							<a href="/about.html#FAQs">FAQs</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">

				<div class="footer-menu">
					<h5>Browse</h5>
					<ul class="menu-list">
						<li class="menu-item">
							<a href="#">Books</a>
						</li>
						<li class="menu-item">
							<a href="#">Authors</a>
						</li>
						<li class="menu-item">
							<a href="#">Genres</a>
						</li>
						<li class="menu-item">
							<a href="#">Search</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="footer-menu">
					<h5>My Account</h5>
					<ul class="menu-list">
						<li class="menu-item">
							<a href="#">Sign In</a>
						</li>
						<li class="menu-item">
							<a href="#">View Rents</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<div class="footer-menu">
					<h5>Contact</h5>
					<ul class="menu-list">
						<li class="menu-item">
							<a href="#">Information</a>
						</li>
						<li class="menu-item">
							<a href="#">Send an Email</a>
						</li>
						<li class="menu-item">
							<a href="#">FAQs</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<div id="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="copyright">
					<div class="row">
						<div class="col-md-6">
							<p><strong>Booked Books</strong> © 2023 All Rights Reserved.</p>
						</div>
						<div class="col-md-6">
							<div class="social-links align-right">
								<ul>
									<li>
										<a href="#"><i class="icon icon-facebook"></i></a>
									</li>
									<li>
										<a href="#"><i class="icon icon-twitter"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/script.js"></script>
</body>
</html>	