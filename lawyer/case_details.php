<!DOCTYPE html>
<html>
<?php include "connection.php";

		?>
<head>
<style>



#button {
width:60px;
height:35px;
border-radius:3px;
background-color:#4CAF50;
color:#fff;
font-family:'Raleway',sans-serif;
font-size:18px;
cursor:pointer
}
</style>
 
<body>
<?php include "header1.php";
$cid='';
?>

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
        <li class="active">Open Cases</li>
		<li class="active">Case Details</li>
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
			$cid=$_GET['id']."";
			
			
		
		   }


?>
			
              <h3 class="box-title"><b>Case Details</b></h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">

                <tr> 
					<th>Case Type </th>
					<td> <?php $qry1=mysqli_query($con,"SELECT casetype FROM tbl_case WHERE ca_id='$cid'");
								$res1=mysqli_fetch_array($qry1);
								echo $res1['casetype'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Filling Number </th> 
					<td> <?php $qry2=mysqli_query($con,"SELECT fillno FROM tbl_case WHERE ca_id='$cid'");
								$res2=mysqli_fetch_array($qry2);
								echo $res2['fillno'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Filling Date </th> 
					<td> <?php $qry3=mysqli_query($con,"SELECT filldate FROM tbl_case WHERE ca_id='$cid'");
								$res3=mysqli_fetch_array($qry3);
								echo $res3['filldate'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Registration Number </th> 
					<td> <?php $qry4=mysqli_query($con,"SELECT regno FROM tbl_case WHERE ca_id='$cid'");
								$res4=mysqli_fetch_array($qry4);
								echo $res4['regno'];
								
								?></td>	
				</tr>
				<tr> 
					<th>CNR </th> 
					<td> <?php $qry5=mysqli_query($con,"SELECT cnr FROM tbl_case WHERE ca_id='$cid'");
								$res5=mysqli_fetch_array($qry5);
								echo $res5['cnr'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Court </th> 
					<td> <?php $qry6=mysqli_query($con,"SELECT court FROM tbl_case WHERE ca_id='$cid'");
								$res6=mysqli_fetch_array($qry6);
								echo $res6['court'];
								
								?></td>	
				</tr>
				<tr> 
					<th>Appering Model </th> 
					<td> <?php $qry7=mysqli_query($con,"SELECT model FROM tbl_case WHERE ca_id='$cid'");
								$res7=mysqli_fetch_array($qry7);
								echo $res7['model'];
								
								?></td>	
				</tr>
				
				<tr> 
					<th> </th> 
					<td> <a href="editcasedetails.php?id=<?php echo $cid; ?>" class="btn btn-success btn-xs">Edit</a></td>	
				</tr>
			</table>
		</div>
	</div>
	
	<div class="row">
	 <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
		<h3 class="box-title"><b>Acts</b></h3>

              
            </div>
	<div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">

                <tr> 
					<th width="635" height="20">Under Sections </th>
					 
					
					<td> <?php $qry8=mysqli_query($con,"SELECT act FROM tbl_case WHERE ca_id='$cid'");
								$res8=mysqli_fetch_array($qry8);
								
								echo $res8['act'];
								
								?></td>	
								<td></td>
				</tr>
				
				
				<tr> 
					<th> </th> 
					
					<td> <a href="editsections.php?id=<?php echo $cid; ?>" class="btn btn-success btn-xs">Edit</a></td>
<td> </td>					
				</tr>
			</table>
		</div>
		</div>
		<?php
			$qry9=mysqli_query($con,"SELECT police FROM tbl_case WHERE ca_id='$cid' && year!='0'");
								$res9=mysqli_fetch_array($qry9);
								if($res9)
								{
								

		?>
	
	<div class="row">
	 <div class="col-xs-12">
		
          <div class="box">
		  
            <div class="box-header">
		<h3 class="box-title"><b>FIR Details</b></h3>

              
            </div>
	<div class="box-body table-responsive no-padding">
			
              <table class="table table-hover">

                <tr> 
					<th width="260" height="20">Police Station </th>
					<td> </td>
					<td></td>
					<td></td>
					<td></td>
					<td> <?php 
								echo $res9['police'];
								
								?></td>	
				</tr>
				 <tr> 
					<th>FIR No </th>
					<td> </td>
					<td></td>
					<td></td>
					<td></td>
					<td> <?php $qry10=mysqli_query($con,"SELECT firno FROM tbl_case WHERE ca_id='$cid'");
								$res10=mysqli_fetch_array($qry10);
								echo $res10['firno'];
								
								?></td>	
				</tr>
				 <tr> 
					<th>Year </th>
					<td> </td>
					<td></td>
					<td></td>
					<td></td>
					<td> <?php $qry11=mysqli_query($con,"SELECT year FROM tbl_case WHERE ca_id='$cid'");
								$res11=mysqli_fetch_array($qry11);
								echo $res11['year'];
								
								?></td>	
				</tr>
				
				
				<tr> 
					<th> </th> 
					<td> </td>
					<td></td>
					<td></td>
					<td></td>
					<td> <a href="editfir.php?id=<?php echo $cid; ?>" class="btn btn-success btn-xs">Edit</a></td>	
				</tr>
			</table>
		</div>
		</div>
		<?php } ?>
		
