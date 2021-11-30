<?php

include("conexion.php");
$con=conectar();

$idmatricula=$_POST['idmatricula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$grupo=$_POST['grupo'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$comentario=$_POST['comentario'];


$sql="UPDATE formulario SET  nombre='$nombre',apellido='$apellido',grupo='$grupo',correo='$correo',contraseña='$contraseña',comentario='$comentario' WHERE idmatricula='$idmatricula' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: formulario.php");
    }
?>