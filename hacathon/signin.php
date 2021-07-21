<!DOCTYPE html>
<!-- saved from url=(0047)http://themereact.herokuapp.com/3.0/signup.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <title>Lawyer Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="http://themereact.herokuapp.com/3.0/images/favicon.ico">

  <!-- stylesheets -->
  <link rel="stylesheet" type="text/css" href="./signin_files/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./signin_files/theme.min.css">

  <!-- javascript -->
  <style type="text/css">
  .rox{
    height: 35px;
    width: 35px;
    
  }
</style>
  <script src="./signin_files/theme.min.js.download"></script>

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body class="session-page" cz-shortcut-listen="true">
  <div class="container">
    <div class="header">
      <a href="homepage.php" class="logo">
        <img src="./signin_files/logo-dark.png" class="mr-2 mb-1 rox rounded img-fluid">
        Lawyer Portal
      </a>
     
    </div>

    <div class="wrapper">
      <div class="formy">
        <form role="form" action="checklogin.php" method="POST">
         
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" >
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="pass" class="form-control" >
          </div>
         
          <div class="text-center mt-5">
            <input type="submit" name="submit" class="submit btn-block btn-shadow btn-shadow-info" value="Sign In">
          </div>
        </form>
      </div>
    </div>
   
  </div>

</body></html>