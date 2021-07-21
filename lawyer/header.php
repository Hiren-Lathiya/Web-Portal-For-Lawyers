 <?php

include "connection.php";

session_start();
	
	if(!isset($_SESSION['log']))
	{
		header("location:../hacathon/signin.php");
	}
	
	else
	{
		$log = $_SESSION['log'];
		
		$sql = "SELECT l_id FROM tbl_login WHERE email='$log'";
		$result = mysqli_query($con,$sql);
		$value = mysqli_fetch_array($result);
		
		$id = $value['l_id'];
		
		$qry = "SELECT * FROM tbl_register WHERE l_id='$id'";
		$result1 = mysqli_query($con,$qry);
		$value1 = mysqli_fetch_array($result1);
		
		$count = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE type=2 AND active=1"));
    $r_id= $value1['r_id'];
		$n = $value1['name'];
		$i = $value1['img'];
		
	
	}
	?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
	#myDiv {
	border: 2px solid lightgray;
	height:210px;
	width:210px;
	float: left;
	}
	</style>
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LAWYER</b> PANEL</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

        <!-- search -->
        
        <!--<div class="agileits_search">
          <form action="#" method="post">
            <input name="Search" type="search" placeholder="search cases" required="">
            <button type="submit" class="btn btn-default" aria-label="left Align">
              <span class="fa fa-search" aria-hidden="true"> </span>
            </button>
          </form>
        </div>-->

      

  
       <!-- //search -->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
             <div>
      <div>
        <!--<div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search Rule Sections...">
          <a href="#" class="search_icon"><i class="glyphicon glyphicon-search"></i></a>
        </div>-->
      </div>
    </div>
          </li>
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <!-- Messages: style can be found in dropdown.less-->
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $i ; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $n; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $i ; ?>" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="changepass.php">Change Password</a>
                  </div>  
                  <div class="col-xs-6 text-center">
                    <a href="editprofile_lawyer.php?id=<?php echo $id; ?>">Edit Profile</a>
                  </div>
                  
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-left">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $i ; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p class="pad13"> <?php echo $n; ?></p>
          </div>
      </div>
      <!-- search form -->
            
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="dashboard.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
         
        </li>
       
       <!-- Advocates -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Advocates</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_advocates.php"><i class="fa fa-circle-o"></i>Add Advocates</a></li>
            <li><a href="manage_advocate.php"><i class="fa fa-circle-o"></i>Manage Advocates</a></li>
           
          </ul>
        </li>
        <!-- //Advocates -->
        <!-- Client -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Client</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_client.php"><i class="fa fa-circle-o"></i>Add Client</a></li>
             <li><a href="add_opponent.php"><i class="fa fa-circle-o"></i>Add opponent</a></li>
            <li><a href="manageclients.php"><i class="fa fa-circle-o"></i>Manage Client</a></li>
           
          </ul>
        </li>
         <!-- //Client -->
          <!-- All Cases -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-legal"></i>
            <span>All Cases</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_cases.php"><i class="fa fa-circle-o"></i>Add Cases</a></li>
            <li><a href="open_cases.php"><i class="fa fa-circle-o"></i>Open Cases</a></li>
            
            <li><a href="close_cases.php"><i class="fa fa-circle-o"></i>Closed Cases</a></li>
           
          </ul>
        </li>
         <!-- //All Cases -->

          <!-- Cases Documents -->
      

          <!-- Search Rule Sections  -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-legal"></i>
            <span>Sections</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="searchrule.php"><i class="fa fa-circle-o"></i>Search Sections</a></li>
           
           
          </ul>
        </li>
        

       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
