<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <style>
    
  </style>

</head>
<body >

<nav  class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand text-white">
        <img  src="../images/compu2.png">
  </a>
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="{{ url('/suscriber') }}">Inicio</a>
      </li>
       
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Todos los Temas 
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @foreach($categoria as $comen)
        
          <a class="dropdown-item"  href="{{route('Categoria.show',$comen->id)}}">{{$comen->Nombre}}</a>
        
        
        @endforeach  
           
        </div>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="#">Califica</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">
          <h1> </h1>
        
        </a>
      </li>
      
    </ul>
    <form class="form">
       
       
      
       

   </form>
  </div>
</nav>
    
            
</div>



@yield('cabecera');


@yield("cuerpo");


@yield("pie");
 
 
</body>
</html>