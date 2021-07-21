<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
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
<?php include "header.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Document
        <small>Lawyer panel control</small>
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
			
			
              <form role="form" method="POST" action="insert.php" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter Title ..." required />
                </div>

<div class="form-group">
                  <label>Add Image</label>
				  
                  <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
					<div id="myDiv" align="center"> 
						<!--<p class="square"> -->
					  <img src="<?php echo $def; ?>" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />


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
			 	
                <!-- textarea -->
                <div class="form-group">
				<br/> <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                  <label>Description</label>
                  <textarea class="form-control" rows="3" name="desc" placeholder="Enter Description..." required></textarea>
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

