<!DOCTYPE html>
<html>
<head>
  
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head >
<body> <?php  
include "connection.php";
include "header1.php";
 $log=$_SESSION['log'];
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <div class="row">
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><sup style="font-size: 30px">
 <?php
               
                $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE type='2'"));
                echo $count1[0];
                ?>
              </sup></h3>

              <p>Total Lawyers</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><sup style="font-size: 30px">
                <?php
                $count2 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE type='3'"));
                echo $count2[0];
                ?>
</sup>
              </h3>

              <p>Total Clients</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><sup style="font-size: 30px">
                <?php
                $count3= mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ca_id) FROM tbl_case"));
                echo $count3[0];

                ?>
              </sup></h3>

              <p>Total Cases</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><sup style="font-size: 30px">
               <?php
                 $count4= mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ca_id) FROM tbl_case WHERE status='1'"));
                echo $count4[0];

                ?>
              </sup></h3>

              <p>Open Cases</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><sup style="font-size: 30px">
                <?php
                 $count5 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ca_id) FROM tbl_case WHERE status='0'"));
                echo $count5[0];

                ?>
                 
              </sup></h3>

              <p>Close Cases</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
              </div>
        </div>
        <!-- ./col -->
     
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><sup style="font-size: 30px">
                 <?php
                 $count5 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(ca_id) FROM tbl_case WHERE status='0'"));
                echo $count5[0];

                ?>
              </sup></h3>

              <p>Close Cases</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><sup style="font-size: 30px">
                 <?php
                 $count6= mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(document_id) FROM                   document"));
                echo $count6[0];

                ?>
              </sup></h3>

              <p>Total Documents</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div>
        </div>

          
        <!-- ./col -->
        
      
            <!-- /.box-body -->
          
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  

