<!DOCTYPE html>
<html lang="en">
<?php
include ("partials/head.php");
?>
<body class="animsition">
 <?php
	
include ("partials/header.php");


	
 ?>


	<!-- breadcrumb -->
	<div class="container"><br><br><br>
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
				Shop
			
			</a>

	
		</div>
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">

			<?php
		include ('partials/connect.php');
		$id=$_GET['details_id'];
		$sql="SELECT * from products WHERE id='$id'";
		$results=$connect->query($sql);
  		while($final = $results -> fetch_assoc()) {
  	
?>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								

								<div class="item-slick3" data-thumb="upload/<?php echo $final['picture'] ?>">
									<div class="wrap-pic-w pos-relative" style="height:700px">
										<img src="upload/<?php echo $final['picture'] ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="upload/<?php echo $final['picture'] ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $final['name'] ?>
						</h4>

						<span class="mtext-106 cl2">
							&#36; <?php echo $final['price'] ?>
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php echo $final['description'] ?>
						</p>
	<?php
		if($final['category_id'] == 2) {
	?>					
						<!--  -->
					<div class='p-t-33'>
							<div class='flex-w flex-r-m p-b-10'>
								<div class='size-203 flex-c-m respon6'>
									Size
								</div>

								<div class='size-204 respon6-next'>
									<div class='rs1-select2 bg0'>
										<?php echo $final['sizing'] ?>
										<div class='dropDownSelect2'></div>
									</div>
								</div>
							</div>
							
<?php } else { print("<br/><br/>");}?>
							<div class='flex-w flex-r-m p-b-10'>
								<div class='size-203 flex-c-m respon6'>
									Condition
								</div>

								<div class='size-204 respon6-next'>
									<div class='rs1-select2 bg0'>
										<?php echo $final['condition_code'] ?>
										<div class='dropDownSelect2'></div>
									</div>
								</div>
							</div>
<?php
	$cat="SELECT categories.category_id, categories.name, products.ID from categories left join products on categories.category_id=products.category_ID where (categories.category_id={$final['category_id']} && products.ID={$final['id']})";
		$result2=$connect->query($cat);

		while($category = $result2 -> fetch_assoc()) {

			?>
							<div class='flex-w flex-r-m p-b-10'>
								<div class='size-203 flex-c-m respon6'>
									Category
								</div>

								<div class='size-204 respon6-next'>
									<div class='rs1-select2 bg0'>
										<?php echo $category['name'] ?>
										
									</div>
								</div>
							</div>
<?php } ?>

							


								<div class='flex-c-m respon6'>
									<div class='characters-item'  style='height:200px; width:250px; display:block;'>
										Includes Characters:
									
								
								<ul>
<?php 
$sqlC=
"SELECT characters.character_name, characters.character_ID from characters left join character_group on character_group.character_ID=characters.character_ID where character_group.ID={$final['id']}";
		$result2=$connect->query($sqlC);

		while($heroes = $result2 -> fetch_assoc()) {


?>
					
						<li>&nbsp; &#183; &nbsp; <?php echo $heroes['character_name'] ?></li>

<?php } ?></ul></div></div>
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<?php 
							if($final['quantity'] > 1) {
								?>
									<div class='wrap-num-product flex-w m-r-20 m-tb-10'>
										<div class='btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m'>
											<i class='fs-16 zmdi zmdi-minus'></i>
										</div>

										<input class='mtext-104 cl3 txt-center num-product' type='number' name='num-product' value='$final['quantity']'>

										<div class='btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m'>
											<i class='fs-16 zmdi zmdi-plus'></i>
										</div>
									</div>
									<?php } ?>

<div class='flex-w flex-r-m p-b-10'>
								<button onclick="location.href='carthandler.php?cart_id=<?php echo $final['id'] ?>&cart_name=<?php echo $final['name'] ?>&cart_price=<?php echo $final['price'] ?>'"class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" name="addtocart" >
										Add to cart
									</button>
									
								
								</div>
							</div>	
						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<div class="flex-m bor9 p-r-10 m-r-11">
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
									<i class="zmdi zmdi-favorite"></i>
								</a>
							</div>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									<?php echo $final['description'] ?>
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="row">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			
		</div>
	</section>
<?php } ?>


	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php include 'partials/related.php';?>
				</div>
			</div>
		</div>
	</section>
		

	<!-- Footer -->
	<?php
	include ('partials/footer.php');
	?>

</body>
</html>