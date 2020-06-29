<?php         


include ('baseDatos.php');


if(isset($_POST["btnSub"])){


    $name=$_POST['deleteUser'];

    //Consulta
    $consulta="DELETE FROM usuarios WHERE name = '$name' ";

    //Crear el objeto de la BD
    $operacion= new BaseDatos();

    $resultado=$operacion->alterarBaseDatos($consulta);

   IF($resultado){
       echo("<br>");
       echo("Successful transaction, data deleted.");
   }else{
       echo("
       Something wrong");
   }


}else{

    echo("Donen´t press Buttom");

}





?>