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
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">

         
    <form action="insert.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Advertisment Detail</p>
<div class="mb-3">
  <label  class="form-label">Business Name</label>
  <input type="text" name="Pname" class="form-control"  placeholder="Enter Business Name">
</div>
<div class="mb-3">
  <label class="form-label">Business Description</label>
  <textarea name="Description" class="form-control" placeholder="Enter Business Description"></textarea>
</div>
<div class="mb-3">
  <label class="form-label">Business Location</label>
  <textarea name="Location" class="form-control" placeholder="Enter Business Location"></textarea>
</div>
<div class="mb-3">
  <label class="form-label">Product Price</label>
  <textarea name="Pprice" class="form-control" placeholder="Enter Product Price"></textarea>
</div>

        <div class="mb-3">
          <label  class="form-label">Add Business Image</label>
          <input type="file" name="Pimage" class="form-control" >
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
        <button  name="submit"class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
            </form>
            </div>
                </div>
         </div>
<!--fetch data-->
  <div class="container ">
    <div class="row">
      <div class="col-md-8 m-auto">

   
    <table class="table border border-warning table-hover border my-5">
<thead>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Location</th>
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
    <th>Update</th>
</thead>

<tbody>
        <?php
        include'config.php';
        $Record=mysqli_query($con,"SELECT * FROM `tblproduct`");


          while($row=mysqli_fetch_array($Record)) 

          echo"
          <tr>
          <td>$row[id]</td>
          <td>$row[Pname]</td>
          <td>$row[Description]</td>
          <td>$row[Location]</td>
          <td>$row[Pprice]</td>
          <td><img src='$row[Pimage]'height='90px' width='200px'></td>
          <td>$row[Pcategory]</td>
          <td><a href='delete.php? ID=$row[id]' class='btn btn-danger'>Delete</a></td>
          <td><a href='update1.php? ID=$row[id]'  class='btn btn-warning'>Update</a>
          </td>
        </tr>

          ";
        ?>


</tbody>
</table>
</div>
    </div>
  </div>

</body>
</html>