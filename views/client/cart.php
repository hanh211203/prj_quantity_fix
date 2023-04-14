<?php
    include_once("config/db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cart</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cart.css">
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
                <?php include_once("common/menu.php"); ?>
            </div>
        </div>
            <div class="row">
                <div id="main" class="col-lg-8 col-md-12 col-sm-12">
                  
                <div id="slide" class="carousel slide" data-ride="carousel">

                   
                    <ul class="carousel-indicators">
                    <li data-target="#slide" data-slide-to="0" class="active"></li>
                    <li data-target="#slide" data-slide-to="1"></li>
                    <li data-target="#slide" data-slide-to="2"></li>
                    <li data-target="#slide" data-slide-to="3"></li>
                    <li data-target="#slide" data-slide-to="4"></li>
                    <li data-target="#slide" data-slide-to="5"></li>
                    </ul>

                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide/slide-6.jpg" width="100%" height="210px" alt="Webleaners Training" >
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide/slide-7.png" width="100%" height="210px" alt="Webleaners Training">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide/slide-8.jpg" width="100%" height="210px" alt="Webleaners Training">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide/slide-9.jpg" width="100%" height="210px"alt="Webleaners Training">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide/slide-10.jpg" width="100%" height="210px" alt="Webleaners Training">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide/slide-8.jpg" width="100%" height="210px" alt="Webleaners Training">
                    </div>
                    </div>

                    <a class="carousel-control-prev" href="#slide" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#slide" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>

                    </div>
                    
                    <div id="my-cart">
                        <div class="row">
                            <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Product name</div>
                            <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Option</div>
                            <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Price</div>
                        </div>
                        <form method="post">
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/prd1.png">
                                    <h4>iPhone 66 V1</h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>30000000 VND</b><a href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Update the cart</button>
                                </div>
                                <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Total:</b></div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>94000000 VND</b></div>
                            </div>
                        </form>

                    </div>
                    
                    <div id="customer">
                        <form method="post">
                            <div class="row">

                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Full name (Compulsory)" type="text" name="name"
                                        class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Phone number (compulsory)" type="text" name="phone"
                                        class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Email (compulsory)" type="text" name="mail" class="form-control"
                                        required>
                                </div>
                                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                    <input placeholder="Home or organi address (Compulsory)" type="text"
                                        name="add" class="form-control" required>
                                </div>

                            </div>
                        </form>
                        <div class="row">
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>BUY NOW</b>
                                    <span>Super fast delivery</span>
                                </a>
                            </div>
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Installment</b>
                                    <span>Please call (+84) 6666 88888</span>
                                </a>
                            </div>
                        </div>
                    </div>
                   

                </div>


            </div>
        </div>
    </div>
   

   
    
   


</div>
</body>

</html>