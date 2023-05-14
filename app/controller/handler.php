<?php
    use App\Model\ModelUsuario;

    require_once("../../autoload.php");
    

    if (isset($_POST['create'])) {
        $whatCreating = $_POST['create'];
        switch ($whatCreating) {
            case "user":
                echo $newUser = (new ModelUsuario())->create($_POST);
                break;
        }
    } elseif (isset($_POST['edit'])) {
        $whatEditing = $_POST['edit'];
        switch ($whatEditing) {
            case "user":
                echo $editedUser = (new ModelUsuario())->edit($_POST, $_POST['allUsers']);
            break;
        }
    }