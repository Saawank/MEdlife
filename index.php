<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MedLife</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php
         require('dbconnect.php');
         require('appointment.php');

      ?> 
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><i class="flaticon-pharmacy"></i><span>Med</span>Life</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="Ayurveda.html" class="nav-link">Ayurveda</a></li>
          <li class="nav-item"><a href="Hospitals.html" class="nav-link">Hospitals</a></li>
          <li class="nav-item"><a href="Campaign.html" class="nav-link">Campaign</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="vhome.html" class="nav-link">Login</a></li>
          <li class="nav-item cta"><a href="app_store.php" class="nav-link" data-toggle="modal" data-target="#modalAppointment"><span>WELCOME</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">Health Is Wealth</h1>
            <p>We care about your health Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
          </div>
        </div>
      </div>
    </div>

    

    <section class="ftco-section-2 img" style="background-image: url(2.jpg);">
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-12">
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Laboratory Services</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>General Treatment</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Emergency Service</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>24/7 Help &amp; Support</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Experienced Doctors</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-2">
	            <div class="flipper">
	              <div class="front" style="background-image: url(images/doctor-1.jpg);">
	                <div class="box">
	                  <h2>Aldin Powell</h2>
	                  <p>Neurologist</p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <div class="img" style="background-image: url(images/doctor-1.jpg);"></div>
	                  </div>
	                  <div class="name align-self-center">Aldin Powell <span class="position">Neurologist</span></div>
	                </div>
	              </div>
	            </div>
	          </div> <!-- .flip-container -->
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-2">
	            <div class="flipper">
	              <div class="front" style="background-image: url(images/doctor-2.jpg);">
	                <div class="box">
	                  <h2>Aldin Powell</h2>
	                  <p>Pediatrician</p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <div class="img" style="background-image: url(images/doctor-2.jpg);"></div>
	                  </div>
	                  <div class="name align-self-center">Aldin Powell <span class="position">Pediatrician</span></div>
	                </div>
	              </div>
	            </div>
	          </div> <!-- .flip-container -->
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-2">
	            <div class="flipper">
	              <div class="front" style="background-image: url(images/doctor-3.jpg);">
	                <div class="box">
	                  <h2>Aldin Powell</h2>
	                  <p>Ophthalmologist</p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <div class="img" style="background-image: url(images/doctor-3.jpg);"></div>
	                  </div>
	                  <div class="name align-self-center">Aldin Powell <span class="position">Ophthalmologist</span></div>
	                </div>
	              </div>
	            </div>
	          </div> <!-- .flip-container -->
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-2">
	            <div class="flipper">
	              <div class="front" style="background-image: url(images/doctor-4.jpg);">
	                <div class="box">
	                  <h2>Aldin Powell</h2>
	                  <p>Pulmonologist</p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <div class="img" style="background-image: url(images/doctor-4.jpg);"></div>
	                  </div>
	                  <div class="name align-self-center">Aldin Powell <span class="position">Pulmonologist</span></div>
	                </div>
	              </div>
	            </div>
	          </div> <!-- .flip-container -->
	        </div>
        </div>
        <div class="row">
        	<div class="col-md-9 ftco-animate">
        		<h4>We are well experienced doctors</h4>
        		<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
            <span class="subheading">Far far away, behind the word mountains, far from the countries</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="60">0</strong>
		                <span>Hospital</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Clinics</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="200">0</strong>
		                <span>Reviews</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>



    
		
		

      

    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Med Life</h2>
              <p>An open source platform where all important information on healthcare and diet is provided by the  best Doctors </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                
                <li class="ftco-animate"><a href="https://www.facebook.com/MedLife-398693950945222/?modal=admin_todo_tour"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/med_life_20/?hl=en"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="index.html" class="py-2 d-block">Appointments</a></li>
                <li><a href="#tips " class="py-2 d-block">health Tips</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.html" class="py-2 d-block">Home</a></li>
                <li><a href="Ayurveda.html" class="py-2 d-block">Ayurveda</a></li>
                <li><a href="Hospitals.html" class="py-2 d-block">Hospitals</a></li>
                <li><a href="Campaign.html" class="py-2 d-block">Campaign</a></li>
                
                <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203, 7 Hills,Bandra ,Mumbai  </span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 88995557</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">medlife@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  made with <i class="icon-heart" aria-hidden="true"></i> by <a href="about.html" target="_blank">Web Bros</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>