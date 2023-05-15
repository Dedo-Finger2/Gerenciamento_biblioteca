<?php
    use App\Controller\ControllerUsuario;

    require_once("../../autoload.php");

    // Actions done with creation
    if (isset($_POST['create'])) {

        switch ($_POST['create']) {
            case "user":
                $id = $newUser = (new ControllerUsuario())->createUser($_POST);
                echo "Data saved sucefully! ID: " . $id;
            break;
        }
    } 
    
    // Actions done with editing
    if (isset($_POST['edit'])) {

        switch ($_POST['edit']) {
            case "user":
                $id = $editedUser = (new ControllerUsuario())->editUser($_POST, $_POST['allUsers']);
                echo "Data saved sucefully! ID: " . $id;
            break;
        }
    }


    // Actions done with deleting [SOON]

    // Actions done with list [SOON]

    ?>
    <script>
        // Return to the main screen after 1.8 sec
        setTimeout(function () {
            window.location.href = '../../index.html';
        }, 1800); 
    </script>