<style type="text/css">
    html {
        font-family: sans-serif;
    }

    form {
        margin: auto;
        width: 30%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    input, select {
        display: block;
        margin-bottom: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
        box-sizing: border-box;
    }
</style>

<?php

/**
 * Using all classes
 */
use App\Controller\ControllerUsuario;
use App\View\ViewAutor;
use App\View\ViewAutoria;
use App\View\ViewEditora;
use App\View\ViewEmprestimo;
use App\View\ViewLivro;
use App\View\ViewUsuario;

/**
 * Requiring the autoload
 */
require_once("../autoload.php");

    $editionID = $_POST['editionID'];

    switch ($editionID) {
        case "Usuário":
            $form = (new ControllerUsuario())->editForm();
        break;
        
        case "Autor":
            // a
        break;

        case "Editora":
            // a
        break;

        case "Livro":
            // a
        break;

        case "Autoria":
            // a
        break;

        case "Emprestimo":
            // a
        break;
        
        default:
            echo "[ERROR]: Option selected not valid! <a href='../index.html'>Try again...</a>";
    }
?>