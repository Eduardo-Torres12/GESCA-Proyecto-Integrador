<?php

include("../config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $correo = trim($_POST["correo"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Verificar si el correo ya existe
    $consulta = $conn->prepare("SELECT id FROM usuarios WHERE correo=?");
    $consulta->bind_param("s",$correo);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if($resultado->num_rows>0){
        echo "existe";
        exit;
    }

    $sql = $conn->prepare("INSERT INTO usuarios(nombre,correo,password) VALUES(?,?,?)");
    $sql->bind_param("sss",$nombre,$correo,$password);

    if($sql->execute()){
        echo "ok";
    }else{
        echo "error";
    }

}
?>