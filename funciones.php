<?php

function conectaBBDD(){
    require('./configuracion.php');
    $mysqli = new mysqli($servidor, $usuario, $contraseña, $bbdd);
    $mysqli -> query("SET NAMES utf8");
    return $mysqli;
}

