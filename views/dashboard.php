<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="./public/logo1.jpg">
	<link rel="stylesheet" href="./public/style.css">
    <title>Trang chủ quản trị</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid" id="header">
    <img id="logo" src="./public/logo1.jpg">
	<a href="?controller=login&action=logout" class="btn btn-info">
		<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
			<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
		</svg>
	</a>
  </div>
</nav>
<div id="sidebar-collapse" class="box1 col-md-6 col-lg-2">
	<div class="list-group" >
        <a href="?controller=user" class="list-group-item list-group-item-action" id="maincolor">Dashboard</a>
        <a href="?controller=user&redirect=admin" class="list-group-item list-group-item-action" style="color:black">Admin Management</a>
        <a href="?controller=user&redirect=customer" class="list-group-item list-group-item-action" style="color:black">Customer Management</a>
        <a href="?controller=user&redirect=category" class="list-group-item list-group-item-action" style="color:black">Category Management</a>
        <a href="?controller=user&redirect=product" class="list-group-item list-group-item-action" style="color:black">Product Management</a>
        <a href="?controller=user&redirect=order" class="list-group-item list-group-item-action" style="color:black">Order Management</a>
        <a href="?controller=user&redirect=revenue_statistics" class="list-group-item list-group-item-action" style="color:black">Revenue Statistics</a>
    </div>
</div>

<div class="box1 col-md-6 col-lg-10 col-lg-offset-2 main">
    <div class="row" >
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                    </svg>
                </li>
                <li class="breadcrumb-item">Home</li>
        
            </ol>
            </nav>
    </div>
    

        <div class="container">
            <h1 style="text-align:center">DASHBOARD</h1> 
			<div class="row">
        	<div class="box1 col-md-6 col-lg-4">
				<div class="panel  panel-widget " style="background-color:#33CCFF">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 ">
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bucket-fill" viewBox="0 0 16 16">
								<path d="M2.522 5H2a.5.5 0 0 0-.494.574l1.372 9.149A1.5 1.5 0 0 0 4.36 16h7.278a1.5 1.5 0 0 0 1.483-1.277l1.373-9.149A.5.5 0 0 0 14 5h-.522A5.5 5.5 0 0 0 2.522 5zm1.005 0a4.5 4.5 0 0 1 8.945 0H3.527z"/>
							</svg>
						</div>
						<div class="col-sm-9 col-lg-7 ">

							<?php
								foreach($arr['product'] as $item ){
							?>
							<div class="large" style="font-size:40px;"><?= $item ?></div>
							<?php
								}
							?>

							<div class="text-muted" style="color:grey"><b>Products</b></div>
						</div>
					</div>
				</div>
			</div>
			<div class="box1 col-md-6 col-lg-4">
				<div class="panel panel-widget " style="background-color:yellow">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
							<path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
							<path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
						</svg>
						</div>
						<div class="col-sm-9 col-lg-7 ">
							<div class="large" style="font-size:40px;">42</div>
							<div class="text-muted" style="color:grey"><b>Categories</b></div>
						</div>
					</div>
				</div>
			</div>
			<div class="box1 col-md-6 col-lg-4">
				<div class="panel  panel-widget" style="background-color:#33CCCC">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
								<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
								<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
							</svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large" style="font-size:40px;">42</div>
							<div class="text-muted" style="color:grey"><b>Members</b></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
        	<div class="box1 col-md-6 col-lg-4">
				<div class="panel  panel-widget " style="background-color:#33FF66">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
								<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
							</svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large" style="font-size:40px;">42</div>
							<div class="text-muted" style="color:grey"><b>Carts</b></div>
						</div>
					</div>
				</div>
			</div>
			<div class="box1 col-md-6 col-lg-4">
				<div class="panel panel-widget " style="background-color:#FF9900">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
							<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
						</svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large" style="font-size:40px;">42</div>
							<div class="text-muted" style="color:grey"><b>Customers</b></div>
						</div>
					</div>
				</div>
			</div>
			<div class="box1 col-md-6 col-lg-4">
				<div class="panel  panel-widget" style="background-color:#FF6666">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
							<path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
							<path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
						</svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large" style="font-size:40px;">42</div>
							<div class="text-muted" style="color:grey"><b>Bills</b></div>
						</div>
					</div>
				</div>
			</div>
		</div>	
        </div>
   
</div>
</body>