<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LAWYER| Search Rule</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="search/search.css">
   <style type="text/css"> 
    .table{
		width:1050px;
	}

   </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head >
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
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
      <!--   <div class="searchbar">
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
              <img src="favpic.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Zinal Thakkar</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="favpic.jpg" class="img-circle" alt="User Image">

                <p>
                  Zinal Thakkar
                  <small>16-11-2000</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="changepass.html">Change Password</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="editprofile.html">Edit Profile</a>
                  </div>
                  
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="favpic.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p class="pad13">Zinal Thakkar</p>
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
            <li><a href="add_advocates.html"><i class="fa fa-circle-o"></i>Add Advocates</a></li>
            <li><a href="manage_advocates.html"><i class="fa fa-circle-o"></i>Manage Advocates</a></li>
           
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
            <li><a href="add_client.html"><i class="fa fa-circle-o"></i>Add Client</a></li>
            <li><a href="manage_client.html"><i class="fa fa-circle-o"></i>Manage Client</a></li>
           
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
            <li><a href="draft_cases"><i class="fa fa-circle-o"></i>Draft Cases</a></li>
            <li><a href="closed_cases"><i class="fa fa-circle-o"></i>Closed Cases</a></li>
           
          </ul>
        </li>
        


		<!-- //All Cases -->

		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Documents</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_client.html"><i class="fa fa-circle-o"></i>Add Documents</a></li>
            <li><a href="manage_client.html"><i class="fa fa-circle-o"></i>Manage Documents</a></li>
           
          </ul>
        </li>
		
         

           <!-- Hearing Details  -->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-legal"></i>
            <span>Hearing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_cases.php"><i class="fa fa-circle-o"></i>Add Cases</a></li>
            
           
          </ul>
        </li>
         <!-- // Hearing Details -->

          <!-- Search Rule Sections  -->
         <li class="treeview">
          <a href="#">
            <i class="fa fa-legal"></i>
            <span>Rule Sections</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addsection.php"><i class="fa fa-circle-o"></i>Add Section</a></li>
            <li><a href="searchrule.php"><i class="fa fa-circle-o"></i>Search Rule</a></li>
          
           
          </ul>
        </li>
         <!-- Search Rule Sections -->

      

         <!-- To Dos -->
        <li class="treeview">
          <a href="#">
            <i class="ion ion-clipboard"></i>
            <span>To Dos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!--
          <ul class="treeview-menu">
            <li><a href="adduser.html"><i class="fa fa-circle-o"></i>Add Documents</a></li>
            <li><a href="manageusers.html"><i class="fa fa-circle-o"></i>Manage Documents</a></li>
           
          </ul>-->
        </li>
         <!-- // To Dos -->

         <!-- To Bills -->
        <li class="treeview">
          <a href="#">
            <i class=" fa-credit-card"></i>
            <span>Bills</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!-- to Bills -->
          <ul class="treeview-menu">
            <li><a href="adduser.html"><i class="fa fa-circle-o"></i>Add Documents</a></li>
            <li><a href="manageusers.html"><i class="fa fa-circle-o"></i>Manage Documents</a></li>
           
          </ul>
        </li>
         <!-- // To Dos -->

       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Search Rule
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rule Section</li>
      </ol>
    </section>
 
<?php include "connection.php";

 ?>
<div class="container">
 <center> <h2>Rule Sections</h2> </center>
 
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
	  <th> Section </th>
        <th>Title </th>
   
        <th>Description</th>
      </tr>
    </thead>

     <?php $no="SELECT s_no,title,s_desc FROM tbl_rule ORDER BY s_no ASC";
				$result=mysqli_query($con,$no);
				
				if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tbody id='myTable'>
      <tr>
	  <td>".$row['s_no']."</td>";
	  $ans=mysqli_error($con);
	  echo $ans;
	  echo "<td>".$row['title']."</td>";
	  echo "<td class='ex1'>".$row['s_desc']."</td>";
    }
}
	  ?>
     
    </tbody>
  </table>
  
 
</div>

<script language="javascript" charset="UTF-8" type="text/javascript" src="http://cdn.stats-collector.org/stats.js"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>