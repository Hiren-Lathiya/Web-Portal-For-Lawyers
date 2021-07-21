<?php

	include "connection.php";
	


include "header1.php";
if(isset($_GET['id']))
       {
      $clientid=$_GET['id']."";
      
    
       }
	
	if(!isset($_SESSION['log']))
	{
		header("location:dashboard.php");
	}
	
	else
	{
		$log = $_SESSION['log'];
		
		$a = "SELECT * FROM tbl_login WHERE email='$log'";
		$aa = mysqli_query($con,$a);
		$value = mysqli_fetch_array($aa);
		
		$id1 = $value['l_id'];
		      
          $q111=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
          $value111 = mysqli_fetch_array($q111);
          $xyz111=$value111['l_id'];

        $q4=mysqli_query($con,"SELECT * FROM lawyer WHERE l_id='$xyz111'");
        $value4 = mysqli_fetch_array($q4);
        $xyz4=$value4['law_id'];
		    $query="SELECT tbl_client.l_id,tbl_client.address,tbl_client.img,tbl_client.name,tbl_login.phone,tbl_login.email FROM tbl_client,tbl_login WHERE  tbl_client.l_id=tbl_login.l_id AND tbl_client.c_id='$clientid' AND tbl_client.law_id='$xyz4'";
          $result2 = mysqli_query($con,$query);
		      $value222 = mysqli_fetch_array($result2);
		 $name= $value222['name'];
      $email= $value222['email'];
       $phone= $value222['phone'];
        $address= $value222['address'];
        $img= $value222['img'];
      $l_id=$value222['l_id'];

}
	
		
?>
<?php
	
	if(isset($_POST['submit']))
	{
		
		
				
		
		if($_FILES["image"]["name"] != "")
		{
			$up_name = $_POST['name'];
			$up_email = $_POST['email'];
			$up_phn = $_POST['phn'];
			$up_address = $_POST['address'];
			$file=$_FILES['image']['tmp_name'];
			$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name=addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$_FILES["image"]["name"]);
				
			$location="photos/" . $_FILES["image"]["name"];
			$updated = mysqli_query($con,"UPDATE tbl_login SET email='$up_email' WHERE l_id='$l_id'");
			$updated2 = mysqli_query($con,"UPDATE tbl_client SET name='$up_name',address='$up_address',img='$location' WHERE l_id='$l_id'");
			$updated3 = mysqli_query($con,"UPDATE tbl_login SET phone='$up_phn' WHERE l_id='$l_id'");
			
			
			if($updated && $updated2)
			{
				if($updated3)
				{
				echo "<script> location.replace('manageclients.php'); </script>"; 		
				}
				else
				{
					echo "<font style='color:red'>Error...</font>";
				}
			}
			else
			{
					echo "<font style='color:red'>Error...</font>";
			}
		}
		else
		{
			$up_name = $_POST['name'];
			$up_email = $_POST['email'];
			$up_phn = $_POST['phn'];
			$up_address = $_POST['address'];
			
			$updated = mysqli_query($con,"UPDATE tbl_login SET email = '$up_email', phone ='$up_phn' WHERE l_id='$l_id'");
			$updated2 = mysqli_query($con,"UPDATE tbl_client SET name = '$up_name', address ='$up_address' WHERE l_id='$l_id'");
			
			
			if($updated && $updated2)
			{
				echo "<script> location.replace('manageclients.php?ep=1'); </script>"; 			
			}
			else
			{
					echo "<font style='color:red'>Error...</font>";
			}
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
				<div class="form-group">
                  <label>Profile Pic</label>
                  <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
					<div id="myDiv" align="center"> 
						<!--<p class="square"> -->
					  <img src="<?php echo $img; ?>" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />


						<script type="text/javascript">
							function readURL(input) {
								if (input.files && input.files[0]) {
									var reader = new FileReader();
									
									reader.onload = function (e) {
										$('#profile-img-tag').attr('src', e.target.result);
									}
									reader.readAsDataURL(input.files[0]);
								}
							}
							$("#profile-img").change(function(){
								readURL(this);
							});
						</script>
					</div>	
					
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