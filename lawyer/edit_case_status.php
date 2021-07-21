<?php

	include "connection.php";
	


include "header.php";
if(isset($_GET['id']))
       {
      $cstatus_id=$_GET['id']."";

    
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


        $query=mysqli_query($con,"SELECT * FROM case_status WHERE s_id='$cstatus_id'");
         $value = mysqli_fetch_array($query);
         $ldate 	= $value['ldate'];
         $stage 	= $value['stage'];
         $courtno		= $value['courtno'];
         $ca_id = $value['ca_id'];
}
	
		
?>
<?php
	
	if(isset($_POST['submit']))
	{
		
		
			 $ldate1  = $_POST['ldate'];
         $stage1   = $_POST['stage'];
         $courtno1   = $_POST['courtno'];
	
			
			$updated = mysqli_query($con,"UPDATE case_status SET courtno = '$courtno1', ldate ='$ldate1' , stage='$stage1' WHERE s_id='$cstatus_id'");
			
			
			if($updated)
			{
        echo "<script>window.location.href='case_status.php?id=$ca_id'</script>";
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
        Edit Case Status
        
        <small>Lawyer Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Edit Case Status</li>
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
                  <label>Latest Hearing date</label>
                 <input type="date" name="ldate" value="<?php echo $ldate; ?>" class="form-control" required/>
                </div>
              <div class="form-group">
                  <label>Stage of Case</label>
                  <textarea class="form-control" name="stage" rows="3" required ><?php echo $stage; ?></textarea>
        
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