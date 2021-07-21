<!DOCTYPE html>
<html>
<head>
<style>
.button {
	border-radius: 5px;
  background-color: #4CAF50;
  border: none;
  color: white;
  width:100px;
  height:-5px
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 23px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<body>
<?php include "header1.php";
		include "connection.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Cases
        <small>Lawyer Panel Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Cases</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="insertcases.php">
                
                  <div class="col-md-12">        
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label>Court <span  style="color:red"> *</span></label>
                          <select class="form-control" name="court" required  >
                            <option> Select Court </option>
                            <option value="Supreme Court"> Supreme Court </option>
                            <option value="High Court"> High Court </option>
							<option value="District Court"> District Court </option>
							<option value="Other"> Other </option>
							
                          </select>
                      </div>
         
                      <div class="col-md-6">
                        <label>Case Number <span  style="color:red"> *</span></label>
                          <input type="text" name="cnr" class="form-control" placeholder="Enter case number ..." required />
                     </div>
                  </div>
              </div>

               <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Case Type <span  style="color:red"> *</span></label>
                          <select name="casetype" id="SSS" class="form-control" required  >
						  <option selected="selected" value="">Select Case Type</option>
                            <option  value="Application">Application </option>
                            <option  value="Arbitrary Case">Arbitrary Case </option>
                            <option value="Bail Application"> Bail Application </option>
							<option value="Civil Appeal"> Civil Appeal </option>
							<option value="Challan Act"> Challan Act </option>
                          </select>
                      </div>
					  
					  <script>
  $(document).ready(function () {
    $("#SSS").select2({
      placeholder: "",
      width: "resolve",
      allowClear: true
    });
  });
</script>
         
                      <div class="col-xs-6">
                        <label>Date Of Filling <span  style="color:red"> *</span></label>
                          <input type="date" name="filldate" class="form-control" placeholder="MM/DD/YYYY" required />
                          
                     </div>
                  </div>
              </div>
			  
			  <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Registration Number <span  style="color:red"> *</span></label>
                          <input type="text" name="regno" class="form-control" placeholder="Enter Registration No ..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Filling Number <span  style="color:red"> *</span></label>
                          <input type="text" name="fillno" class="form-control" placeholder="Enter Filling No ..." required />
                          
                     </div>
                  </div>
              </div>
			  

              <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Sections/Category <span  style="color:red"> *</span></label>
                          <input type="text" name="act" class="form-control" placeholder="Enter classification ..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Title <span  style="color:red"> *</span></label>
                          <input type="text" name="title" class="form-control" placeholder="Enter Title ..." required />
                          
                     </div>
                  </div>
              </div>
			  
			  
			  
			  <div class="col-xs-12">      
<div class="form-group row">
                      <div class="col-xs-6">
                        <label>Select Client <span  style="color:red"> *</span></label>
                          <select name="client" id="SSS" class="form-control" required  >
						  <option selected="selected" value="">Select Client</option>
                         <?php 
						$log=$_SESSION['log'];

					$q1=mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$log'");
					$value = mysqli_fetch_array($q1);
					$xyz=$value['l_id'];
					$qry1=mysqli_query($con,"SELECT law_id FROM lawyer WHERE l_id='$xyz'");
					$value2 = mysqli_fetch_array($qry1);
					$abc=$value2['law_id'];
					
					$query="SELECT name FROM tbl_client WHERE law_id='$abc'";
					$result2 = mysqli_query($con,$query);
					while($value3 = mysqli_fetch_array($result2))
					{
				?>
                 <option  value="<?php echo $value3['name']; ?>"><?php echo $value3['name']; ?></option>
					<?php }			
					?>
					
						
						
                          </select>
                      </div>
					  
					  <script>
  $(document).ready(function () {
    $("#SSS").select2({
      placeholder: "",
      width: "resolve",
      allowClear: true
    });
  });
</script>			  
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Are you appearing as? <span  style="color:red"> *</span></label><br/>
                        <input type="radio" name="model" value="Petitioner" checked> Petitioner
                         <input type="radio" name="model" value="Respondent"> Respondent
                         
                     </div>
                  </div>
              
			  
			  <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Police Station</label>
                          <input type="text" name="police" class="form-control" placeholder="Enter Police Station ...">
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>FIR No</label>
                          <input type="text" name="firno" class="form-control" placeholder="Enter FIR No ...">
                          
                     </div>
                  </div>
              </div>
			   <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Year</label>
                          <select name="year" id="SSS" class="form-control">
						  <option selected="selected" value="">Select Year</option>
                            <option  value="2020">2020 </option>
                            <option  value="2019">2019 </option>
                            <option value="2018"> 2018 </option>
							<option value="2017"> 2017</option>
							<option value="2016"> 2016 </option>
                          </select>
                      </div>
					  

                      <div class="col-xs-6">
                        <label>Description <span  style="color:red"> *</span></label>
                         <textarea class="form-control" rows="1" name="casedesc" placeholder="Enter Description..." required></textarea>
                     </div>
                   </div>
                </div>

                

              

              <!--<div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Section/Category</label>
                          <input type="text" name="Section" class="form-control" placeholder=" Enter Sections..." required />
                     </div>
                      
         
                      <div class="col-xs-6">
                        <label>Priority</label>
                          <input type="text" name="Priority" class="form-control" placeholder=" Enter Priority...." required />
                          
                     </div>
                  </div>
              </div>-->
              <!--<h3>Is the affadavit/vakalath field?</h3>-->
              
</div>			  


  
   
			  
  
              <div class="box-footer">
                <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary">
                
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
 