<?php
include("conexion.php");
if(count($_POST) > 0 )
{
    $nombre =  $_POST['nombre'];
    $correo =  $_POST['correo'];
    $genero =  $_POST['genero'];
    $ciudad =  $_POST['ciudad'];
    $sql = "INSERT INTO infoformulario(nombre,correo,genero,ciudad)VALUES ('$nombre', '$correo', '$genero', '$ciudad')";
        $conn->exec($sql);
}
       header('Location: index.php');
?>