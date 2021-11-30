<?php

include("conexion.php");
$con=conectar();

$idmatricula=$_GET['id'];

$sql="DELETE FROM formulario  WHERE idmatricula='$idmatricula'  ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: formulario.php");
    }
?>
