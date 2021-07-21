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
        <small>Lawyer panel</small>
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
		
          <div class="box">
		  
            <div class="box-header">
			
              <h3 class="box-title">Add Case Status</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
 <form method="POST" >			
              <table class="table table-hover">
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
<tr>
                  <th>Sr No</th>
                  <th>Court No and Judge</th>
				  <th>Latest Hearing date</th>
				  
				  <th>Stage of Case</th>
                  <th>Action</th>              
 </tr>
 

 
<tr>
 <td>1 </td>
 <td><input type="text" name="courtno" required ></td>
 <td><input type="date" name="ldate" required ></td>

 <td><textarea rows="1" cols="19" name="stage" required ></textarea>
<td><input type="submit" class="btn btn-success btn-xs" name="add" value="Add"></td>



</tr>				  
</table>
</form>
<?php
	if(isset($_POST["add"]))
	{
		$courtno=$_POST['courtno'];
		$ldate=$_POST['ldate'];

		$stage=$_POST['stage'];
		$qry="INSERT INTO case_status(s_id,courtno,ldate,stage,ca_id)VALUES('','$courtno','$ldate','$stage','$cid')";
		$run=mysqli_query($con,$qry);
		
		if($run)
		{
			echo "<script>alert('Added Succesfully')</script>";
			echo "<script> location.href('case_status.php'); </script>";
		}
		else
		{
			echo "<script>alert('Not Added')</script>";
			echo "<script> location.href('case_status.php'); </script>";
		}
	}
?>
</div>
</div>


	
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
			
              <h3 class="box-title">Case Status</h3>

              
            </div>
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
					<th>Latest Hearing Date </th>
					
					<td> <?php $qry11=mysqli_query($con,"SELECT * FROM case_status  WHERE ca_id='$cid' ORDER BY s_id DESC LIMIT 1");
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
					
					<td> <?php $qry11=mysqli_query($con,"SELECT * FROM case_status  WHERE ca_id='$cid' ORDER BY s_id DESC LIMIT 1");
								$res11=mysqli_fetch_array($qry11);
								
								echo $res11['courtno'];
								
								?></td>	
								<td></td>
				</tr>
				
				
				<tr> 
					<th> </th> 
					
					<!--<td> <a href="edit_case_status.php?id=<?php echo $cid; ?>" class="btn btn-success btn-xs">Edit</a></td>-->
<td> </td>					
				</tr>
			</table>
		</div>
		</div>
<html>

