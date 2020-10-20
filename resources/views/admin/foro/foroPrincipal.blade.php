<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>


      





   @extends('layouts.app')

    @section('content')
    @endsection
    

    @section('article')
    <div class="container" >

     <!-- CUANDO SI SE ENCONTRO FORO  -->
      

     

      <h3 class="card-title"></h3>
      
 
      <a href="#" class="card-link">Deja un comentario</a><br>
      <h9></h9>
      <h1>Sistema para ventas implementado en C# con emisión de comprobabante de pago</h1>
      <p>Use C# para la implementación del sistema y como gestor de base de datos a SQL Server 
Dentro de los análisis de requerimientos podemos añadir que el usuario requiere un sistema en el cual se puede emitir un comprobante de pago para una venta </p>
<p>Diagrama entidad –relación de la base de datos :</p>
<img style="width: 700px; height: 400px" src="../../images/proyCchar0.png"><br><br>
</p>
 
<p>
Inicio de sesión: se muestra la ventana donde ingresamos un usuario valido </p>
   <img    src="../../images/proyCchar8.png"  ><br><br>
 
<p>Ahora podemos realizar una venta, nos vamos a la opción de ventas aquí nos dirigimos a  usuario y elegimos uno ya registrado; luego de seleccionar usuario seleccionamos un producto para añadir al carrito de compras </p>
 <img src="../../images/proyCchar3.png"><br><br>
<p>Aquí seleccionamos un producto  de esa manera vamos añadiendo al carrito de compras, recordamos que es un tienda de productos para vehículos motorizados.</p> 
<img src="../../images/proyCchar4.png"><br><br>
<p>Es aquí donde recién podemos ingresar la cantidad por producto (disminuir o agregar)</p>
<img src="../../images/proyCchar5.png"><br><br>
<p>Cuando ya nos aparece la “insertado “  es donde podemos ya emitir el comprobante de pago ; no olvidemos ingresar también el modo de pago (tarjeta o al contado)</p>
<img src="../../images/proyCchar6.png"><br><br>

<p>La factura esta emitida, recordar que si no hay stock de un producto se podrá seleccionar pero te mostrar un mensaje de “no suficiente stock” y en la factura solo se mostrara solo los productos con stock </p>
<img src="../../images/proyCchar7.png"><br><br><br><br>
      
      
@endsection

  @section('aside')

  @endsection


  @section('footer')
  <div class="container"></div>
  @endsection

	
 
   


 
</body>

</html>