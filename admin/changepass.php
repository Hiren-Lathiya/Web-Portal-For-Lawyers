

<!DOCTYPE html>
<html>


<body class="hold-transition skin-blue sidebar-mini">
<?php  
include "header1.php";
  include "connection.php";
  
  
  
  if(!isset($_SESSION['log']))
  {
    header("location:login.php");
  }
  
  else
  {
    $log = $_SESSION['log'];
    
    $qry = "SELECT * FROM tbl_login WHERE email='$log'";
    $result = mysqli_query($con,$qry);
    $value = mysqli_fetch_array($result);
    
    $id = $value['l_id'];
    $pass = $value['pass'];
    
    $sql = "SELECT * FROM tbl_client WHERE l_id='$id'";
    $result1 = mysqli_query($con,$sql);
    $value1 = mysqli_fetch_array($result1);
    
    $n = $value1['name'];
    
    
    

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Change Password
        </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Change Password</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
	     <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">To change password you must know your old password.</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Old Password</label>
                  <input type="password" name="old_pass" class="form-control" id="exampleInputEmail1" placeholder="Enter old password" required />
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Enter new password" required />
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Retype New Password</label>
                  <input type="password" name="pass2" class="form-control" id="pass2" placeholder="Re-Enter new password" oninput="check(this)" required />
				  <script language='javascript' type='text/javascript'>
						function check(input) {
							if (input.value != document.getElementById('pass1').value) {
								input.setCustomValidity('Password Must be Matching.');
							} else {
								// input is valid -- reset the error message
								input.setCustomValidity('');
							}
						}
					</script>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="submit" class="btn btn-primary" value="Change">
              </div>
		
<?php

	
	if(isset($_POST['submit']))
	{
		
		$old_pass = $_POST['old_pass'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
	
		if($pass==$old_pass)
		{
			if($pass1==$pass2)	
			{
				$update = "UPDATE tbl_login SET pass='$pass1' WHERE l_id='$id'";
				$result1 = mysqli_query($con,$update);
				
				if($result1)
				{
					echo "password updated successfully....";
				}
			
				else
				{
					echo "Error...";
				}
			}
		}
		
		else
		{
			echo "<font style='color:red'>Old password incorrect....</font>";
		}
	
	}

?> 
			  
			  	  
            </form>
          </div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 
  <footer class="main-footer">
   <!-- <div class="pull-right hidden-xs">
      <b>Team ID</b> 241
    </div>
    <strong>LAWYER PANEL</strong>  -->
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
  
<?php

	}

?>
</body>
</html>