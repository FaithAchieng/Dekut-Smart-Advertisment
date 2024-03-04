<?php

if (isset($_POST['submit'])) {
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Number=$_POST['number'];
    $Password=$_POST['password'];
    $con=mysqli_connect('localhost','root','','ecommerce');
    
    $Dub_Email=mysqli_query($con,"SELECT * FROM `tbluser` WHERE Email='$Email'");
    $Dub_username=mysqli_query($con,"SELECT * FROM `tbluser` WHERE Username='$Name'");
    if (mysqli_num_rows($Dub_Email)) {
        echo"
         <script>
         alert('Email Already Exists');
         window.location.href='register.php';
         </script>

        ";
    }
    if (mysqli_num_rows($Dub_username)) {
        echo"
         <script>
         alert('UserName Already Exists');
         window.location.href='register.php';
         </script>

        ";
    }else{
        mysqli_query($con,"INSERT INTO `tbluser`(`Username`, `Email`, `Number`, `Password`) VALUES ('$Name','$Email','$Number','$Password')");
        echo"
         <script>
         alert('Registered Successfully');
         window.location.href='login.php';
         </script>

        ";
    }
}
?>