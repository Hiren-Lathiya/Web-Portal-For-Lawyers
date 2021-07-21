<!DOCTYPE html>
<html>
<?php include "connection.php";

		?>
<head>

<body>
<?php include "header1.php";?>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Details
        <small>Lawyer panel</small>
      </h1>
	  
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Opponent Details</li>
      </ol>
	  
    </section>


    <!-- Main content -->
    <section class="content">
	
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
<?php
if(isset($_GET['id']))
		   {
			$id=$_GET['id']."";
			
		
		   }


?>
			
              <h3 class="box-title"><b>Opponent Detail</b></h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">

                <tr> 
					<th>Opponent Name </th>
					<td> <?php $qry1=mysqli_query($con,"SELECT opp_name FROM tbl_opponent WHERE c_id='$id'");
								$res1=mysqli_fetch_array($qry1);
								echo $res1['opp_name'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Opponent Phone_No </th> 
					<td> <?php $qry2=mysqli_query($con,"SELECT opp_phone_no FROM tbl_opponent WHERE c_id='$id'");
								$res2=mysqli_fetch_array($qry2);
								echo $res2['opp_phone_no'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Opponent Email </th> 
					<td> <?php $qry3=mysqli_query($con,"SELECT opp_email,opp_id FROM tbl_opponent WHERE c_id='$id'");
								$res3=mysqli_fetch_array($qry3);
								echo $res3['opp_email'];
								$get_id= $res3['opp_id'];

								?></td>	
				</tr>
				
				
				<tr> 
					<th> </th> 
					<td> <a href="edit_oponent.php?id=<?php echo  $res3['opp_id'];?>&c_id=<?php echo $id ?>" class="btn btn-success btn-xs">Edit</a></td>	
				</tr>
			</table>
		</div>
	</div>
	</div>
</div>
</section>
<section class="content">
<div class="row">
	    <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
<?php
if(isset($_GET['id']))
		   {
			$id=$_GET['id']."";
			
		
		   }


?>
			
              <h3 class="box-title"><b>Opponent Advocate Detail</b></h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">

                <tr> 
					<th>Opponent Advocate Name </th>
					<td> <?php $qry1=mysqli_query($con,"SELECT oadv_name FROM tbl_opponent WHERE c_id='$id'");
								$res1=mysqli_fetch_array($qry1);
								echo $res1['oadv_name'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Opponent Advocate Phone_No </th> 
					<td> <?php $qry2=mysqli_query($con,"SELECT oadv_phone FROM tbl_opponent WHERE c_id='$id'");
								$res2=mysqli_fetch_array($qry2);
								echo $res2['oadv_phone'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Opponent Advocate Email </th> 
					<td> <?php $qry3=mysqli_query($con,"SELECT oadv_email,opp_id FROM tbl_opponent WHERE c_id='$id'");
								$res3=mysqli_fetch_array($qry3);
								echo $res3['oadv_email'];
								$get_id= $res3['opp_id'];
								?></td>	
				</tr>
				
				
				<tr> 
					<th> </th> 
					<td> <a href="edit_oponent_advocate.php?id=<?php echo  $res3['opp_id'];?>&c_id=<?php echo $id ?>" class="btn btn-success btn-xs">Edit</a></td>	
				</tr>
			</table>
		</div>
	</div>
	</div>
</div>
	
	</section>
</div>