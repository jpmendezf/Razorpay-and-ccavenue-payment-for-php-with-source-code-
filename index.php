<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Mounish | Online Payment</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/favivon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>
		
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
    	 .btn-pmry {
    color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #0088cc;
    border-color: #0088cc #0088cc #006699;
    margin-bottom: 25px !important

}
    </style>
	</head>
	<body>

		<div class="body">
	
                   

                        <div class="featured-boxes">
                            <div class="col-sm-6 col-md-6 col-lg-6 ">
                                
                                    <div class="featured-box featured-box-primary align-left mt-xlg" >
                                        <div class="box-content">
												<h4 class="heading-primary text-uppercase mb-md">Pay for Faveo products & services here</h4>
												<h4 class="heading-primary mb-md">Razorpay</h4>
												<form id="checkout-selection" method="POST" >
													<!-- <div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Name</label> <a style="color:red;">*</a>

																<input type="text"  name="name"  class="form-control input-lg" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Phone</label> 
																<input type="text" name="contact" value="" class="form-control input-lg" >
															</div>
														</div>
													</div> -->
													<!-- <div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Image</label> 
																<input type="file"  name="image" value="" class="form-control input-lg">
															</div>
														</div>
													</div> -->
													<div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Cardholder Name</label> <a style="color:red;">*</a> 
																<input type="text"  name="name" value="" class="form-control input-lg" required>

															</div>
														</div>
													</div>

													 <div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Address</label> 
																<textarea  name="address" class="form-control" rows="3"  data-plugin-textarea-autosize ></textarea>

															</div>
														</div>
													</div>
													 <!-- <div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Message</label>
																<textarea class="form-control" rows="3"  name="description" data-plugin-textarea-autosize ></textarea>

															</div>
														</div>
													</div> -->
													<!-- <div class="row">
														<div class="form-group">
															<div class="col-md-12">
																<label>Email</label>

																<input type="text"  name="email" value="" class="form-control input-lg" required>
															</div>
														</div>
													</div> -->
                                                    
                                                   
              
                                                   
                                                    <div class="row">
														<div class="form-group">
															<div class="col-md-12">
															<label>Amount</label> <a style="color:red;">*</a>

																<input type="text" id="amount" name="amount"  class="form-control input-lg" required>
															</div>
														</div>
													</div>
                                                     <div class="row">
														<div class="form-group">
															<div class="col-md-12">
															<label>Currency</label> <a style="color:red;">*</a>

																<select class="form-control input-lg mb-md"  name="currency">
													<option value="INR">INR</option>
													<option value="USD">USD</option>
													
												</select>
															</div>
														</div>
													</div>
                                                      
                                                     <!--  <input type="radio" name="checkout" value="automatic">Pay With RazorPay -->
                                                     <br><br>
							        <input type="checkbox" name="checkout"  value="orders" >&nbsp Pay with Razorpay<br>
							        <input type="submit" class="pull-right btn-pmry" value="Submit">
														
                                                    
													</form>

                       


							             

									</div>
								</div>
								</div>
								</div>
						   
						</div>
							

							</div>
						
					

				</div>

			
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger hidden" id="newsletterError"></div>
			
								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options='{"username": "", "count": 2}'>
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Century Paradise, D302, 115/3, Tejaswini Nagar, Dodda Kammanahalli, Bannerghatta Road, Bangalore 560 076, Karnataka, India</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> +91 80 3075 2618</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:support@ladybirdweb.com">support@ladybirdweb.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="https://www.facebook.com/faveohelpdesk" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="https://twitter.com/faveohelpdesk" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="https://www.linkedin.com/groups/8429668" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							
							<div class="col-md-7">
								<p>Copyright © 2016. Ladybird Web Solution Pvt Ltd. All Rights Reserved. Powered by <a href="http://www.ladybirdweb.com" target="_blank"><img src="img/Ladybird1.png" alt="Ladybird" /></a></p>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.stellar/jquery.stellar.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

        
	        <script>
	            $("#frmSignIn").submit(function(e){
	                var input = $("#frmSignIn :input[name='g-recaptcha-response']"); 
	                if(input.val() == null || input.val()==""){
	                    $('.robot-verification').empty()
	                    $('.robot-verification').append("<p style='color:red'>Robot verification failed, please try again.</p>")
	                    e.preventDefault();
	                }
	                else{
	                    $('.robot-verification').empty()
	                }
	                
	            })
	        </script>
	         <script>
        jQuery(document).ready(function($) 
        {
            var form = $('#checkout-selection');
            var radio = $('input[name="checkout"]');
            var choice = '';

            radio.change(function(e) 
            {
                choice = this.value;
                if (choice === 'orders') 
                {
                    form.attr('action', 'pay.php?checkout=manual');
                } 
                else 
                {
                    form.attr('action', 'pay.php?checkout=automatic');
                }
            });
        });
    </script>
	</body>
</html>
