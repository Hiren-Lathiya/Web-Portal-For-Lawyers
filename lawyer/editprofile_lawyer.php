<?php

	include "connection.php";
	


include "header.php";

if(isset($_GET['id']))
       {
      $lawyertid=$_GET['id']."";
      
    
       }



	
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	
	else
	{
		
		      
       


      

		    $query="SELECT tbl_login.email,tbl_login.phone,tbl_register.name,tbl_register.address,tbl_register.enrol,tbl_register.img,tbl_register.r_id FROM tbl_login,tbl_register WHERE tbl_login.l_id=tbl_register.l_id AND tbl_login.l_id='$lawyertid'";

          $result2 = mysqli_query($con,$query);
		      $value222 = mysqli_fetch_array($result2);
		 $name= $value222['name'];
      $email= $value222['email'];
       $phone= $value222['phone'];
        $address= $value222['address'];
        $img= $value222['img'];
         $enrol= $value222['enrol'];
          $r_id= $value222['r_id'];

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
			$up_enrol = $_POST['enrol'];
			$up_address = $_POST['address'];
			$file=$_FILES['image']['tmp_name'];
			$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name=addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$_FILES["image"]["name"]);
				
			$location="photos/" . $_FILES["image"]["name"];
			$updated = mysqli_query($con,"UPDATE tbl_login SET email='$up_email' WHERE l_id='$lawyertid'");
			$updated2 = mysqli_query($con,"UPDATE tbl_register SET name='$up_name',enrol ='$up_enrol' ,address='$up_address',img='$location' WHERE r_id='$r_id'");
			$updated3 = mysqli_query($con,"UPDATE tbl_login SET phone='$up_phn' WHERE l_id='$lawyertid'");
			
			
			if($updated && $updated2)
			{
				if($updated3)
				{
				echo "<script> location.replace('dashboard.php'); </script>"; 		
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
			$up_enrol = $_POST['enrol'];
			$up_address = $_POST['address'];
			
			$updated = mysqli_query($con,"UPDATE tbl_login SET email = '$up_email', phone ='$up_phn' WHERE l_id='$lawyertid'");
			$updated2 = mysqli_query($con,"UPDATE tbl_register SET name='$up_name' ,address='$up_address',enrol ='$up_enrol' WHERE r_id='$r_id'");
			
			
			if($updated && $updated2)
			{
				echo "<script> location.replace('dashboard.php?ep=1'); </script>"; 			
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

                	<div class="form-group">
                  <label>Enrollment</label>
                  <input type="text" name="enrol" value="<?php echo $enrol; ?>" class="form-control" placeholder="Enter Enrollment ..." required />
                </div>
				
                <!-- textarea -->
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" name="address" rows="3" required ><?php echo $address; ?></textarea>
                </div>
					<div class="form-group">
                  <label>Add Profile Pic</label>
				  
                  <input type="file" id="profile-img" name="image"  accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
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