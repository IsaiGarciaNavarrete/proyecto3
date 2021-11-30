<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM formulario";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title> Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <body>
        <?php include("../header.php") ?>
        
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registro</h1>
                                <form action="insertar.php" method="POST">
                                <input type="text" class="form-control mb-3" name="idmatricula" placeholder="idmatricula">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="grupo" placeholder="Grupo">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                                    <input type="text" class="form-control mb-3" name="contraseña" placeholder="Contraseña">
                                    <input type="text" class="form-control mb-3" name="comentario" placeholder="Comentario">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>id</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Grupo</th>
                                        <th>Correo</th>
                                        <th>Contraseña</th>
                                        <th>Comentario</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['idmatricula']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['grupo']?></th>
                                                <th><?php  echo $row['correo']?></th>    
                                                <th><?php  echo $row['contraseña']?></th> 
                                                <th><?php  echo $row['comentario']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row ['idmatricula']  ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row ['idmatricula'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
	
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>