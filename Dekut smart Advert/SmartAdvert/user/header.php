<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
  <script src="https://kit.fontawesome.com/0b623e78a2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand" style="color: white;"></a>
    
    <div class="d-flex">
    <a href="index.php" class="home text-decoration-none pe-2"><i class="fa-solid fa-house-user"></i>Home</a>
    <a href="" class="home text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i>Vendor Registration |</a>
    <span class="guest pe-2">
    <i class="fa-solid fa-user"></i>Hello,
    <?php
    session_start();
    if(isset($_SESSION['user'])) {
        echo $_SESSION['user'];
        echo"
        <a href='form/logout.php' class='guest text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Logout</a> |
        ";
    } else {
        echo "Guest";
        echo"
        <a href='form/login.php' class='guest text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Login</a> |
        ";
    }
    ?>
    
   
    <a href="../Admin/mystore.php" class="guest text-decoration-none pe-2">Admin</a>
    </span>
    

</nav>
</div>
</div>

<div class="item">
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="clothing.php" class="text-decoration-none text-white fw-bold fs-4 px-5">CLOTHING</a></li>
        <li><a href="services.php" class="text-decoration-none text-white fw-bold fs-4 px-5">SERVICES</a></li>
        <li><a href="foodstuff.php" class="text-decoration-none text-white fw-bold fs-4 px-5">FOODSTUFF</a></li>
        <li><a href="Gadgets.php" class="text-decoration-none text-white fw-bold fs-4 px-5">GADGETS</a></li>
    </ul>
</div>
</body>
</html>