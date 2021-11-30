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



$sql= "INSERT INTO formulario(idmatricula, nombre, apellido, grupo, correo, contraseña, comentario)
 VALUES ('$idmatricula','$nombre','$apellido','$grupo','$correo','$contraseña','$comentario')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: formulario.php");
    
    
}else {
}
?>