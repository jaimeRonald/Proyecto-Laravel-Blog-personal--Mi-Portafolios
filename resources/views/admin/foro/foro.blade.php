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
      @if(isset($foros))

     

      <h2 class="card-title">{{$foros->titulo}}</h2>
      
 
      <a href="#" class="card-link">Deja un comentario</a><br>
      <h9>{{$foros->created_at}}</h9><br>
       <p>{{$foros->descripcion}}</p>
       <img style="width: 400px;height: 400px"  src="../../images/{{$foros->rutafoto}}"  >
      <p><?php echo $foros->contenido;?></p> 
       <img   style="width: 400px;height: 400px"  src="../../images/{{$foros->ruta_imagenes}}" ><br><br>
      
      
      

      <br><br><br>
      <p>Comentarios</p>
      @foreach($users as $val)
      <table  class="table table-bordered">
        <tr>
          <th>{{$val->name}}</th>
          <th>{{$val->created_at}}</th>
        </tr>
        <tr>
          <td colspan="2">{{$val->mensaje}}</td>
        </tr>

      </table>

      @endforeach

      


      @guest
      <?php // NO SE HA LOGEADO ?>
      <form role="form" action="{{ route('login') }}" method="GET">
        <div class="form-group">
          <span class="label label-success" >Ingresa tu comentario</span>
          <input type="text" class="form-control" id="comentario" value="Registrate para dejar tu comentario" readonly> 
        </div>
        <button type="submit" class="btn btn-primary">Regitrarse</button>
      </form>
     <br><br>
      <?php //SI SE HA LOGEADO ?>
      @else 

      <form  method="POST"  action="{{url('mensaje')}}"  accept-charset="UTF-8">



        <div class="form-group">
          <span class="label label-success">Ingresa tu comentario</span>
          <input type="text" class="form-control" id="comentario" name="comentario">
          <input type="hidden" class="form-control" id="comentario" name="foro" value="{{$foros->id}}" >
          <input type="hidden" class="form-control" id="comentario" name="usuario" value="{{ Auth::user()->id }}" >
          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        </div>


        <button type="submit" class="btn btn-primary" >Comentar</button>
      <br>
      </form>

      @endguest

  </div>
    <!-- CUANDO NO ENCONTRO NUNGUN FORO  -->
   @else
        <P>{{$NingunResultado}}</P>
   @endif
@endsection

  @section('aside')

  @endsection


  @section('footer')
  <div class="container"></div>
  @endsection

	
 
   


 
</body>

</html>