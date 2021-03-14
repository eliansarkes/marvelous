<!DOCTYPE html>
<html lang="en">
<?php
include ("partials/head.php");
?>
<body class="animsition">
 <?php
	
include ("partials/header.php");


	
 ?>

	
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				

				<div class="flex-w flex-c-m m-tb-10">
					
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
			

			</div><?php include 'partials/filtering.php'; ?>
		</div>
	</div>

	<div class="row isotope-grid">

			<?php
			include('partials/connect.php');
			$sql="SELECT * from products";
			$results=$connect->query($sql);

			while($final=$results->fetch_assoc()) {

			


			
?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">



						<div class="block2-pic hov-img0" style='width:100%; max-width:350px; max-height:400px; overflow:hidden;border:#e5e5e5e5 black solid; border-radius:20px;box-shadow:5px 7px #e5e5e5e5;'>

						<img src="upload/<?php echo $final['picture'] ?>" alt="No FIle" style="">

							<a href="product-detail.php?details_id=<?php echo $final['id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.php?details_id=<?php echo $final['id']?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['name'] ?>
								</a>

								<span class="stext-105 cl3">
									$<?php echo $final['price'] ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
<?php } ?>

		</div>
	</div>
		

	<!-- Footer -->
	<?php
	include ('partials/footer.php');
	
	?>

</body>
</html>