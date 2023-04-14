<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>

<div style="background-color:#CC3333">
    <div id="header" style="background-color:#DD0000"> 
        <div class="container">
            <div class="row">
                <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                    <h1><a class="navbar-brand" ><span><b><span style="color:#0066CC">D</span><span style="color:#FF6600">W</span><span style="color:#00CC33">G</span></b></span> <span style="color:white"><b style="color:white">Shop</b>.com.vn<span></a></h1>
                </div>
                <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                    <form class="form-inline">
                        <input class="form-control mt-3" type="search" placeholder="Input the name of phone, laptop or accessory that you need to find..." aria-label="Search">
                        <button class="btn btn-danger mt-3" type="submit" style="background-color:black">Search</button>
                    </form>
                </div>
                <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                    <a class="mt-4 mr-2" href="cart.php">Cart
                        <i class="fa-solid fa-cart-shopping cart-icon">
                        <span class="mt-3">3</span></i>
                    </a>
                </div>
            </div>
        </div>
    
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    


<div id="body">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12" >
                <nav>
                	<div id="menu" class="collapse navbar-collapse">
                        <ul>
                            <?php
                            foreach($arr['category'] as $item) {
                            ?>
                            <li class="menu-item"><a href="#"><?= $item['name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            
            </div>
        </div>


        <div class="row">
        	<div id="main" class="col-lg-8 col-md-12 col-sm-12">
            
                <!-- <div id="slide" class="carousel slide" data-ride="carousel">
                
                </div> -->
                 <?php
                    if(isset($_GET['redirect'])){
                        $redirect = $_GET['redirect'];
                        switch($redirect){
                            case'product': include_once('views/client/product.php');
                        }
                    }else{
                        include_once('views/client/dashboard.php');
                    }
                 ?> 

   
                
          
                
                
            </div>
            
            <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
            	<div id="banner">
                	<div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner/banner-1.jpg" width="100%" height="200px"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner/banner-2.jpg"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner/banner-3.jpg"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner/banner-4.jpg" ></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner/banner-5.png" height="30%"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="images/banner/banner-6.jpg" height="30%"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="footer-top">
        <div class="container">
            <div class="row">
                <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                <h1><a class="navbar-brand" ><span><b ><span style="color:#0066CC",style="text-size:20">D</span><span style="color:#FF6600">W</span><span style="color:#00CC33">G</span></b></span> <span style="color:white"><b style="color:#FF6600">Shop</b>.com.vn<span></a></h1>
                    <p style="color:#0066CC"> Introduce about the company</p>
                    <p style="color:#0066CC"> Frequently asked questions</p>
                    <p style="color:#0066CC"> Purchase Policy</p>
                    <p style="color:#0066CC">Operational regulations</p>
                    <p style="color:#0066CC">Check e-invoices</p>
                    <p style="color:#0066CC">Look up warranty information</p>
                </div>
                <div id="address" class="col-lg-3 col-md-6 col-sm-12">
                    <h3>Other informations</h3>
                    <p style="color:#0066CC">Recruitment</p>
                    <p style="color:#0066CC">Promotion information</p>
                    <p style="color:#0066CC">Guide to buying online</p>
                    <p style="color:#0066CC">Installment purchase guide</p>
                    <p style="color:#0066CC">Installment Policy</p>
                </div>
                <div id="service" class="col-lg-3 col-md-6 col-sm-12">
                    <h3>Other informations</h3>
                    <p style="color:#0066CC">System of stores</p>
                    <p style="color:#0066CC">Warranty system</p>
                    <p style="color:#0066CC">Business sales</p>
                    <p style="color:#0066CC">Introducing the exchange machine</p>
                    <p style="color:#0066CC">Return policy</p>

                </div>
                <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
                    <p><b>Hotline(Free)</b></p>
                    <p><b style="color:#CC3300">6666 8888 (Branch 1)</b></p>
                    <p><b>Technical assistance</b><p>
                    <p><b style="color:#CC3300">6666 8888 (Branch 1)</b></p>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p style="text-align:center">
                    © 2007 - 2022 DWG Digital Retail Joint Stock Company / Address: 66 - 838 Son Tay, City. Hanoi / Business License No. 0473837637 issued by the Department of Planning and Investment of Ha Noi City on March 8, 2015. GP No. 47/GP-TTDT issued by Hanoi Department of Information and Communications on July 2, 2018. Phone: (028)73023456. Email: dwgshop@dwg.com.vn. Responsible for the content: Phan Thi Huong Hanh.
                    </p>
                </div>
            </div>
        </div>
    </div>
 
    </div>
</body>
</html>
