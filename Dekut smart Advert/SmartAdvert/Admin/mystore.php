<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
  <script src="https://kit.fontawesome.com/0b623e78a2.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}
?>

<body style="background-image: url(/Pictures/purple-1266601_1920.jpg);">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"><h1>MyStore</h1></a>
    <span>
    <i class="fa-solid fa-user-tie"></i>
    Hello, <?php echo $_SESSION['admin'];?> |
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="form/logout.php"class="text-decoration-none">Logout</a>|
    <a href="../user/index.php"class="text-decoration-none">Userpanel</a>
    </span>
    
  </div>
</nav>
                <div>
                  <h2 class="text-center">Dashboard</h2>
                </div>
                <div class=" col-md-6 bg-danger text-center m-auto">
                  <a href="product/index.php"class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
                  <a href="user.php"class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
                  <a href="user.php"class="text-white text-decoration-none fs-4 fw-bold px-5">Vendor Application</a>
                </div>
</body>
</html>