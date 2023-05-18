<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css" class="rel">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    
    <form class ="shadow w-450 p-3" 
            action="php/login.php" 
            method="post">
        
        <h4 class ="display-4  fs-1">Login</h4><br>
        <?php if(isset($_GET['error'])){;?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error'];?>
        </div> 
        <?php }?>


        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" 
                        class="form-control"
                        name="uname"
                        value="<?php (isset($_GET['uname']))? $_GET['uname']:
                            ""?>">
        </div>

        <div class="mb-3">
            <label class="form-label">password</label>
            <input type="Password" 
                    class="form-control"
                    name="pass">
        </div>
            
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="register.php" class="link-secondary">Sign Up</a>
    </form>
    </div>
</body>
</html>