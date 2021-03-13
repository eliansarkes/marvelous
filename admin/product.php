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
    <form role="form" action="producthandler.php"  method="post" enctype="multipart/form-data">
        <h1>Products</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Price" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file">

        
                </div>
                <div class="form-group">
                  <label for="discription">Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category">
                    <?php
                  include ("../partials/connect.php");
                  $cat="SELECT * from categories";
                  $results=mysqli_query($connect,$cat);
                  
                  //make a loop to look for the enries in the cat table
             
                  while($row=mysqli_fetch_assoc($results)) {
              
                    echo "<option value=".$row['category_id'].">".$row['name']."</option>";

            }
?>
                        
                      
</select>

                
              </div>
              <!-- /.box-body -->



    <div class="form-group">
                    <label for="condition">Condition</label>
                    <select id="condition" name="condition">
                    <?php
                  include ("../partials/connect.php");
                  $cat="SELECT * from condition_type";
                  $results=mysqli_query($connect,$cat);
                  
                  //make a loop to look for the enries in the cat table
             
                  while($row=mysqli_fetch_assoc($results)) {
              
                    echo "<option value=".$row['condition_code'].">".$row['condition_code']."</option>";

            }
?>    
                    </select>
    </div>


  
                <div class="form-group">
                  <label for="COGS">Cost of Goods Sold</label>
                  <input type="text" class="form-control" id="COGS" placeholder="Price" name="COGS">
                </div>

    <div class="form-group">
                    <label for="sellOrArchive">For Sale or In Collection</label>
                    <select id="sellOrArchive" name="sellOrArchive">
                      <option value="true">For Sale</option>
                      <option value="false">In Collection</option>
                   
                    </select>
    </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
</div>
<div class="col-sm-3"></div>
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
