<?php
use App\Model\ModelUsuario;

    require_once("../../autoload.php");

    $whatCreating = $_POST['create'];
    
    switch ($whatCreating) {
        case "user":
            echo $newUser = (new ModelUsuario())->create($_POST);    
        break;
    }
