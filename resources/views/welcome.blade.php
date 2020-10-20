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


    <div class="container">
       

        
         <div class="row">
            @foreach($sql_foros as $fo)
            <div class="col-xl-6 col-md-6 mb-3">
                  
                <div class="card1" style="width:">
 
                  <img class="card-img-top" src="../../images/{{$fo->rutafoto}}" alt="Card image cap">
                  <div class="card-header">

                       <h1><a  href="{{route('Categoria.edit',$fo->id)}}">{{$fo->titulo}}</a></h1>
                   </div>
                  <div class="card-body">
                    <p class="card-text">{{$fo->descripcion}}</p>
                 </div>
                 
                </div>
            
           
          </div>

          @endforeach    
          
        </div>
          
   
    </div>
     
<nav aria-label="Page navigation example" >
          <p class="text-primary">Mas resultados</p>
          <ul class="pagination" >
            <li class="page-item  {{$_GET['pagina']<=1?'disabled':''}}">
                <a class="page-link" href="dia?pagina={{$_GET['pagina']-1}}">Previous</a></li>

            @for($i=0;$i<$can_de_paginas;$i++)
            <li class="page-item  {{$_GET['pagina']==$i+1?'active':''}}"><a class="page-link" href="dia?pagina={{$i+1}}">{{$i+1}}</a></li>
            @endfor


            <li class="page-item {{$_GET['pagina']>=$can_de_paginas?'disabled':''}}">
                <a class="page-link" href="dia?pagina={{$_GET['pagina']+1}}">Next</a></li>
        </ul>
    </nav>
     
  @endsection

  @section('aside')

  @endsection


  @section('footer')
  <div class="container"></div>
  @endsection
