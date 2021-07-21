<?php
include "connection.php";
include "header1.php";
$cid='';
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Case Status
        <small>Admin panel</small>
      </h1>
	  
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Case Status</li>
      </ol>
	  
    </section>
	

    <!-- Main content -->
    <section class="content">
	
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
		
         
<?php

		$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];
					
		if(isset($_GET['id']))
		   {
			$cid=$_GET['id']."";
			
		
		   }
?>

</div>
</div>


	
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
     
            <!-- /.box-header -->
         <div class="row">
	 <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
		<h3 class="box-title"><b>Case Status</b></h3>

              
            </div>
	<div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">

                <tr> 
					<th>First Hearing Date </th>
					
					<td> <?php $qry10=mysqli_query($con,"SELECT * FROM hearing  WHERE ca_id='$cid' ORDER BY h_id ASC LIMIT 1");
								$res10=mysqli_fetch_array($qry10);
								
								echo $res10['hdate'];
								
								?></td>	
								<td></td>
				</tr>
				
				<tr> 
					<th>Last Hearing Date </th>
					
					<td> <?php $qry11=mysqli_query($con,"SELECT * FROM case_status  WHERE ca_id='$cid' ORDER BY ldate DESC LIMIT 1");
								$res11=mysqli_fetch_array($qry11);
								
								echo $res11['ldate'];
								
								?></td>	
								<td></td>
				</tr>
				
				<tr> 
					<th>Stage of Case</th>
					
					<td> <?php $qry12=mysqli_query($con,"SELECT * FROM case_status  WHERE ca_id='$cid' ORDER BY s_id DESC LIMIT 1");
								$res12=mysqli_fetch_array($qry12);
								
								echo $res12['stage'];
								
								?></td>	
								<td></td>
				</tr>
				
				<tr> 
					<th>Court No and Judge </th>
					
					<td> <?php $qry11=mysqli_query($con,"SELECT * FROM case_status  WHERE ca_id='$cid' ORDER BY ldate DESC LIMIT 1");
								$res11=mysqli_fetch_array($qry11);
								
								echo $res11['courtno'];
								
								?></td>	
								<td></td>
				</tr>
				
				
				<!-- <tr> 
					<th> </th> 
					
					<td> <a href="edit.php" class="btn btn-success btn-xs">Edit</a></td>
<td> </td>					
				</tr> -->
			</table>
		</div>
		</div>
<html>

