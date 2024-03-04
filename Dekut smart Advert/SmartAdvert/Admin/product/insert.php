

<?php
include 'config.php';

if(isset($_POST['submit'])){
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
    
    $query = "INSERT INTO `tblproduct`(`Pname`,`Description`,`Location`, `Pprice`, `Pimage`, `Pcategory`) VALUES ('$product_name','$description','$location','$product_price','$upload_image','$product_category')";
    
    if(mysqli_query($con, $query)){
        echo "Product inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>




