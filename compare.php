<!DOCTYPE html>
<html>

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <title>TeckCheck</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="skin/default.css">


</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonym
<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
      <div class="navbar-header">	
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      	  <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">
		
          <a href="index.php"><img data-0="width:155px;" data-andown="fadeIn" data-animation="animation" data-300=" width:120px;" src="img/logo.png" alt=""></a>
		 
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li ><a href="index.php">Home</a></li>
		   <li class="active"><a href="compare.php">Compare</a></li>
          <li><a href="#section-contact">Contact</a></li>
		 
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section id="intro">
    <div class="intro-content">
      <h2>Welcome to TeckCheck</h2>
      <h3>The best site for technology comparison</h3>
      <div>
      </div>
    </div>
  </section>
  
  <div class="container">
   
<br>
<br>
<br>
<br>
   </h3>
   <div class="row">
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="img/digital camera.jpg" alt="Card image cap">
            <div class="card-body">
			<br>
			<br>
               <h5 class="card-title border-bottom pb-3">Cameras</a></h5>
               <p class="card-text">View a wide range of digital cameras and compare them to see what you like most.</p>
			   <br>
               <a href="digitalcameras.php" class="btn btn-sm btn-info float-right">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img class="card-img-top" src="img/smartphone.jpg" alt="Card image cap">
			
            <div class="card-body">
			<br>
			<br>
               <h5 class="card-title border-bottom pb-3">Smartphones</h5>
               <p class="card-text">View more on our expert analysis of some of the best phones out there today.</p>
			   <br>
               <a href="Smartphones.php" class="btn btn-sm btn-info float-right">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card bg-light">
            <img class="card-img-top" src="img/laptop.jpg" alt="Card image cap">
            <div class="card-body">
			<br>
			<br>
               <h5 class="card-title border-bottom pb-3">Laptops</h5>
               <p class="card-text">Click to see more about the lpatop range that we cover so that you can find the perfect one for you.</p>
			   <br>
               <a href="Laptops.php" class="btn btn-sm btn-info float-right">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </div>
   <hr>
  
</div>
  
<br>
<br>
<br>
<br>
<br>
<br>
  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
            <p>If you are having any ambiguities, feel free to leave a query below.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" class="contactForm">

              <div class="field your-name form-group">
                <input type="text" name="name" placeholder="Your Name" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="field your-email form-group">
                <input type="text" name="email" placeholder="Your Email" class="cform-text" size="40" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
              <div class="field subject form-group">
                <input type="text" name="subject" placeholder="Subject" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validation"></div>
              </div>

              <div class="field message form-group">
                <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validation"></div>
              </div>

              <div class="send-btn">
                <input type="submit" value="SEND MESSAGE" class="btn btn-theme">
              </div>

            </form>
          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row align-center mar-bot20">
        <ul class="footer-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="https://learnonline.gmit.ie/user/profile.php">Get in touch</a></li>
        </ul>
      </div>
      <div class="row align-center copyright">
   
      </div>

        -->
        Designed by <a href="https://learnonline.gmit.ie/user/profile.php">Dylan Jacques</a>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <!-- Javascript Library Files -->
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.localScroll.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
