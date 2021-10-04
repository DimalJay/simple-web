<?php 
    include "handler.php";
    include "model.php";

    $db = new Database("proj2");
    $userHandler = new UserHandler($db);
    
?>