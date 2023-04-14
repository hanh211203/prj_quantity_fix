<?php
	require('config-home.php');
	$sql = $mysqli->query("SELECT * FROM product ORDER BY price DESC LIMIT 8");
	$sql_sale = $mysqli->query("SELECT * FROM product ORDER BY price DESC LIMIT 4");
?>

<?php 
	require('header.php');
 ?>
<body class="top">
		
		<div class="main-body-color-mask"></div>
		<div class="lightbox"></div>

		<!-- BEGIN .quick-shop -->
		
		</div>
		
		<!-- BEGIN .main-body-wrapper -->
		<div class="main-body-wrapper">
			
			<!-- BEGIN .main-header -->
			<?php include('menu.php');?>
			
			<!-- BEGIN .main-slider -->
			<section class="main-slider">
			
				<div class="paging">
					<a href="#" class="previous"></a>
					<a href="#" class="next"></a>
				</div>
				
				<nav>
					<span id="pager">
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					</span>
				</nav>
				
				<div id="hompage-slider_content">
					
					<!-- BEGIN .item -->
					<div class="item" style="background-image: url(images/slide/slider-1.jpg);">
						<div class="title-wrapper clearfix">
							<div class="title">
								<p class="clearfix"><a href="#" class="headline">Little details make a big difference</a></p>
								<p class="clearfix"><a href="#" class="intro">The important thing is not to stop questioning. Curiosity has its own reason for existing. -Albert Einstein </a></p>
							</div>
						</div>
						<img src="images/blank.png" alt="" />
					<!-- END .item -->
					</div>
					
					<!-- BEGIN .item -->
					<div class="item" style="background-image: url(images/slide/slider-2.jpg);">
						<div class="title-wrapper clearfix">
							<div class="title">
								<p class="clearfix"><a href="#" class="headline">Pandora gives you more</a></p>
								<p class="clearfix"><a href="#" class="intro">All the great things are simple, and many can be expressed in a single word: freedom, justice, honor, duty, mercy, hope. -Winston Churchill </a></p>
							</div>
						</div>
						<img src="images/blank.png" alt="" />
					<!-- END .item -->
					</div>
					
					<!-- BEGIN .item -->
					<div class="item" style="background-image: url(images/slide/slider-3.jpg);">
						<div class="title-wrapper clearfix">
							<div class="title">
								<p class="clearfix"><a href="#" class="headline">Looking cool</a></p>
								<p class="clearfix"><a href="#" class="intro">I now not with what weapons World War III will be fought, but World War IV will be fought with sticks and stones. -Albert Einstein </a></p>
							</div>
						</div>
						<img src="images/blank.png" alt="" />
					<!-- END .item -->
					</div>
					
					<!-- BEGIN .item -->
					<div class="item" style="background-image: url(images/slide/slider-4.jpg);">
						<div class="title-wrapper clearfix">
							<div class="title">
								<p class="clearfix"><a href="#" class="headline">Leave a lasting impression on your customers</a></p>
								<p class="clearfix"><a href="#" class="intro">As far as the laws of mathematics refer to reality, they are not certain, as far as they are certain, they do not refer to reality.  -Albert Einstein </a></p>
							</div>
						</div>
						<img src="images/blank.png" alt="" />
					<!-- END .item -->
					</div>
					
				</div>
				
			<!-- END .main-slider -->
			</section>
			
			<!-- BEGIN .main-content-wrapper -->
			<section class="main-content-wrapper clearfix">
				
				<!-- BEGIN .featured-items -->
				<div class="featured-items clearfix">
					
					<div class="main-title clearfix">
						<p>Sản phẩm nổi bật</p>
						<a href="views.php" class="view">Xem tất cả sản phẩm</a>
					</div>
					
					<div class="items clearfix">
						<?php 
						while($obj= $sql->fetch_object()){ ?>
						<div class="item-block-1">
							<div class="image-wrapper">
								<div class="image">
									<div class="overlay">
										<div class="position">
											<div>
												<p><?php echo $obj->prd_name?></p>
												<a href="item.php?prd_id=<?php echo $obj->prd_id?>" class="quickshop1">Quick shop</a>
											</div>
										</div>
									</div>
									<a href="item.php?prd_id=<?php echo $obj->prd_id?>"><img src="images/photos/image-<?php echo $obj->prd_id?>.PNG" style="margin: -27.5px 0 0 0;" alt="" /></a>
								</div>
							</div>
							<h2><a href="item.php?prd_id=<?php echo $obj->prd_id?>"><?php echo $obj->prd_name?></a></h2>
							
							<p class="price"><?php echo $obj->price?> VNĐ</p>
						</div>
						<?php }?>
						
						
					</div>

				<!-- END .featured-items -->
				</div>
			
			<!-- END .main-content-wrapper -->
			</section>
	
	
<?php 
	require('footer.php');
 ?>