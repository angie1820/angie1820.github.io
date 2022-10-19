<?php 
$usuario=$_POST['Client_Nombre'];
$contraseña=$_POST['Client_Contraseña'];
session_start();
$_SESSION['Client_Nombre']= $usuario;

$conexion=mysqli_connect("localhost","root","","safeshopping");

$consulta= "SELECT*FROM clientes where Client_Nombre='$usuario' and Client_Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.php");

}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1>EROR EN EL INGRESO</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);

