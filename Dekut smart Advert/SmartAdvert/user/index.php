<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include'header.php';
    ?>
</head>
<body style="background-image: url(../Pictures/purple-1266601_1920.jpg);">
    <div class="container-fluid">
        <div class="col-md-12">

        
       <div class="row">

   <h1 class=" text-center my-3" style="color: violet;">Home</h1> 
   <?php
  $con=mysqli_connect('localhost','root','','ecommerce');
   $Record=mysqli_query($con,"SELECT * FROM tblproduct");
    while($row=mysqli_fetch_array($Record)){
  $check_page=$row['Pcategory'];
  if ($check_page==='Home') {
  
  
  echo"
  <div class='col-md-6 col-lg-4 m-auto mb-3'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[Pimage]' class='card-img-top' >
  <div class='card-body text-center'>
    <h5 class='card-title text-bg-dark p-3 fs-4 fw-bold'>$row[Pname]</h5>
    <p class='card-text  fs-4 fw-bold'>$row[Pprice]</p>
    <p class='card-text  fs-4 fw-bold'>$row[Description]</p>
    <p class='card-text  fs-4 fw-bold'>$row[Location]</p>
    
  </div>
</div>
</div>
    ";  
}
}
?>

</div>

</div>
</div>
<?php 
include'footer.php';
?>
</body>
</html>