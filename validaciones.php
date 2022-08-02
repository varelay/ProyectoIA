<?php

$conexion = new mysqli("localhost","root","","sis_venta");


$id = $_GET['id'];
  echo ($id);

  if($id == 1){
    $val = "Bueno";
  } else {
    $val = "Malo";
  }

  $query= "insert into valoraciones(valoracion) values('$val')";

  $resultado = $conexion -> query($query);

  if($resultado){
    echo "<script>window.location='index.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }