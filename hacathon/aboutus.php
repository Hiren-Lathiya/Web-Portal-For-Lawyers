<!DOCTYPE html>
<!-- saved from url=(0048)http://themereact.herokuapp.com/3.0/aboutus.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <title>Lawyer Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="http://themereact.herokuapp.com/3.0/images/favicon.ico">

  <!-- stylesheets -->
  <link rel="stylesheet" type="text/css" href="./aboutus_files/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./aboutus_files/theme.min.css">

  <!-- javascript -->
  <style type="text/css">
  .rox{
    height: 35px;
    width: 35px;
    
  }
</style>
  <script src="./aboutus_files/theme.min.js.download"></script>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body cz-shortcut-listen="true">
  <div class="navbar navbar-dark navbar-expand-lg" role="banner">
    <div class="container">
      <a class="navbar-brand" href="homepage.php">
        <img src="./aboutus_files/logo-light.png" class="mr-2 rox rounded img-fluid">
        Lawyer Portal
      </a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse">
        <ul class="navbar-nav">
          
          <li class="nav-item dropdown">
            <a href="homepage.php" class="nav-link" >
              Home
              <i class="ion-chevron-down"></i>
            </a>
           
          </li>


           <li class="nav-item dropdown">
            <a href="signin.php" class="nav-link" >
              Sign In
              <i class="ion-chevron-down"></i>
            </a>
           
          </li>

           <li class="nav-item dropdown">
            <a href="contactus.php" class="nav-link dropdown-toggle" >
              Contact Us
              <i class="ion-chevron-down"></i>
            </a>
           
          </li>
           <li class="nav-item dropdown">
            <a href="aboutus.php" class="nav-link dropdown-toggle" >
              About us
              <i class="ion-chevron-down"></i>
            </a>
           
          </li>
          </ul>
      </div>
    </div>
  </div>

  <div class="about-us-slider">
    <div class="container">
      <div class="header">
        <h3>About Lawyer Portal</h3>
        <p>
          The best web portal for lawyer.In our website we provide  every feature which is helpfull for lawyers,so no need to manage files. </p>
        </p>
      </div>
      <div class="flexslider">
        <ul class="slides">
          <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
            <img src="./aboutus_files/office2.png" alt="office2" draggable="false">
          </li>
          <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
            <img src="./aboutus_files/office1.png" alt="office1" draggable="false">
          </li>
          <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
            <img src="./aboutus_files/office3.png" alt="office3" draggable="false">
          </li>
        </ul>
      <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol></div>
    </div>
  </div>

  <div class="about-us-team">
    <div class="container">
      <h1 class="header">We care about our work</h1>
      <div class="row">
        <div class="col-md-6">
          <p>
            we also provide online chat mechanism For easy communication between lawyer and client.
          </p>
          <p>
            You have complete control over the look &amp; feel of your website, we offer the best quality so you take your site up and running in no time.
          </p>
        </div>
        <div class="col-md-6">
          <p>
            Details management:
            we also provide online chat mechanism For easy communication between lawyer and client.
          </p>
         
        </div>
      </div>
    
      <div class="team">
        <div class="team-row d-flex justify-content-around flex-wrap">
          <img src="./aboutus_files/testimonial7.jpg" class="img-fluid" data-toggle="tooltip" title="" alt="testimonial" data-original-title="Eric Smith - CEO">
          <img src="./aboutus_files/testimonial2.jpg" class="img-fluid" data-toggle="tooltip" title="" alt="testimonial" data-original-title="Rachel Dawes - PM">
          <img src="./aboutus_files/testimonial3.jpg" class="img-fluid" data-toggle="tooltip" title="" alt="testimonial" data-original-title="Henry Hill - Developer">
          <img src="./aboutus_files/testimonial4.jpg" class="img-fluid" data-toggle="tooltip" title="" alt="testimonial" data-original-title="Ana Rich - Designer">
          <img src="./aboutus_files/testimonial7.jpg" class="img-fluid" data-toggle="tooltip" title="" alt="testimonial" data-original-title="Jessica Welch - Designer">
          <img src="./aboutus_files/testimonial8.jpg" class="img-fluid" data-toggle="tooltip" title="" alt="testimonial" data-original-title="Charly - iOS Developer">
        </div>

    </div>
  </div>

  
      <div class="credits">
        <p>Copyright © 2020.</p>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {
      $('.flexslider').flexslider({
        directionNav: false,
        slideshowSpeed: 4000
      });
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</body></html>