<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
  <script src="https://kit.fontawesome.com/0b623e78a2.js" crossorigin="anonymous"></script>
</head>
<body style="background-image: url(/Pictures/purple2.jpg);">
<div class="container">
                <div class="row">
                    <div class="col-md-6 shadow bg-white p-3 font-monospace m-auto border border-primary mt-3">

                
            <form action="login1.php" method="post">
            <div class="mb-3">
        <p class="text-center fw-bold fs-3 text-warning">Login</p>
        <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" name="username" class="form-control"  placeholder="Enter username">
        </div>
        <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" name="userpassword" class="form-control"  placeholder="Enter Password">
        </div>
               
                <button  class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button>
                    </form>
                    </div>
                        </div>
 </div>
</body>
</html>