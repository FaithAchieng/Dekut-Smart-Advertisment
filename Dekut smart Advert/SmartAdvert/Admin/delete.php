<?php
 $Id=$_GET['ID'];
 $con=mysqli_connect('localhost','root','','ecommerce');
 mysqli_query($con,"DELETE FROM `tbluser` WHERE Id= $Id");
header("location:use.php");
?>