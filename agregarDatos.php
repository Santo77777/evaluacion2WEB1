<?php

    include('baseDatos.php');


    if(isset($_POST["btnSub"])){

        $name=$_POST['nameUser'];
        $email=$_POST['emailnameUser'];
        $password=$_POST['passUser'];



        //Consulta
        $consulta="INSERT INTO usuarios(name, email, password) values('$name', '$email', '$password') ";

        //Crear el objeto de la BD
        $operacion= new BaseDatos();

        $resultado=$operacion->alterarBaseDatos($consulta);

        if($resultado){
            echo("Sign Up Successfully");
        }else{
            echo("Sign Up Unsuccessful");
        }


    }else{

        echo("Donen´t press Buttom");

    }




?>