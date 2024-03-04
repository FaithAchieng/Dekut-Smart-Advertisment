<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
  <script src="https://kit.fontawesome.com/0b623e78a2.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
   
$id=$_GET['ID'];
include 'config.php';
$Record=mysqli_query($con,"SELECT * FROM `tblproduct` WHERE id=$id");
$data=mysqli_fetch_array($Record);

?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">

         
    <form action="update.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Product Update</p>
<div class="mb-3">
  <label  class="form-label">Business Name</label>
  <input type="text" value="<?php echo $data['Pname'] ?>"  name="Pname" class="form-control"  placeholder="Enter Product Name">
</div>
<div class="mb-3">
  <label  class="form-label">Business Description</label>
  <input type="text" name="Description" class="form-control"  placeholder="Enter Business Description">
</div>
<div class="mb-3">
  <label  class="form-label">Business Location</label>
  <input type="text" name="Location" class="form-control"  placeholder="Enter Business Location">
</div>
<div class="mb-3">
  <label  class="form-label">Product Price</label>
  <input type="text" value="<?php echo $data['Pprice'] ?>" name="Pprice" class="form-control"  placeholder="Enter Product Price">
</div>
        <div class="mb-3">
          <label  class="form-label">Add product Image</label>
          <input type="file"  name="Pimage" class="form-control" ><br>
          <img src="<?php echo $data['Pimage'] ?>" alt="" style="height: 100px;">
        </div>
        <div class="mb-3">
          <label  class="form-label">Select Page Category</label>
          <select class="form-select" name="Pages">
          <option value="Home">Home</option>
          <option value="Clothing">Clothing</option>
          <option value="Services">Services</option>
          <option value="FoodStuff">FoodStuff</option>
          <option value="Gadgets">Gadgets</option>
      
        </select>
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <button  name="update"class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
            </form>
            </div>
                </div>
         </div>
<!--php update code-->
  <?php
   if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $product_name = $_POST['Pname'];
    $description=$_POST['Description'];
    $location=$_POST['Location'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    
    $imagefilename = $product_image['name'];
    $imagefileerror = $product_image['error'];
    $imagefiletemp = $product_image['tmp_name'];
    $filename_separate = explode('.', $imagefilename);
    $file_extension = strtolower($filename_separate[1]);
    $extension = array('jpeg', 'jpg', 'png');
    $product_category=$_POST['Pages'];
    if(in_array($file_extension, $extension)){
        $upload_image = 'Uploadimage/'.$imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
    } else {
        echo "Invalid file format. Only JPEG, JPG, and PNG files are allowed.";
    }
    include 'config.php';
    mysqli_query($con,"UPDATE `tblproduct` SET `Pname`='$product_name',`Pprice`='$product_price',`Pimage`='$upload_image',`Pcategory`='$product_category' WHERE id=$id");
    header("location:index.php");
   }
  ?>
</body>
</html>



