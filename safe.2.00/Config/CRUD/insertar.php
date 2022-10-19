<?php
   $conexion=mysqli_connect("localhost","root","","safeshopping");


$Client_ID=$_POST['Client_ID'];
$Client_Nombre=$_POST['Client_Nombre'];
$Client_Contraseña=$_POST['Client_Contraseña'];
$Client_Correo_Electronico=$_POST['Client_Correo_Electronico'];


$sql="INSERT INTO clientes VALUES('$Client_ID','$Client_Nombre','$Client_Contraseña','$Client_Correo_Electronico')";


if($query){
    Header("Location: cliente.php");
    
}else {
}
?>