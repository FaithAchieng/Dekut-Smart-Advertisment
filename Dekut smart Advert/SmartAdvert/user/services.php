<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <?php
    include'header.php';
    ?>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">

        
       <div class="row">

   <h1 class="text-primary text-center my-3">Services</h1> 
   <?php
  $con=mysqli_connect('localhost','root','','ecommerce');
   $Record=mysqli_query($con,"SELECT * FROM tblproduct");
    while($row=mysqli_fetch_array($Record)){
  $check_page=$row['Pcategory'];
  if ($check_page==='Services') {
    # code...
  
  echo"
  <div class='col-md-6 col-lg-4 m-auto mb-3'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[Pimage]' class='card-img-top' >
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[Pname]</h5>
    <p class='card-text text-danger fs-4 fw-bold'>$row[Pprice]</p>
    <p class='card-text text-danger fs-4 fw-bold'>$row[Description]</p>
    <p class='card-text text-danger fs-4 fw-bold'>$row[Location]</p>
    <input type='number' value=' min='1' max'20'' placeholder='Quantity'><br><br>
    <input type='submit' class='btn btn-warning text-white w-100 ' value='Add to Cart'>
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
</body>
</html>