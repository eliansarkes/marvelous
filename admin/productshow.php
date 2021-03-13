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
    <a href="product.php">
    <button style="color:green">Add New</button>
    </a>
        <div class="col-sm-9">

        <?php
    include ('../partials/connect.php');

    $sql="SELECT * from products";;
    $results= $connect->query($sql);

    while($final=$results->fetch_assoc()) {?>


        <a href="proshow.php?pro_id=<?php echo $final['id']?>">
        <h3><?php echo $final['id'] ?>: <?php echo $final['name'] ?></h3><hr>

</a>

<a href="proupdate.php?update_id=<?php echo $final['id'] ?>">
<button>Update</button>
</a>
<a href="prodelete.php?del_id=<?php echo $final['id'] ?>">
<button style="color:red">Delete</button>
</a>
  <?php
   }
  ?>  



</div>

<div class="col-sm-3"></div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  //include ('adminpartials/footer.php');
  
  ?>
</body>
</html>
