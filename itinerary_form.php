<?php
  ob_start();
  session_start();
  if( isset($_SESSION['user'])!="" ){
    header("Location: home.php");
  }
  include_once 'dbconnect.php';

 if ( isset($_POST['btn-signup']) ) {
    
    // clean user inputs to prevent sql injections
    $city = trim($_POST['city']);
    $places = trim($_POST['places']);
    
    if( !$error ) {
      
      $query = "INSERT INTO city (city,places) VALUES('$city','$places')";
      $res = mysql_query($query);
        
      if ($res) {
        $errTyp = "success";
        $errMSG = "Successfully registered, you may login now";
      } else {
        $errTyp = "danger";
        $errMSG = "Something went wrong, try again later..."; 
      }    
    }  
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Itinerary form details!
	</title>
	<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <style type="text/css">
		.card{
			margin: 100px;
			z-index: 10;
		}
		.footer-social{
			width: 3.65%;
			margin: 0.67%;

		}
		body{
			background-color: #ffeab7;
		}
		nav{
			background-color: burlywood;
		}
		.page-footer{
			background-color: burlywood;
		}
		.header{
			color: #cbb887;
			margin: 100px;
		}
		.modal-overlay{
			background:white;
		}
		.modal{
			opacity: 0.5;
		}
		.brand-logo{
			margin-left: 20px;
		}

       

	</style>
</head>
<body>
<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="itinerary.html">Customize Itinerary</a></li>
          <li><a href="#contact">Contact Us</a></li>

        </ul>
      </nav>
<div class="col s12 m7">
    <center><h2 class="header">Day 1</h2></center>
    <div class="card horizontal">
      <div class="card-image">
        <img src="images/card-background-1.jpg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          	<div class="row">
			    <form class="col s12" method="post" action="thankyou.html">
			       <div class="input-field col s12" style="margin: 25px;">
				    <select required="true">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="Mysuru">Mysuru </option>
				   
				    </select>
				    <label>City</label>
				  </div>
				  <div class="input-field col s12" style="margin: 25px;"">
				    <select multiple required="true">
				      <option value=""  disabled selected>Choose your option</option>
				      <option value="MysuruMahal">Mysuru Mahal</option>
				      <option value="chatemple">Cha Mundeshwari temple</option>
				      <option value="garden">Brindabans Garden</option>
				    </select>
				    <label>Places to visit</label>
				  </div>
				  <br><br><br><br>
				  <center><button class="waves-effect waves-light btn modal-trigger" type="submit" name="action">Submit
				    <i class="material-icons right">send</i></button></center>

			   </form>
			</div>

      
        </div>
      </div>
    </div>
  </div>
  
  

    



  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         

          
          <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

        <script type="text/javascript">
        	 $('select').material_select('destroy');
	         $(document).ready(function() {
		     $('select').material_select();
		     });
        </script>
</body>
</html>