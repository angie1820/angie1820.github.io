<?php

$conexion=mysqli_connect("localhost","root","","safeshopping");


$Client_ID=$_POST['Client_ID'];
$Client_Nombre=$_POST['Client_Nombre'];
$Client_Contraseña=$_POST['Client_Contraseña'];
$Client_Correo_Electronico=$_POST['Client_Correo_Electronico'];

$sql="UPDATE clientes SET  Client_Nombre='$Client_Nombre',Client_Contraseña='$Client_Contraseña',Client_Correo_Electronico='$Client_Correo_Electronico' WHERE Client_ID='$Client_ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>