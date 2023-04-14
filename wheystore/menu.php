<?php
	session_start();
	include_once("config-home.php");
	if(isset($_POST['search'])){
		$item = $_POST['search'];
		header('Location:search.php?item='.$item);
	}
	$sql_cat_menu =  $mysqli->query("select * from category"); 
?>

<header class="main-header clearfix">
				<div class="row">
					<a href="index.php" class="logo">WHEY STORE</a>
					<span class="slogan">Chất lượng &amp; dịch vụ tốt nhất</span>
					<div class="menu">
					<?php if(isset($_SESSION["products"])) // hien thi so item da dua vao gio hang voa tong gia tien
					{
						$total = 0;
						$count=0;
						foreach ($_SESSION["products"] as $cart_item){
							$subtotal = ($cart_item["price"]*$cart_item["quantity"]);
							$total = ($total + $subtotal);
							$count=$count+1;
						}
						echo '<a href="cart.php" class="cart">'.$count.' sản phẩm ('.$total.'VNĐ)</a>';  // dua ra so item va tong gia tien
					} else echo '<a href="cart.php" class="cart">0 sản phẩm (0 VNĐ)</a>'; //neu ko co san pham nao thi hien thi mac dinh (0 item va 0 VND)
					?>
						<a href="payment.php" class="checkout">Thanh toán</a>
						
					</div>

				</div>
				<div class="row _user_auth">
				<?php if(empty($_SESSION['username'])){?>
					<form action="checklogin.php" class="login" method="post">
						<label>Đăng nhập:</label>
						<input name="log_username" type="text" placeholder="Tài khoản" />
						<p><input name="log_password" type="password" placeholder="Mật khẩu" /><a href="forgot-password.php" class="password">Quên?</a></p>
						<button name="log_submit" type="summit">Đăng nhập</button>
						<button type="button" class="guest"><a href="register.php">Đăng ký</a></button>
					</form>
				<?php } 
				?>
				</div>
				<nav class="main-menu">
					<ul>
						<li ><a href="index.php" class="trans-1">Trang chủ</a></li>
						<li>
							<a href="sale.php"><span>Sản phẩm nổi bật </span></a>
						</li>
						<li>
							<a href="views.php"><span>Danh mục</span></a>
							<ul><?php  // hien thi ten cac loai CD
								while($obj_cat= $sql_cat_menu->fetch_object()){ 
								echo '<li><a href="views.php?id='.$obj_cat->cat_id.'">'.$obj_cat->cat_name.'</a></li>';
								}?>
							</ul>
						</li>
						<li><a href="lienhe.php">Liên hệ</a></li>
						
					</ul>
					<select class="navigationSelector"> <!--- Menu responsive --->
						<option value="index.php">Trang chủ</option>
						<option value="sale.php">Sản phẩm nổi bật</option>
						<option value="views.php">Danh mục</option>
						<option value="lienhe.php">Liên hệ</option>
						
					</select>
					<form class="search" method="post">
						<input name="search" type="text" placeholder="Tìm kiếm" />
					</form>
				</nav>
			<!-- END .main-header -->
			</header>