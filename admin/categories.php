<!DOCTYPE html>
<html>
<?php 
include('adminpartials/session.php');

include("adminpartials/head.php");

?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include ("adminpartials/header.php");
  
  ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php 
include ('adminpartials/aside.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
	  <h1> Hello this is Elian</h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-3">
</div>
<div class="col-sm-6">
    <form role="form" action="cathandler.php" method="POST">
    
        <h1>Categories</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="category">Categories</label>
                  <input type="text" class="form-control" id="category" placeholder="Enter category" name="name">
                  
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                
                </div>
            </form>
            
</div>
<div class="col-sm-3"></div>




<div style='display:inline-block; margin-left:50%; padding-top:50px;'>
   <form role="form" action="catdeleter.php" method="POST">


        <h2>Current Categories</h2>
                
<?php
      include('../partials/connect.php');
      $sql="SELECT * from categories";
      $results=$connect->query($sql);

      while($final=$results->fetch_assoc()) {

      


      
?>            

<div style='width:600px; height:100px; '>
      <label for="category" style='font-size:20px;'><?php echo $final['name'] ?></label><br/>
       <button type="submit" class="button-control" id="categoryD" placeholder="Remove category" name="name">Remove Category</button>
                
   </form>
</div>
          



<?php } ?>
</div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
 // include ('adminpartials/footer.php');
  
  ?>
</body>
</html>