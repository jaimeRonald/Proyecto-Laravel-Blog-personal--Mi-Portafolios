<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
     <style type="text/css">
     *{

    margin:0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: sans-serif;
}


footer{
    background: #202020;
    color: white;
    width: 100%;
}

.pie{
    color: white;
} 
         

a.NombreEmpresa {
  font-family: Florence,cursive;
  font-size: x-large;
  font-weight: bold;
  color: #CFB1D9;
 

}        
 
     </style>

</head>
<!-- CUERPO PRINCIPAL  -->
<body>

  <header>   

    <nav  class="navbar navbar-expand-lg navbar-dark" style="background-color: #1C7E85">
         
        <a class="navbar-brand text-white">
            <img  src="../../images/compu2.png">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
 
             <li>
               <a href="{{url('/dia')}}" class="NombreEmpresa">MundoWebTec</a>
             </li>
              <p style="color: #1C7E85">.....</p>
             
          <li class="nav-item">

             <a class="nav-link" href="{{url('/dia')}}">Inicio</a>
          </li>
          <li class="nav-item">

             <a class="nav-link" href="{{url('/foroPrincipal')}}">Sistema en C#</a>
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

        </ul>

         <form class="form-inline my-2 my-lg-0" method="post"  action="{{url('search')}}">
          <input class="form-control mr-sm-2" type="search" name="search" placeholder="Buscar" >
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
          <button class="btn btn-warning my-2 my-sm-0" style="color: #2A8357" type="submit">Buscar</button>
        </form>


     

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Salir') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                     </div>
                </li>
            @endguest


        </ul>

       
    </div>

<form class="form">





</form>
</div>
</nav>


  
  
</header>

<main class="py-4">
          @yield('content') 
</main>

 

<section class="container-fluid">

  <div class="row">
  

  <article class="col-xs-12 col-md-9">
    @yield('article')
  </article>

   <aside class="col-xs-12 col-md-3">
    @yield('aside')
    <h3>Ronald Visitacion</h3>
    <p>Programador,estudiante y apasionado por el mundo de la programacion</p>
     
    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
      <div class="card-header">Articulos</div>
      <div class="card-body">
        <h5 class="card-title"><a href="#">Bases para enteder mejor SQL</a></h5>
        <p class="card-text text-white">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
      </div>
       <div class="card-body">
        <h5 class="card-title"><a href="#">Maquetacion de una pagina web simple</a></h5>
        <p  class="card-text text-white">Some quick example text to build on the panel title and make up the bulk of the panel's content.</p>
      </div>
    </div>
  </aside>
</div>
</section>

 
 <footer   style="background-color:#7F8C8D" >
   @yield('footer')
   <br>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">MundoWebTec</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Aqui enontraras variada información sobre el apasionante mundo de la programación en diferentes lenguajes de programación C# Java,PHP, SQL y mas </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Temas especificos</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="pie" href="#!">Desarrollo web</a>
        </p>
        <p>
          <a class="pie" href="#!">Sistemas inteligentes</a>
        </p>
        <p>
          <a class="pie" href="#!">backend y frontend</a>
        </p>
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Enlaces útiles</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p >
         <img style="height: 40px;"  src="../../images/linkedin.png">
          <a class="pie" href="https://www.linkedin.com/in/jaime-visitacion-024731137">Linkedin</a>
        </p>
        <p >
            <img  style="height: 40px;" src="../../images/whatsapp.png">
          <a class="pie"  href="https://wa.link/42ok32">Whatsapp</a>
        </p>
       
         <p class="pie"><img  src="../../images/facebook48.png">
          <a class="pie"  href="#!">Facebook</a>
        </p>
         <p>
          <img  src="../../images/twitter.png">
          <a class="pie"   href="#!">Twitter</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contactos</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i>Trujillo, La Libertad, Perú</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> jaimeronald90@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +51 933492512</p>
         

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MundoWebTec.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->



 
    
</body>
</html>
