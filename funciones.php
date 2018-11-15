<?php

function conectaBBDD(){
    require('configuracion.php');
    $mysqli = new mysqli($servidor, $bbdd);
    $mysqli -> query("SET NAMES utf8");
    return $mysqli;
}

