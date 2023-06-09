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

/**
 * Array with the user's request
 */
$creationID = $_POST['creationID'];

/**
 * Checking what the user's request was then executing the right method from the View folder
 */
switch ($creationID) {
    case "Usuário":
        $form = (new ViewUsuario())->createForm();
        break;

    case "Autor":
        $form = (new ViewAutor())->createForm();
        break;

    case "Editora":
        $form = (new ViewEditora())->createForm();
        break;

    case "Livro":
        $form = (new ViewLivro())->createForm();
        break;

    case "Autoria":
        $form = (new ViewAutoria())->createForm();
        break;

    case "Emprestimo":
        $form = (new ViewEmprestimo())->createForm();
        break;

    default:
        echo "[ERROR]: Option selected not valid! <a href='../index.html'>Try again...</a>";
}
?>