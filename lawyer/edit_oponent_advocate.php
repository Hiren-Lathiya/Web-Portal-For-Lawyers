<?php

	include "connection.php";
	


include "header1.php";
if(isset($_GET['id']))
       {
      $opp_id=$_GET['id']."";
      
    
       }
       if (isset($_GET['c_id']))
        {
            $client_id = $_GET['c_id'];

   		 }
	
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	
	else
	{
		
		
		 $qry1=mysqli_query($con,"SELECT * FROM tbl_opponent WHERE c_id='$client_id'");
								$res1=mysqli_fetch_array($qry1);
								$oadv_name=$res1['oadv_name'];
								$oadv_phone=$res1['oadv_phone'];
								$oadv_email=$res1['oadv_email'];
								$opp_id=$res1['opp_id'];
								
							
}
	
		
?>
<?php
	
	if(isset($_POST['submit']))
	{
	
		
			$up_name = $_POST['name'];
			$up_email = $_POST['email'];
			$up_phn = $_POST['phn'];
			
			
			$updated = mysqli_query($con,"UPDATE tbl_opponent SET oadv_name='$up_name',oadv_email = '$up_email', oadv_phone ='$up_phn' WHERE opp_id='$opp_id'");
			
			
			if($updated)
			{
				 echo "<script>window.location.href='Client_view.php?id=$client_id'</script>";
			
						
			}
			else
			{
					echo "<font style='color:red'>Error...</font>";
			}
		
		
	}
			
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Opponent Advocate
        
        <small>Lawyer Panel </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Opponent Advocate</li>
      </ol>
    </section>
	
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	  
	  <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">

                  <label>Opponent Name </label>
                  <input type="text" name="name" value="<?php echo $oadv_name; ?>" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Opponent Email</label>
                  <input type="email" name="email" value="<?php echo $oadv_email; ?>" class="form-control" placeholder="Enter Email ..." required />
                </div>
				<div class="form-group">
                  <label>Opponent Phone_No</label>
                  <input type="text" name="phn" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile
number starting with 7 or 8 or 9' value="<?php echo $oadv_phone; ?>" required />
                </div>
				
               
              <div class="box-footer" style="float:right;">
                <button type="submit" name="submit" class="btn btn-primary">Modify</button>
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
  
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
$(document).ready(function () {
$('#datepicker').datepicker({    
    endDate: '+1d',
    autoclose: true
});  });
</script>