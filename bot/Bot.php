<?php
//Funcion de conexion a BD
function conectarBD(){
    $servidor="ls-09e393cc458d8c9984b7ce26cc0c199c2bf93ce5.cfv20klo2ytv.us-east-1.rds.amazonaws.com";
    $baseDatos="sis_venta";
    $usuario="dbmasteruser";
    $contra="SoyForaneo27";
  
    $conexion= mysqli_connect($servidor,$usuario,$contra,$baseDatos) or die ("No se pudo conectar");
  
    return $conexion;
  }

  function consultarUsuarios($question){
    $conex=conectarBD();
    $selectUsu="SELECT * FROM ventaseshas where idVenta = $question;";
  
  
    try {
      $rsUsuarios=mysqli_query($conex,$selectUsu);
      mysqli_close($conex);
      return $rsUsuarios;
  
    } catch (\Exception $e) {
      die('Exception capturada: '.$e->getMessage() );
    }
  }

  function Proveedores($question){
    $conex=conectarBD();
    $selectProve="SELECT * FROM proveedor;";
  
  
    try {
      $rsProv=mysqli_query($conex,$selectProve);
      mysqli_close($conex);
      return $rsProv;
  
    } catch (\Exception $e) {
      die('Exception capturada: '.$e->getMessage() );
    }
  }


  
class Bot
{
    private $name = "Omarket Bot";
    private $gender = "Hombre";

    
      

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function hears($message, callable $call)
    {
        $call(new Bot);
        return $message;
    }

    public function reply($response)
    {
        echo $response;
    }

    public function provedores(){
        $conexion = new mysqli("ls-09e393cc458d8c9984b7ce26cc0c199c2bf93ce5.cfv20klo2ytv.us-east-1.rds.amazonaws.com","dbmasteruser","SoyForaneo27","sis_venta");
            $query="select proveedor from proveedor";
            $resultado=$conexion->query($query);
            while($row=$resultado->fetch_assoc()){
                echo  $row['proveedor'];
            }
    }

    public function ask($question, array $questionDictionary)
    {
        $question = trim($question);
        foreach ($questionDictionary as $questions => $value) {
            if ($question == $questions) {
                return $value;
            }
        }
    }
}
