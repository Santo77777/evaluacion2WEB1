<?php

include ('baseDatos.php');


if(isset($_POST["btnSub"])){

    $name=$_POST['serchUser'];



    //Consulta
    $consulta="SELECT * FROM usuarios WHERE name = '$name' ";

    //Crear el objeto de la BD
    $operacion= new BaseDatos();

    $resultado=$operacion->consultarEnBaseDatos($consulta);

   echo("<br>");

   print_r($resultado);


}else{

    echo("Donen´t press Buttom");

}


?>