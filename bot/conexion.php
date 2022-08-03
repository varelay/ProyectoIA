<?php

$conexion = new mysqli("ls-09e393cc458d8c9984b7ce26cc0c199c2bf93ce5.cfv20klo2ytv.us-east-1.rds.amazonaws.com","dbmasteruser","SoyForaneo27");

if ($conex){
    echo("Si hay conexión");
} else {
    echo("No hay conexión");
}
