<?php

$conexion = new mysqli("ls-09e393cc458d8c9984b7ce26cc0c199c2bf93ce5.cfv20klo2ytv.us-east-1.rds.amazonaws.com","dbmasteruser","n.cf^AgcyiETV(?t==*1}6F[Ky`uwV$G","sis_venta");

if ($conex){
    echo("Si hay conexión");
} else {
    echo("No hay conexión");
}
