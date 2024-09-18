<?php $siteName = "The Street University";?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
	
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Title -->
		<title><?php echo siteName;?> - Coming Soon</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">
		
    	<!-- Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="assets/library/bootstrap/css/bootstrap.min.css">
		
		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="assets/library/fontawesome/css/all.min.css" />
		
		<!-- Google web fonts -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400italic,600,700">
		
		<!-- Flip timer -->
		<link rel="stylesheet" href="assets/library/fliptimer/fliptimer.css" type="text/css">
        
        <!-- Animate -->
    	<link rel="stylesheet" type="text/css" href="assets/library/animate/animate.css">
	
		<!-- Animated headline -->
		<link rel="stylesheet" type="text/css" href="assets/library/animatedheadline/animated.headline.css">   
        
		<!-- Custom scrollbar -->
    	<link rel="stylesheet" type="text/css" href="assets/library/mcustomscrollbar/jquery.mCustomScrollbar.css">
	
		<!-- Vegas -->
		<link rel="stylesheet" type="text/css" href="assets/library/vegas/vegas.min.css">
        
        <!-- YTPlayer -->
		<link rel="stylesheet" type="text/css" href="assets/library/ytplayer/css/jquery.mb.ytplayer.min.css">
		
		<!-- Stylesheet -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/media.css">
		
		<!-- Color schema -->
		<link rel="stylesheet" type="text/css" href="assets/colors/yellow.css" class="colors">
		
		<!-- Settings (Remove it on your site) -->
		<link rel="stylesheet" type="text/css" href="assets/library/settings/settings.css">
	
	</head>
	
	<body 
		onload="start()" 
		onresize="resize()" 
		onorientationchange="resize()"
	>
	
		<!-- Loader -->
		<div class="page-loader">
			<div class="loading" data-content="Loading">
				<span></span>
				<span></span>
			</div>
		</div>
		
		<!-- Overlay -->
        <div class="global-overlay">
            
            <!-- Star wars canvas -->
			<canvas id="starfield"></canvas>
            
        </div>
		
		<!-- Navigation -->
        <div id="nav" class="wow fadeInUp" data-wow-delay="1.8s">
            <ul>
                <li><a href="#" class="nav home active">Home</a></li>
                <li><a href="#about-area" class="nav about">About</a></li>
                <li><a href="#contact-area" class="nav">Contact</a></li>
                <li><a href="#map-area" class="nav">Map</a></li>
            </ul>
        </div>
		
		<!-- Page content -->
		<div class="page modal-effect">
            
            <!-- Logo -->
			<section class="logo wow fadeInUp">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							
							<img src="images/logotsu.png" alt="">
							
						</div>
					</div>
				</div>
			</section>
            
            <!-- Content -->
			<div class="d-flex align-items-center min-vh-100">
				<div class="container-fluid">
                    
                    <!-- Welcome -->
					<div class="welcome row">
						<div class="col-lg-12">

							<h2 class="wow fadeInUp cd-headline rotate-1" data-wow-delay="0.3s">
								<span class="blc"><?php echo siteName;?> is </span>
								<span class="cd-words-wrapper">
									<b class="is-visible">Launching</b>
									<b>Creating</b>
									<b>Building</b>
								</span>
							</h2>

							<p class="wow fadeInUp" data-wow-delay="0.6s">
								Our website is under construction, we are working very hard to make it live.
								<br class="d-none d-lg-block">
								You will love <strong><?php echo siteName;?> </strong> as much as we do. <span class="d-none d-lg-inline">It will morph perfectly on your needs!</span>
							</p>

						</div>
					</div>

					<!-- Countdown -->
					<div class="countdown row">
						<div class="col-lg-6 col-sm-12">
							<div id="countdown" class="wow fadeInUp" data-wow-delay="0.9s"></div>
						</div>
					</div>

					<!-- Buttons -->
					<div class="buttons row">
						<div class="col-lg-12">

							<!-- More info -->
							<div class="action-btn mr-15 more-info wow fadeInUp" data-wow-delay="1.2s" data-bs-toggle="modal" data-bs-target="#about">
								More Info <i class="fas fa-chevron-right"></i>
							</div>

							<!-- Subscribe -->
							<div class="action-btn white wow fadeInUp" data-wow-delay="1.5s" data-dialog="newsletter">
								Subscribe <i class="fas fa-envelope"></i>
							</div>

						</div>
					</div>

				</div>
			</div>
			
		</div>
        
        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="row">

                    <!-- Copyright -->
                    <div class="col-lg-6 col-sm-12">                        
                        <div class="copyright wow fadeInUp" data-wow-delay="2.1s">
                            Copyright &copy; <?php echo date('Y');?> <strong><?php echo siteName;?> </strong>
                        </div>
                    </div>

                    <!-- Social -->
                    <div class="col-lg-6 col-sm-12">

                        <ul class="social wow fadeInUp" data-wow-delay="2.4s">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </footer>
		
		<!-- Info nav -->
		<a class="info-nav wow fadeInUp" data-wow-delay="0.3s" href="#" data-bs-toggle="modal" data-bs-target="#about">
			<span></span>
		</a>
	
		<!-- About us -->
		<div id="about" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
	
			<div class="modal-dialog ">
				<div class="modal-content">

					<div class="modal-body">

						<!-- About -->
						<div id="about-area" class="about-dsc">

							<!-- Title -->
							<div class="row section-title">
								<div class="col-lg-12">
									<h3>About</h3>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<p>
										Curabitur ac <strong>fringilla mauris</strong>, vitae luctus orci. 
										Pellentesque eu placerat nunc. <strong>Vivamus</strong> 
										tellus nec semper. Etiam ex felis, maximus id commodo sit amet, 
										<strong>congue vitae ipsum</strong>. Aliquam at nisl nulla. 
										Fusce quis purus nec lacus laoreet luctus at vitae libero.
									</p>
									<p>
										Praesent vehicula dictum ipsum, ac <strong>vehicula</strong> ex scelerisque vel. 
										Maecenas ultrices vehicula magna, a <strong>pretium quam</strong> maximus nec. 
										Morbi nec feugiat augue, eget feugiat metus. Suspendisse potenti. 
										<strong>Integer ullamcorper ultrices</strong> rhoncus. Curabitur ultricies ante eu purus elementum faucibus. 
										Nunc ac quam non erat pharetra sodales eu eget quam.
									</p>
								</div>
							</div>

						</div>			

						<!-- Get in touch -->
						<div id="contact-area" class="contact">

							<!-- Title -->
							<div class="row section-title white">
								<div class="col-lg-12">
									<h3>Get in Touch</h3>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4">
									<h5><i class="fas fa-map"></i></h5>
									<span>Address</span>
									<p>1650 Lombard, San Francisco, CA</p>
								</div>
								<div class="col-lg-4">
									<h5><i class="fas fa-phone"></i></h5>
									<span>Phone</span>
									<p>
										+1 (415) 876-3250<br>
										+1 (415) 876-3251
									</p>	
								</div>											
								<div class="col-lg-4">
									<h5><i class="fas fa-envelope"></i></h5>
									<span>Say Hello</span>
									<p>
										<a href="https://www.athenastudio.co/cdn-cgi/l/email-protection#9cf5f2faf3dceff5e8f9b2fff3f1"><span class="__cf_email__" data-cfemail="c5acaba3aa85b6acb1a0eba6aaa8">[email&#160;protected]</span></a><br>
										<a href="https://www.athenastudio.co/cdn-cgi/l/email-protection#6310020f061023100a17064d000c0e"><span class="__cf_email__" data-cfemail="bccfddd0d9cffccfd5c8d992dfd3d1">[email&#160;protected]</span></a>
									</p>
								</div>
							</div>

						</div>

						<!-- Contact form -->
						<div id="contact-form-area" class="contact-form">

							<div class="row">
								<div class="col-lg-12">

									<div class="contact-form-holder">
										<div class="field">
											<input type="text" name="name" class="field-name" placeholder="Name">
										</div>
										<div class="field">
											<input type="email" name="email" class="field-email" placeholder="Email">
										</div>
										<div class="field">
											<input type="text" name="phone" class="field-phone" placeholder="Phone">
										</div>
										<div class="field">
											<textarea name="message" class="field-message" placeholder="Message"></textarea>
										</div>

										<!-- Submit Button -->
										<div>
											<button type="submit" class="action-btn" id="contact-submit">Send Message <i class="fas fa-paper-plane"></i></button>
										</div>
									</div>

									<!-- Submit Results -->
									<div class="contact-form-result">
										<h3>Thank You for the Email!</h3>
										<p>Your message has already arrived! We'll contact you shortly.</p>
									</div>						

								</div>
							</div>

						</div>

						<!-- Google Maps -->
						<div id="map-area" class="google-map">
							<div id="google-container"
								 data-title="Ephesus Main Office"
								 data-latitude="37.800976"
								 data-longitude="-122.428502"
								 data-zoom="12"
								 data-marker="assets/images/map-marker-yellow.png"
								 data-color="#ffbe00">
							</div>
							<div id="zoom-in"></div>
							<div id="zoom-out"></div>
						</div>

					</div>

				</div>
			</div>
		  
		</div>
		
		<!-- Newsletter popup -->
		<div id="newsletter" class="dialog">
			
			<div class="dialog__overlay"></div>
					
			<div class="dialog__content">						
				<div class="dialog-inner">
							
					<h4>Stay Tuned</h4>
							
					<p class="d-none d-lg-block">We launch our new website soon.<br>Please stay updated and follow!</p>

					<!-- Newsletter form -->
					<div id="subscribe">

		                <form action="https://www.athenastudio.co/themes/ephesus/php/subscribe.php" id="notifyMe" method="POST">
		                    <div class="form-group">
		                        <div class="controls">
		                            
		                        	<!-- Field  -->
		                        	<input type="text" id="mail-sub" name="email" placeholder="Enter your email address" class="email srequiredField" />

		                        	<!-- Spinner top left during the submission -->
		                        	<i class="fas fa-spinner opacity-0"></i>

		                            <!-- Button -->
		                            <button class="action-btn submit">Get Notified</button>

		                            <div class="clear"></div>

		                        </div>
		                    </div>
		                </form>

						<!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
						<div class="block-message">
							<div class="message">

								<p class="notify-valid"></p>

							</div>

						</div>
						
					</div>
				</div>

				<!-- Popup close button -->
				<button class="close-newsletter" data-dialog-close><i class="fas fa-times"></i></button>

			</div>
						
		</div>
	
		<!-- jQuery -->
		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/library/jquery/jquery.js"></script>

		<!-- Bootstrap -->
		<script src="assets/library/bootstrap/js/bootstrap.min.js"></script>

		<!-- Plugins -->
		<script src="assets/library/modernizr/modernizr.custom.js"></script>
		<script src="assets/library/wow/wow.min.js"></script>	
		<script src="assets/library/plugin/jquery.plugin.min.js"></script>
		<script src="assets/library/animatedheadline/animated.headline.js"></script>
		<script src="assets/library/velocity/velocity.min.js"></script> 
		<script src="assets/library/velocity/velocity.ui.min.js"></script> 
		<script src="assets/library/fliptimer/jquery.fliptimer.js"></script>
		<script src="assets/library/notifyme/notifyme.js"></script>
		<script src="assets/library/classie/classie.js"></script>
		<script src="assets/library/dialogfx/dialogfx.js"></script>
		<script src="assets/library/mcustomscrollbar/jquery.mCustomScrollbar.js"></script>
		<script src="assets/library/vegas/vegas.min.js"></script>
		<script src="assets/library/ytplayer/jquery.mb.ytplayer.min.js"></script>
        
		<script>
            window.initMap = function() {};
        </script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIhESdAs9Vxn7XUFzDd50mcWCy67Upz9E&amp;callback=initMap"></script>

		<!-- Star wars effect -->
		<script src="assets/library/starfield/starfield.js"></script>
		
		<!-- Main -->
		<script src="assets/js/main.js"></script>

		<!-- Settings (Remove it on your site) -->
		<script src="assets/library/settings/jquery.cookies.min.js"></script>
		<script src="assets/library/settings/settings.js"></script>
        
     </body>
</html>