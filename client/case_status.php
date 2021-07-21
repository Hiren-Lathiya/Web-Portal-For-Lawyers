<?php
include "connection.php";
include "header.php";
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
		
        
		  
            
            <!-- /.box-header -->
           
		
           
<?php

		$log=$_SESSION['log'];
		$idx="SELECT * FROM tbl_login where email ='$log'";
		$ffetch=mysqli_query($con,$idx);
		$data=mysqli_fetch_array($ffetch);
		$idnew=$data['l_id'];
					
		$client="SELECT * FROM tbl_client where l_id ='$idnew'";
		$client1=mysqli_query($con,$client);
		$client2=mysqli_fetch_array($client1);
		$client3=$client2['c_id'];
		

		$case=mysqli_query($con,"SELECT * FROM tbl_case where c_id='$client3'");
		$case2=mysqli_fetch_array($case);
		$case3=$case2['ca_id'];

		$case_status=mysqli_query($con,"SELECT * FROM case_status where ca_id='$case3'");
		$case_status2=mysqli_fetch_array($case_status);
		$case_status3=$case_status2['s_id'];


		
?>





	
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
		
        
		  
            
	<div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">

                <tr> 
					<th>First Hearing Date </th>
					
					<td> <?php $qry10=mysqli_query($con,"SELECT * FROM hearing  WHERE ca_id='$case3' ORDER BY h_id ASC LIMIT 1");
								$res10=mysqli_fetch_array($qry10);
								
								echo $res10['hdate'];
								
								?></td>	
								<td></td>
				</tr>
				
				<tr> 
					<th>Last Hearing Date </th>
					
					<td> <?php $qry11=mysqli_query($con,"SELECT * FROM case_status  WHERE s_id='$case_status3' ORDER BY ldate DESC LIMIT 1");
								$res11=mysqli_fetch_array($qry11);
								
								echo $res11['ldate'];
								
								?></td>	
								<td></td>
				</tr>
				
				<tr> 
					<th>Stage of Case</th>
					
					<td> <?php $qry12=mysqli_query($con,"SELECT * FROM case_status  WHERE s_id='$case_status3' ORDER BY s_id DESC LIMIT 1");
								$res12=mysqli_fetch_array($qry12);
								
								echo $res12['stage'];
								
								?></td>	
								<td></td>
				</tr>
				
				<tr> 
					<th>Court No and Judge </th>
					
					<td> <?php $qry11=mysqli_query($con,"SELECT * FROM case_status  WHERE s_id='$case_status3' ORDER BY ldate DESC LIMIT 1");
								$res11=mysqli_fetch_array($qry11);
								
								echo $res11['courtno'];
								
								?></td>	
								<td></td>
				</tr>
				
		
			</table>
		</div>
		</div>
<html>

