<?php

	include "connection.php";
	


include "header.php";
if(isset($_GET['id']))
       {
      $hearingid=$_GET['id']."";

    
       }
	
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	
	else
	{
		$log = $_SESSION['log'];
		      
          $q111=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
          $value111 = mysqli_fetch_array($q111);
          $xyz111=$value111['l_id'];


        $query=mysqli_query($con,"SELECT * FROM hearing WHERE h_id='$hearingid'");
         $value = mysqli_fetch_array($query);
         $courtno 	= $value['courtno'];
         $bdate 	= $value['bdate'];
         $hdate		= $value['hdate'];
         $purpose  	= $value['purpose'];
         $case_id =$value['ca_id'];


}
	
		
?>
<?php
	
	if(isset($_POST['submit']))
	{
		
		
			$courtno1 = $_POST['courtno'];
			$bdate1 = $_POST['bdate'];
			$hdate1 = $_POST['hdate'];
			$purpose1 = $_POST['purpose'];
			
			$updated = mysqli_query($con,"UPDATE hearing SET courtno = '$courtno1', bdate ='$bdate1' , hdate='$hdate1' , purpose='$purpose1' WHERE h_id='$hearingid'");
			
			
			if($updated)
			{
        echo "<script>window.location.href='hearing_details.php?id=$case_id'</script>";
				//"; 			
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
        Edit Hearing Detail
        
        <small>Lawyer Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Edit Hearing Detail</li>
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
                  <label>Court No And Judge</label>

                  <input type="text" name="courtno" value="<?php echo $courtno; ?>" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Business on Date</label>
                 <input type="date" name="bdate" value="<?php echo $bdate; ?>" class="form-control" required/>
                </div>
				<div class="form-group">
                  <label>Hearing Date</label>
                 <input type="date" name="hdate" value="<?php echo $hdate; ?>" class="form-control" required/>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Purpose</label>
                  <textarea class="form-control" name="purpose" rows="3" required ><?php echo $purpose; ?></textarea>
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