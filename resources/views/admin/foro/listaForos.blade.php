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
            @foreach($foroLike as $fo)
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
     

     
  @endsection

  @section('aside')

  @endsection


  @section('footer')
  <div class="container"></div>
  @endsection

	
 
   


 
</body>

</html>