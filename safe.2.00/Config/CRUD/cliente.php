<?php 
   $conexion=mysqli_connect("localhost","root","","safeshopping");
    

    $sql="SELECT *  FROM clientes";
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Client_ID" placeholder="Client_ID">
                                    <input type="text" class="form-control mb-3" name="Client_Nombre" placeholder="Client_Nombre">
                                    <input type="text" class="form-control mb-3" name="Client_Contraseña" placeholder="Client_Contraseña">
                                    <input type="text" class="form-control mb-3" name="Client_Correo_Electronico" placeholder="Client_Correo_Electronico">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Client_ID</th>
                                        <th>Client_Nombre</th>
                                        <th>Client_Contraseña</th>
                                        <th>Client_Correo_Electronico</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['Client_ID']?></th>
                                                <th><?php  echo $row['Client_Nombre']?></th>
                                                <th><?php  echo $row['Client_Contraseña']?></th>
                                                <th><?php  echo $row['Client_Correo_Electronico']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['Client_ID'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['Client_ID'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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