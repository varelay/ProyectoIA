<?php

$conex = new mysqli("localhost","root","","sis_venta");

if ($conex){
    echo("Si hay conexión");
} else {
    echo("No hay conexión");
}
