<?php

    /**
     * Note: Connection working + Exception also working.
     */

    require_once("../config/Conn.class.php");

    $test = (new App\Model\Conn())::connect();
    var_dump($test);
