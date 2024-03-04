<?php
 echo $Id=$_GET['ID'];
 include'config.php';
 mysqli_query($con,"DELETE FROM `tblproduct` WHERE id = $Id");
 header("location:index.php");
?>