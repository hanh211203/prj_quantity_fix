<?php
	require('config-home.php');
	if(isset($_GET['prd_id'])){
		$id= $_GET['prd_id'];
		$sql= $mysqli->query("SELECT * FROM product WHERE prd_id=$id"); //lay ra thong tin item
		$cat= $mysqli->query("SELECT * FROM category WHERE cat_id=$id"); //lay ra id cat cua item
		$cat = $cat->fetch_object();
		$cat_id = $cat->cat_id;
		$release = $mysqli->query("SELECT * FROM product WHERE cat_id=$cat_id AND cat_id <> '$id' ORDER BY RAND() LIMIT 0,4"); //lay ra random nhung item co cung id cat
	}
	// lay URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
?>

<?php 
	require('header.php');
 ?>
	<!-- BEGIN body -->
<body class="top">
		
		<div class="main-body-color-mask"></div>
		<div class="lightbox"></div>

		<!-- BEGIN .quick-shop -->
		
		</div>
		
		<!-- BEGIN .main-body-wrapper -->
		<div class="main-body-wrapper">
			
			<!-- BEGIN .main-header -->
			<?php include('menu.php');?>
			
			<section class="main-navigation clearfix">
			
			<!-- END .main-navigation -->
			</section>
			<!-- BEGIN .main-content-wrapper -->
			<section class="main-content-wrapper main-item-wrapper clearfix">
			
				<!-- BEGIN .main-item -->
				<?php 
						while($obj= $sql->fetch_object()){ ?> <!-- Hie nthi thong tin CD -->
				<section class="main-item clearfix">
				
					<div class="item-block-1">
						<div class="image-wrapper" id="_single-product-slider">
							<div class="image">
							
								<a href="item.php?id=<?php echo $obj->prd_id?>" class="lightbox-launcher"><img src="images/photos/image-<?php echo $obj->prd_id?>.PNG" alt="" /></a>
							</div>
						</div>
					</div>
					<form method="post" action="cart_update.php">
					<div class="item-info">
						<h2><a href="#"><?php echo $obj->prd_name?></a></h2>  <!--- hien thi ten cd--->
						<p class="item-text">
							<?php echo $obj->recommended_use?> <!--- hien thi desciption--->
						</p>
						<div class="details clearfix">
							
								<p class="item">
									<label>Thể loại:</label>
									<?php echo $obj->cat_name?> <!--- hien thi the loai--->
								</p>
								
								<p class="item quantity">
									<label>Quantity:</label>
									<select name="product_qty">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
									</select>
									
								</p>
								<p class="item">
									<label>Share this item:</label>
									<span class="social-icons clearfix">
										<span class='st_facebook_custom facebook'></span>
										<span class='st_twitter_custom twitter'></span>
										<span class='st_linkedin_custom linkedin'></span>
										<span class='st_stumbleupon_custom stumbleupon'></span>
										<span class='st_blogger_custom blogspot'></span>
									</span>
									<a href="#" class="more st_sharethis_custom">more</a>
								</p>
							
						</div>
						<div class="price">
						<?php 
							
								echo ''.$obj->price.' VNĐ' ;
							 ?> 
							
						</div>
						<div class="buy">
							<button name="buy_submit" type="submit">Thêm vào giỏ hàng</button>
							<input type="hidden" name="product_code" value="<?php echo $id;?>" /> <!-- lay ra id cua item de dua voa file cart_update.php -->
							<input type="hidden" name="return_url" value="<?php echo $current_url;?>" />
							<input type="hidden" name="sale" value="<?php echo $obj->sale;?>" />
						</div>
						
					</div>
					</form>
					
				<!-- END .main-item -->
				</section>
				<?php }?>

				<!-- BEGIN .featured-items -->
				<div class="featured-items clearfix">
					
					<div class="main-title clearfix">
						<p>Sản phẩm cùng loại</p>
						<a href="views.php?id=<?php echo $cat_id?>" class="view">Xem tất cả item</a>
					</div>
					
					<div class="items clearfix">
						<?php 
						while($rel= $release->fetch_object()){ ?> <!-- Hie nthi thong tin CD cung category -->
						<div class="item-block-1">
							<div class="image-wrapper">
								<div class="image">
								
									<div class="overlay">
										<div class="position">
											<div>
												<p><?php echo $rel->prd_name?></p>
												<a href="item.php?id=<?php echo $rel->prd_id?>" class="quickshop1">Quick shop</a>
											</div>
										</div>
									</div>
									<a href="#"><img src="images/photos/image-<?php echo $rel->prd_id?>.PNG" style="margin: -27.5px 0 0 0;" alt="" /></a>
								</div>
							</div>
							<h2><a href="item.php?id=<?php echo $rel->prd_id?>"><?php echo $rel->prd_name?></a></h2>
							<p class="price"><?php echo $rel->price?> VNĐ</p>
						</div>
						<?php }?>
						
					</div>

				<!-- END .featured-items -->
				</div>
				
				
				</div>

			<!-- END .main-content-wrapper -->
			</section>

