<?php 
include "header1.php";
?>
	

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Send Message
        <small>Lawyer Panel Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Message</li>
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
              <form method="POST" action="send_msg.php">
			  <div class="col-xs-12">        
                    <div class="form-group row">
                      <div class="col-xs-6">
                        <label>Mobile <span  style="color:red"> *</span></label>
                          <input type="tel" name="no" class="form-control" placeholder="Enter Mobile No ..." required />
                     </div>
                      
                  </div>
              </div>
 <div class="col-xs-12">        
                    <div class="form-group row">
					<div class="col-xs-6">
                        <label>Message<span  style="color:red"> *</span></label>
                         <textarea class="form-control" rows="3" name="msg" placeholder="Enter Message..." required></textarea>
                     </div>
                   </div>
    </div>
	</div>
	<div class="box-footer">
                <input type="submit" name="submit" value="Send" class="btn btn-primary">
                
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