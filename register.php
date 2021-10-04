<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include "header.php";

        if(!empty($_POST["submit"])){
            $user = $_POST["user"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];

            $usermodel = new UserModel($user, $email, $pass);
            $userHandler->insert_data($usermodel->insert_data());
            header("location:dashboard/");
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            SchM
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link " href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Students</a>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link " href="login.php">Sign in</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active"  aria-current="page" href="register.php">Sign Up</a>
            </li>
        </ul>
        
    </div>
    </nav>
    <div class="container-sm p-5 w-25">
        <form action="register.php" method="post">
            <h1>Register</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="user" id="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="passw" class="form-label" >Password</label>
                <input type="password" name="pass" id="passw" class="form-control" required>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block w-100">Register</button>
            
        </form>
        
    </div>
</body>
</html>