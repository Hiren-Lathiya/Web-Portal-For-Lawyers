<?php

	include "connection.php";
	


include "header1.php";
if(isset($_GET['ad_id']))
       {
      $a_id1=$_GET['ad_id']."";
      
    
       }
	
	if(!isset($_SESSION['log']))
	{
		header("location:dashboard.php");
	}
	
	else
	{
		
		    $query="SELECT tbl_admin.a_name,tbl_admin.a_add,tbl_login.email,tbl_login.phone,tbl_login.l_id  FROM tbl_admin,tbl_login WHERE tbl_admin.l_id=tbl_login.l_id AND tbl_admin.a_id='$a_id1' ";
          $result2 = mysqli_query($con,$query);
		      $value222 = mysqli_fetch_array($result2);
		 $name= $value222['a_name'];
		
      $email= $value222['email'];
     
       $phone= $value222['phone'];
       
        $address= $value222['a_add'];
       
       
      $l_id=$value222['l_id'];

}
	
		
?>
<?php
	
	if(isset($_POST['submit']))
	{
		
		
				
		
		
			$up_name = $_POST['name'];
			$up_email = $_POST['email'];
			$up_phn = $_POST['phn'];
			$up_address = $_POST['address'];
			
			$updated = mysqli_query($con,"UPDATE tbl_login SET email = '$up_email', phone ='$up_phn' WHERE l_id='$l_id'");
			$updated2 = mysqli_query($con,"UPDATE tbl_admin SET a_name = '$up_name', a_add ='$up_address' WHERE l_id='$l_id'");
			
			
			if($updated && $updated2)
			{
				echo "<script> location.replace('manage_admin.php?ep=1'); </script>"; 			
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
        Edit Profile For Client
        
        <small>Lawyer Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Profile For Client</li>
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
                  <label>Name</label>
                  <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter Email ..." required />
                </div>
				<div class="form-group">
                  <label>Phone No</label>
                  <input type="text" name="phn" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile
number starting with 7 or 8 or 9' value="<?php echo $phone; ?>" required />
                </div>
				
                <!-- textarea -->
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" name="address" rows="3" required ><?php echo $address; ?></textarea>
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