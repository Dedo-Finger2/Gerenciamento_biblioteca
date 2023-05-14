<?php
use App\Model\ModelUsuario;

    require_once("../../autoload.php");

    $testeArray = array();

    var_dump($teste = (new ModelUsuario())->create($testeArray));
