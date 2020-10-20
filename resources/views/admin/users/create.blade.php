<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body background="#FFFFCC">


   @extends("layouts.plantilla");

   @section('cabecera')


   {!! Form::open(['method' => 'POST','action'=>'AdminUserController@store','files'=>true]) !!}
   <table border="1" align="center">

    <tr>
        <td>{!! Form::label('name', 'Nombre: ') !!}</td>
        <td>{!!  Form::text('name',null,['class' => 'form-control','placeholder'=>'Nombres'] )!!}</td>
    </tr>

    <tr>
        <td>{!! Form::label('password', 'Contraseña: ') !!}</td>
        <td>{!!  Form::text('password',null, ['class'=>'form-control','placeholder'=>'contraseña'])!!}</td>
    </tr>

    <tr>
        <td>{!! Form::label('email', 'Email: ') !!}</td>
        <td>{!!  Form::text('email',null,['class'=>'form-control','placeholder'=>'email'],)!!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('role_id', 'Rol : ') !!}</td>
        <td>{!!  Form::text('role_id')!!}</td>
    </tr>

    <tr>
        <td>{!! form::label('foto','foto_id')!!}</td>
        <td>{!! form::file('foto_id')!!}</td>
    </tr>
    <tr>
        <td>{!! form::submit('Crear usuario')!!}</td>

        <td>{!! form::reset('Borrar')!!}
              
        </td>
        
    </tr>
    
 
   

</table>



{!! Form::close() !!}

@if(count($errors)>0)
@foreach($errors->all() as $error)
{{ " faltan llenar campos "}}
@endforeach 

@endif
@endsection





</body>
</html>