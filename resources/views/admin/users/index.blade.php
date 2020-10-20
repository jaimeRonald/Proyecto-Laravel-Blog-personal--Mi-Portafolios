<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body bgcolor="#FFFFCC">


  @extends("layouts.plantilla");

  


  @section("cuerpo");


  

  
  <div class="container">

    <div align="center">
  <li> </li>
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" >
          <div class="carousel-item " style="height: 100vh">
            <img src="../images/carr1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" >
              <h3  >Data center</h3>
              <h4>vida</h4>
            </div>
          </div>
          <div class="carousel-item" style="height: 100vh">
            <img src="../images/carr2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Seguridad informatica</h3>
              <h4>segurida en la administracion de bases de datos .</h4>
            </div>
          </div>
          <div class="carousel-item active" style="height: 100vh">
            <img src="../images/carr3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">

              <p>Conoscamos el fascinante mundo  de este lenguage de programacion .</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


    </div>



   <?php

    
    ?>

    <div style="float:left;position:absolute;left:120px;">
      <table border="1">
       <tr><td>lograr lo que se propone <br></td></tr>
       <tr><td>Ella es una chica mala con buen corazon<br>  
       <tr> <td>suave pero fuerte <br></td></tr>
       </table>
     </div>


     <div style="float:left; position:absolute; left:350px; height: 50px ;width: 50%">
      <table border="1"  align="center">
       @foreach($foros as $foro)
       <tr>
        <td><a href="{{route('foro.show',$foro->id)}}">{{$foro->titulo }}</a></td>

        <td> {{$foro->created_at}}</td>
        <td> cantidad de mensajes </td>
      </tr>


      @endforeach
    </table>
    @endsection

  </div>


</body>

</html>