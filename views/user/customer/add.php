<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="icon" type="image/x-icon" href="./public/logo1.jpg">
  <link rel="stylesheet" href="./public/style.css">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid" id="header">
    <img id="logo" src="./public/logo1.jpg">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
    </svg>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

    
    <div class="container">
      <form method="post" action="?controller=<?= $controller ?>&action=store">
        <?php 
            if(isset($error)) {
                echo $error;
            }
        ?>
    <div class="container">  
        <h1 style="text-align:center">ADD AN COUNT</h1>
        <div class="mb-3">
          <label for="cus_first_name" class="form-label"><b>Firstname</b></label>
          <input type="text" id="cus_first_name" name="cus_first_name" class="form-control" placeholder="Enter firstname" required>
        </div>
        <div class="mb-3">
          <label for="cus_last_name" class="form-label"><b>Lastname</b></label>
          <input type="text" id="cus_last_name" name="cus_last_name" class="form-control" placeholder="Enter lastname" required> 
        </div>
        <div class="mb-3">
          <label for="cus_phone" class="form-label"><b>Phone</b></label>
          <input type="number" id="cus_phone" name="cus_phone" class="form-control" placeholder="Phone number" required> 
        </div>
        <div class="mb-3">
          <label for="cus_email" class="form-label"><b>Email</b></label>
          <input type="text" id="cus_email" name="cus_email" class="form-control" placeholder="Email" required> 
        </div>
        <div class="mb-3">
          <label for="cus_address" class="form-label"><b>Address</b></label>
          <input type="text" id="cus_address" name="cus_address" class="form-control" placeholder="Address" required> 
        </div>
        <button type="submit" name="submit" class="btn btn-primary" id="button" style="color:black">Add address</button>
        <button type="reset" name="reset" class="btn btn-warning" style="background-color:rgb(240, 222, 103)">Refresh</button>
        </div>
    </form>


</div>
    
  </body>
</html>
