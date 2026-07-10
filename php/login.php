<?php

session_start();

include("../config/conexion.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {


    $correo = $_POST["correo"];
    $password = $_POST["password"];



    $sql = "SELECT * FROM usuarios WHERE correo='$correo'";

    $resultado = $conn->query($sql);



    if($resultado->num_rows > 0){


        $usuario = $resultado->fetch_assoc();



        if(password_verify($password, $usuario["password"])){


            $_SESSION["id"] = $usuario["id"];
            $_SESSION["nombre"] = $usuario["nombre"];
            $_SESSION["correo"] = $usuario["correo"];


            echo "ok";


        }else{


            echo "password";


        }



    }else{


        echo "correo";


    }


}

?>