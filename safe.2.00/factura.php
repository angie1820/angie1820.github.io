
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Assets/factura_estilos.css">
    
    
    <title>Factura</title>


<script>



  var idCliente;
  var nombreCliente ;
  var direccionCliente; 
  var telefonoCliente;
  var nombreProducto;
  var precio;
  var cantidad;
  var total;
  var subtotal;
  var subtotalP=0;
  var fecha= new Date();
  var imprimir;
  var numero_Factura=0;


function generarFactura(){

    

  idCliente=document.getElementById("idCliente").value;
  nombreCliente=document.getElementById("nombreCliente").value;
  direccionCliente=document.getElementById("direccionCliente").value;
  telefonoCliente=document.getElementById("telefonoCliente").value;
  
 
  
  document.write(fecha.getDate() + "/" + (fecha.getMonth()+1) + "/" + fecha.getFullYear()+"</br>"+"</br>"+"</br>");
  document.write("Identificacion del Cliente:"+'&nbsp;'+idCliente+"<br>"+"<br>");
  document.write("Nombre del Cliente:"+'&nbsp;'+nombreCliente+"<br>"+"<br>");
  document.write("Direccion:"+'&nbsp;'+direccionCliente+"<br>"+"<br>");
  document.write("Telefono:"+'&nbsp;'+telefonoCliente+"<br>"+"<br>"+"<br>");
  
  
for (subtotal=0; nombreProducto != "*"; subtotal++) {


nombreProducto=prompt('Ingrese Nombre del Producto');
document.write("Nombre Producto:  "+'&nbsp;'+nombreProducto+'&nbsp;'+'&nbsp;');

precio=parseFloat(prompt('Ingrese Precio'));
document.write("Precio:  "+'&nbsp;'+precio+'&nbsp;'+'&nbsp;');

cantidad=parseInt(prompt('Ingrese Cantidad'));
document.write("Cantidad:  "+'&nbsp;'+cantidad+'&nbsp;'+'&nbsp;');


nombreProducto=prompt('Ingrese "*" Para terminar o cualquier tecla para continuar');

  subtotal=precio*cantidad;
  subtotalP=subtotalP+parseInt(subtotal);
  total=subtotalP;
  

  document.write("SubTotal :"+'&nbsp;'+subtotal+"<br>"+"<br>"+"<br>");
  

} 
document.write("Subtotal : "+'&nbsp;'+subtotalP+"<br>"+"<br>");
document.write("Total :"+'&nbsp;'+total+"<br>"+"<br>");
document.write('<button onclick="window.print()">Imprimir Factura</button>');

}

generarFactura()


</script>




</head>
<body>
<div class="factura_frente">


<img class="logo" src="Assets/img/Logo_quality.png" alt="logo">
<h2>Factura</h2>

    Numero Id <br><input type="text" name="idCliente" id="idCliente" placeholder="idCliente"/><br><br>
    Nombre Cliente <br><input type="text" name="nombreCliente" id="nombreCliente" placeholder="Nombre"/><br><br>
    Direccion <br><input type="text" name="direccionCliente" id="direccionCliente" placeholder="Direccion"/><br><br>
    Telefono <br><input type="text" name="telefonoCliente" id="telefonoCliente" placeholder="Telefono"/><br><br>
    <center><input type="button"  name="Continuar" onclick="generarFactura()"   value="Continuar"/> </center>
</div>
</body>
</html>