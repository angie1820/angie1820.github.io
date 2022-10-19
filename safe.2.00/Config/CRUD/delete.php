<?php

   $conexion=mysqli_connect("localhost","root","","safeshopping");


$Client_ID=$_GET['id'];

$sql="DELETE FROM clientes  WHERE Client_ID='$Client_ID'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
