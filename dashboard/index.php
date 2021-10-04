<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./../header.php";?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="./../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Dashboard
            </a>

            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link active" href="register.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <?php 
            $users = $userHandler->select_data(UserModel::$select_all);
            for ($i=0; $i < count($users); $i++) { 
                ?>
                <div class="row p-3 list-tile">
                    <div class="col">
                        <div class="col"><b><?php echo $users[$i]->get_username()?></b></div>
                        <div class="col"><?php echo $users[$i]->get_email()?></div>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>