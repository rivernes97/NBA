<?php

include ('./funciones.php');

$mysqli = conectaBBDD();
$resultadoQuery = $mysqli ->query("SELECT * FROM jugadores");

