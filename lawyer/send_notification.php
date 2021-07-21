 <?php 
 include "connection.php";
 include "header1.php";
 ?>
 


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Notification
        <small>Send Notification </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Notification</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<br/>
			<?php
				if(isset($_GET['flag'])){
				if($_GET['flag']==1)
					{
						echo "<center><font style='color:green; text-align:center'>Notification Send</font></center><br/>";
					
					}
				}

			?>	
			<br/>
              <form role="form" method="POST" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label> Category Name</label>
				  <select name="cname" class="form-control">
				  <option value="0">--SELECT--</option>
				  <?php 
				  
				 
						$qwe="SELECT cat_id FROM tbl_department WHERE login_id='$id'";
						$rwe=mysqli_query($con,$qwe);
						$rwe2=mysqli_fetch_array($rwe);
						$data=$rwe2['cat_id'];
						
						$q3="SELECT * FROM tbl_category WHERE cat_id!='$data'";
						$s1=mysqli_query($con,$q3);
						while($row=mysqli_fetch_array($s1))
						{
						
						echo "<option value=".$row[0].">".$row[1]."</option>";

						}
				  
				  
				  ?>
				  
				  </select>
                  </div>
				 
				
				 <div class="form-group">
                  <label>Message</label>
                  <textarea class="form-control" rows="3" name="message" placeholder="Enter Message..." required></textarea>
                </div>
               

				
              <div class="box-footer" style="float:right;">
                <input type="submit" name="submit" value="ADD" class="btn btn-primary">
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



<?php if(isset($_POST['submit'])){
              $message = $_POST['message'];
              $query =mysqli_query($con,"INSERT INTO `notification` (`n_id`, `msg`, `status`, `mdate`,'type') VALUES ('','$message', 'unread', CURRENT_TIMESTAMP,'msg')");
              //if(performQuery($query)){
                //  header("location:send_notification.php");
              //}
          }
 ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>