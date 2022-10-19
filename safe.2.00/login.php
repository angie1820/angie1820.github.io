

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    <link rel="stylesheet" href="Assets/css/estilos_login.css">
</head>


<body>

<div class="login-box">
<img class="avatar" src="Assets/img/registrate.png" alt="logo">
<form action="validar.php" method= "post">
<h1>INICIA SESIÓN</h1>

    <!-- NOMBRE DEL USUARIO --> 
<label for="NOMBRE DE USUARIO">NOMBRE DE USUARIO</label>
<input type="text" placeholder="Ingrese su nombre " name="Client_Nombre">

  <!-- CONTRASEÑA --> 
  <label for="CONTRASEÑA">CONTRASEÑA</label>
  <input type="password" placeholder="Ingrese su contraseña" name= "Client_Contraseña">
<center><input type="submit" name="btnIniciar" placeholder="Iniciar Sesion"</center>

</form>



</body>
</html>