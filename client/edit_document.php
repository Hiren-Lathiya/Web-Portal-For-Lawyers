<?php

	include "connection.php";
	


include "header.php";
if(isset($_GET['id']))
       {
      $doc_id=$_GET['id']."";
      
    
       }
	
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	
	else
	{
		    $log=$_SESSION['log'];
    $idx="SELECT * FROM tbl_login where email ='$log'";
    $ffetch=mysqli_query($con,$idx);
    $data=mysqli_fetch_array($ffetch);
    $idnew=$data['l_id'];

          $client="SELECT * FROM tbl_client where l_id ='$idnew'";
    $client1=mysqli_query($con,$client);
    $client2=mysqli_fetch_array($client1);
    $client3=$client2['c_id'];
    $client4=$client2['law_id'];

    $lawyer1="SELECT * FROM lawyer where law_id ='$client4'";
    $lawyer2=mysqli_query($con,$lawyer1);
    $lawyer3=mysqli_fetch_array($lawyer2);
    $lawyer=$lawyer3['law_id'];

          
          

          $query="SELECT * FROM document WHERE document_id='$doc_id'";
          $result2 = mysqli_query($con,$query);
		      $result3 = mysqli_fetch_array($result2);
         
          $title11=$result3['title'];

           $desc1=$result3['description'];
       
            $doc=$result3['doc'];
             $upload_date=$result3['upload_date'];
      
 
}

	
		
?>
<?php
	
	if(isset($_POST['submit']))
	{
		if($_FILES["image"]["name"] != "")
    {
     $title2 = $_POST['title'];
      $description2 = $_POST['description'];
      $upload_date2 = $_POST['upload_date'];
     
     $file=$_FILES['image']['tmp_name'];
      $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
      $image_name=addslashes($_FILES['image']['name']);
      
      move_uploaded_file($_FILES["image"]["tmp_name"],"photos/".$_FILES["image"]["name"]);
        
      $doc2="photos/" . $_FILES["image"]["name"];
     

     $updated = mysqli_query($con,"UPDATE document SET title = '$title2', description ='$description2' , doc='$doc2' , upload_date='$upload_date2' WHERE document_id='$doc_id'");
      
      
      if($updated)
      {
        echo "<script> location.replace('manage_document.php?ep=1'); </script>";      
      }
      else
      {
          echo "<font style='color:red'>Error...</font>";
      }
    }
    else
    {
     $title2 = $_POST['title'];
      $description2 = $_POST['description'];
      $upload_date2 = $_POST['upload_date'];
      $doc2 = $_POST['doc'];
      
      $updated = mysqli_query($con,"UPDATE document SET title = '$title2', description ='$description2' , upload_date='$upload_date2' WHERE document_id='$doc_id'");
      
      
      if($updated)
      {
        echo "<script> location.replace('manage_document.php?ep=1'); </script>";      
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
                  <label>Document Title</label>

                  <input type="text" name="title" value="<?php echo $title11; ?>" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Documen Description</label>
                 <textarea rows="4" class="form-control" name="description"><?php echo $desc1 ; ?></textarea>
                </div>
				<div class="form-group">
                  <label>Date</label>
                 <input type="date" name="upload_date" value="<?php echo $upload_date; ?>" class="form-control">
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Document</label>
                  <input type="file" name="image" value="<?php echo $doc; ?>" class="form-control" placeholder="Enter name ..." >
                  <div id="myDiv" align="center"> 
            <!--<p class="square"> -->
            <img src="<?php echo $doc; ?>" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />


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