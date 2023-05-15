<?php
use App\Model\ModelUsuario;

    require_once("../../autoload.php");

    $testeArray = array();

    //var_dump($teste = (new ModelUsuario())->create($testeArray));
    //var_dump($teste = (new ModelUsuario())->listAll());
    echo $teste = (new ModelUsuario())->delete(2);

