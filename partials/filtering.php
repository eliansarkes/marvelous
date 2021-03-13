<?php

if(isset($_REQUEST['$category_name'])) {
	$category_name = $_REQUEST['$category_name'];
} else {
	$category_name = '';
}


if(isset($_REQUEST['$sizing'])) {
	$sizing = $_REQUEST['$sizing'];
} else {
	$sizing = '';
}


if(isset($_REQUEST['$condition_type'])) {
	$condition_type = $_REQUEST['$condition_type'];
} else {
	$condition_type = '';
}


if(isset($_REQUEST['$sort'])) {
	$sort = $_REQUEST['$sort'];
} else {
	$sort = '';
}


if(isset($_REQUEST['$price'])) {
	$price = $_REQUEST['$price'];
} else {
	$price = '';	
}


if(isset($_REQUEST['$character_search'])) {
	$character_search = $_REQUEST['$character_search'];
} else {
	$character_search = '';
}


//when tag system is implemented it will show tag categories at the top, it used to show 'men', 'women', 'accessories'  include 'filtering-tags.php';

             

?>
<form action='' method='post'>

 		<div class='bg0 m-t-23 p-b-140'>
		<div class='container'>
			<div class='flex-w flex-sb-m p-b-52'>

				<div class='flex-w flex-c-m m-tb-10'>
					<div class='flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter'>
						<i class='icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list'></i>
						<i class='icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none'></i>
						 Filter
					</div>

					<div class='flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search'>
						<i class='icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search'></i>
						<i class='icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none'></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class='dis-none panel-search w-full p-t-10 p-b-15'>
					<div class='bor8 dis-flex p-l-15'>
						<button class='size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04'>
							<i class='zmdi zmdi-search'></i>
						</button>

						<input class='mtext-107 cl2 size-114 plh2 p-r-15' type='text' name='search-product' placeholder='Search'>
					</div>	
				</div>

				<!-- Filter -->
				<div class='dis-none panel-filter w-full p-t-10'>
					<div class='wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm'>
						<div class='filter-col1 p-r-15 p-b-27'>
							<div class='mtext-102 cl2 p-b-15'>
								Sort By
							</div>

							<ul>
								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										Default
									</a>
								</li>


								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04 filter-link-active'>
										Newness
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										Price: Low to High
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class='filter-col2 p-r-15 p-b-27'>
							<div class='mtext-102 cl2 p-b-15'>
								Condition
							</div>

							<ul>
								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04 filter-link-active'>
										All
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										New
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										Restored
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										Used
									</a>
								</li>

							</ul>
						</div>


						<div class='filter-col2 p-r-15 p-b-27' style='width:20%;'>
							<div class='mtext-102 cl2 p-b-15'>
								Category
							</div>

							<ul>
								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04 filter-link-active'>
										All
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										Apparel
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										CGCs, COMICS
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										Figures
									</a>
								</li>

								<li class='p-b-6'>
									<a href='#' class='filter-link stext-106 trans-04'>
										Statues & Busts
									</a>
								</li>
							</ul>
						</div>



						<div class='filter-col4 p-b-27'>
						
						
						<!--
							<div class='mtext-102 cl2 p-b-15'>
								Tags
							</div>
$cat='SELECT * from tags';
$results=mysqli_query($connect,$cat);
<div class='flex-w p-t-4 m-r--5'>
 if ($results) {
  	while($row = $results -> fetch_assoc()) {


							
								<a href='#' class='flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5'>
									{$row['tag_text']}
								</a>

								}
							}
							</div>
							-->
							
<br/>
						<input type='submit' class='flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5' style='float:right background-color:white; color:black; height:30px;' value='Apply Filters' />
						</div>



					</div>
				</div>
			</div>
		</form>
	


	