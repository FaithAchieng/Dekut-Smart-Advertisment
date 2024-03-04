<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
  <script src="https://kit.fontawesome.com/0b623e78a2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto shadow border border-info">
                <p class="text-primary text-center fs-3 fw-bold my-3">User Login</p>
                <form action="login1.php" method="post">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" name="name" placeholder="Enter Username or Email" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="">UserPassword:</label>
                        <input type="password" name="password" placeholder="Enter Username" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                    <button class="w-100 bg-danger fs-4 text-white">LOGIN</button>
                    </div>
                    <div class="mb-3">
                    <button name="submit" class="w-100 bg-primary fs-4 text-white"><a href="register.php"></a>REGISTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>