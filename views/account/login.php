
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
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
      <form method="post" action="index.php?controller=login&action=checklogin">
        <?php 
            if(isset($error)) {
                echo $error;
            }
        ?>
        <h1 style="text-align:center">LOGIN</h1>
        <div class="mb-3">
          <label for="username" class="form-label"><b>Username</b></label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label"><b>Password</b></label>
          <input type="text" id="password" name="password" class="form-control" placeholder="Enter password" required> 
        </div>
        <button type="submit" name="submit" class="btn btn-primary" id="button" style="color:black">Login</button>
        <button type="reset" name="reset" class="btn btn-warning" style="background-color:rgb(240, 222, 103)">Refresh</button>
      </form>
</div>
</body>
</html>
    

