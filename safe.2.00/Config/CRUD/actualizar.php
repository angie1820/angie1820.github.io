<?php 
 
$conexion=mysqli_connect("localhost","root","","safeshopping");
   

$Client_ID=$_GET['Client_ID'];

$sql="SELECT * FROM clientes WHERE Client_ID='$Client_ID'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="Client_ID" value="<?php echo $row['Client_ID']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Client_Nombre" placeholder="Client_Nombre" value="<?php echo $row['Client_Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Client_Contrasena" placeholder="Client_Contrasena" value="<?php echo $row['Client_ContraseÑa']  ?>">
                                <input type="text" class="form-control mb-3" name="Client_Correo_Electronico" placeholder="Client_Correo_Electronico" value="<?php echo $row['Client_Correo_Electronico']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>