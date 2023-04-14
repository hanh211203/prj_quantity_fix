<?php
	require('config-home.php');
	$sql_all = $mysqli->query("SELECT * FROM product"); //mac dinh hien thi tat ca item
	$sql_cat_filter =  $mysqli->query("SELECT * FROM category"); //hien thi list cac loai dia CD trong filter
	if(isset($_POST['filter'])){
		$name_cat = $_POST['filter'];
		if($name_cat =="Tất Cả"){ //kiem tra neu filter la "Tất cả" thì hiện thi tất cả tiem
			$sql_cat = $mysqli->query("SELECT * FROM product");
		}
		else{ // nguoc lai thi hien thi theo category
		$sql_cat = $mysqli->query("SELECT * FROM category WHERE cat_name ='$name_cat'");
		}
	}
?>

<?php 
	require('header.php');
 ?>
<body class="top">
		
		<div class="main-body-color-mask"></div>
		<div class="lightbox"></div>
		
		</div>
		
		<!-- BEGIN .main-body-wrapper -->
		<div class="main-body-wrapper">
			
			<!-- BEGIN .main-header -->
			<?php include('menu.php');?>
			
			<!-- BEGIN .main-navigation -->
			<section class="main-navigation clearfix">
				<nav>
					<div class="navigation">
						<a href="#">Home</a>
						<a href="#">Sản phẩm</a>
					</div>
					<div class="title">
						<h4>Sản phẩm nổi bật</h4>
					</div>
				</nav>
			<!-- END .main-navigation -->
			</section>
			
			<!-- BEGIN .main-content-wrapper -->
			<section class="main-content-wrapper clearfix">
				
				<!-- BEGIN .catalog -->
				<section class="catalog">
				
					<div class="sorting clearfix">
						<form name="myform" method="post" onChange="javascript:document.myform.submit();">
							<label>Chọn theo:</label>
							<select name="filter">
								<option>Filter</option>
								<option>Tất Cả</option>
								<?php  // hien thi ten cac loai CD
								while($obj_cat= $sql_cat_filter->fetch_object()){ ?>
									<option><?php echo $obj_cat->cat_name?></option>
								<?php }?>
							</select>
						</form>
		
					</div>
					
					<!-- hien thi item -->
					<div class="items clearfix">
					<?php if(isset($_POST['filter'])){ //chekc dieu kien neu chon filter -> hien ra ca cd theo category ca chon filter
						 while($obj_cat= $sql_cat->fetch_object()){ ?>
						<div class="item-block-1">
						<span class="tag-sale"></span>
							<div class="image-wrapper">
								<div class="image">
									<div class="overlay">
										<div class="position">
											<div>
												<p><?php echo $obj_cat->prd_name ?></p>
												<a href="item.php?id=<?php echo $obj_cat->prd_id?>" class="quickshop1 ">Quick shop</a>
											</div>
										</div>
									</div>
									<a href="item.php?id=<?php echo $obj_cat->prd_id?>"><img src="images/photos/image-<?php echo $obj_cat->prd_id?>.PNG" style="margin: -27.5px 0 0 0;" alt="" /></a>
								</div>
							</div>
							<h2><a href="item.php?id=<?php echo $obj_cat->prd_id?>"><?php echo $obj_cat->prd_name?></a></h2>
							<p class="price"><?php echo $obj_cat->price?> VNĐ</p>
						</div>
						
						<?php }
						} else { // Mac dinh views.php hien thi tat ca cac item dang co
						while($obj_all= $sql_all->fetch_object()){ ?>
						<div class="item-block-1">
						<?php 
						if($obj_all->price >0){
					
						}?>
							<div class="image-wrapper">
								<div class="image">
									<div class="overlay">
										<div class="position">
											<div>
												<p><?php echo $obj_all->prd_name ?></p>
												<a href="item.php?id=<?php echo $obj_all->prd_id?>" class="quickshop1 ">Quick shop</a>
											</div>
										</div>
									</div>
									<a href="item.php?id=<?php echo $obj_all->id?>"><img src="images/photos/image-<?php echo $obj_all->prd_id?>.PNG" style="margin: -27.5px 0 0 0;" alt="" /></a>
								</div>
							</div>
							<h2><a href="item.php?id=<?php echo $obj_all->prd_id?>"><?php echo $obj_all->prd_name?></a></h2>
							<?php 
							
							 echo '<p class="price">'.$obj_all->price.' VNĐ</p>';
							 ?>
						</div>
						
						<?php }
						}?>
						
						
						
					</div>

				<!-- END .catalog -->
				</section>

			<!-- END .main-content-wrapper -->
			</section>
			


<?php 
	require('footer.php');
 ?>