<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LAWYER | Add Cases</title>
  <!-- Tell the browser to be responsive to screen width -->
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
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

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="photos/favpic.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Zinal Thakkar</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="photos/favpic.jpg" class="img-circle" alt="User Image">

                <p>
                  Zinal Thakkar
                  <small>23-07-2000</small>
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
          <img src="photos/favpic.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Zinal Thakkar</p>
          </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="dashboard.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
         
        </li>
       
       
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>All Cases</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_cases.html"><i class="fa fa-circle-o"></i>Add Cases</a></li>
            <li><a href="open_cases.html"><i class="fa fa-circle-o"></i>Open Cases</a></li>
            <li><a href="draft_cases.html"><i class="fa fa-circle-o"></i>Draft Cases</a></li>
            <li><a href="closed_cases.html"><i class="fa fa-circle-o"></i>Closed Cases</a></li>
           
          </ul>
        </li>
       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Cases
        <small>Lawyer Panel Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Cases</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                
                  <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Court</label>
                          <select class="form-control" name="user_type"  width="476" style="width: 476px">
                            <option> Select Court </option>
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                          </select>
                      </div>
         
                      <div class="col-xs-6">
                        <label>Case Number</label>
                          <input type="text" name="case_no" class="form-control" placeholder="Enter case number ..." required />
                     </div>
                  </div>
              </div>

               <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Year</label>
                          <select class="form-control" name="user_type"  width="476" style="width: 476px">
                            <option value="1"> 2019 </option>
                            <option value="2"> 2018 </option>
                            <option value="3"> 2017 </option>
                          </select>
                      </div>
         
                      <div class="col-xs-6">
                        <label>Date Of Filling</label>
                          <input type="date" name="date1" class="form-control" placeholder="MM/DD/YYYY" required />
                          
                     </div>
                  </div>
              </div>

              <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Classification</label>
                          <input type="text" name="classification" class="form-control" placeholder="Enter classification ..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Enter Title ..." required />
                          
                     </div>
                  </div>
              </div>

               <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Description</label>
                         <textarea class="form-control" rows="3" name="Description" placeholder="Enter Description..." required></textarea>
                     </div>
                   </div>
                </div>

                <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Before Hon'ble judges</label>
                          <input type="text" name="judges" class="form-control" placeholder=" ..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Refferred By</label>
                          <input type="text" name="Refferred_by" class="form-control" placeholder="...." required />
                          
                     </div>
                  </div>
              </div>

               <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Section/Category</label>
                          <input type="text" name="Section" class="form-control" placeholder=" Enter Sections..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Priority</label>
                          <input type="text" name="Priority" class="form-control" placeholder=" Enter Priority...." required />
                          
                     </div>
                  </div>
              </div>

              <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Section/Category</label>
                          <input type="text" name="Section" class="form-control" placeholder=" Enter Sections..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Priority</label>
                          <input type="text" name="Priority" class="form-control" placeholder=" Enter Priority...." required />
                          
                     </div>
                  </div>
              </div>
              <!--<h3>Is the affadavit/vakalath field?</h3>-->
              <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Is the affadavit/vakalath field?</label><br/>
                        <input type="radio" name="gender" value="YES" checked> YES
                         <input type="radio" name="gender" value="NO"> NO
                         <input type="radio" name="gender" value="NOT_APPLICABLE"> NOT APPLICABLE
                     </div>
                  </div>
              </div>

              <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Name</label>
                          <input type="text" name="name1" class="form-control" placeholder=" Enter Name..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Email</label>
                          <input type="email" name="email1" class="form-control" placeholder=" Enter Email...." required />
                          
                     </div>
                  </div>
              </div>

              <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Phone NO</label>
                          <input type="tel" name="phone_no" class="form-control" placeholder=" Enter Phone NO..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Add More</label>
                        <!--  <input type="text" name="Priority" class="form-control" placeholder=" Enter Priority...." required />-->
                          
                     </div>
                  </div>
              </div>

               <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Name</label>
                          <input type="text" name="name1" class="form-control" placeholder=" Enter Name..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Email</label>
                          <input type="email" name="email1" class="form-control" placeholder=" Enter Email...." required />
                          
                     </div>
                  </div>
              </div>

              <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Phone NO</label>
                          <input type="tel" name="phone_no" class="form-control" placeholder=" Enter Phone NO..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Add More</label>
                        <!--  <input type="text" name="Priority" class="form-control" placeholder=" Enter Priority...." required />-->
                          
                     </div>
                  </div>
              </div>

  
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
                 <button type="submit" class="btn btn-primary">CANCEL</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    
  </footer>

  <!-- Control Sidebar -->
   <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<!-- jQuery 3 -->
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
