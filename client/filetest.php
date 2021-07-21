<?php include "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Client| Add Document</title>
</head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <style>
  #myDiv {
  border: 2px solid lightgray;
  height:210px;
  width:210px;
  float: left;
  }
  </style>
  
  
</head>
<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Document
        <small>Client panel control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Document</li>
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
            echo "<script><center><font style='color:green; text-align:center'>Products Added Successfully</font></center><br/></script>";
          
          }
        }

      ?>  
      <br/>
              <form role="form" method="POST" action="insert_file_test.php" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                          <label>Document Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Document Title ..." required />
                </div>

                               
                <div class="form-group">   
                          <label>Description</label><br/>
                          <textarea rows="4" class="form-control" name="description" placeholder="Enter Description here ..."></textarea>
                </div>

                <div class="form-group">
                  <label>Date</label>
                 <input type="date" name="upload_date"  class="form-control" required/>
                </div>

               <div class="form-group">  
                     <label>Image_1</label>
                    
                    <input type="file" name="myfile" class="form-control" placeholder="Display Image_1 ..." />
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
  
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
   <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<!-- ./wrapper -->
<script>
$(document).ready(function () {
$('#datepicker').datepicker({    
    endDate: '+1d',
    autoclose: true
});  });
</script>
<?php include "footer.php"; ?>
</body>
</html>