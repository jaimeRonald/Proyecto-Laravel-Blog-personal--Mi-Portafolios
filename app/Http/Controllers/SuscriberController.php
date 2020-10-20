<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suscriber;
use App\User;
use App\foto;
use App\Foros;
use App\Categoria;
use App\Http\Requests\CreateUsersRequets;
use App\customer\usuario;
use App\customer\user_session;
class SuscriberController extends Controller
{



  public function getLogin()
  {
     $categoria=Categoria::all();  
  return view('admin.users.create',compact("categoria"));
  }

  public function postLogin(Request $request)
  {
        //$producto=User::findOrFail(5);
   $con=false;
   $note = \DB::select('SELECT  id,name from users where email=?',[$request->email]);
    $foros=Foros::all();

   foreach ($note as $key) {
     //echo $key->id;
    $con=true;
     //echo $note->name;
  echo "jaime";
    return view("admin.users.index",compact("note","foros"));
  }
  if($con==false)
  {
    ?>
       <script type="text/javascript">
        alert("No existe el Usuario"); 
      </script>
  <?php    
   //echo "no hay registros";
  }

 return view('admin.users.create',compact("categoria"));
}

public function getRegister(){
   $categoria=Categoria::all();  
  return view('admin.users.create',compact("categoria"));
}
public function postRegister(Request $request)
{

  $categoria=Categoria::all();  
  return view('admin.users.create',compact("categoria"));
  //dd('Registro ok');
}


public function index()
{
  $user=User::all();
  $foros=Foros::all();
  $categoria=Categoria::all();
 // return view("admin.users.index",compact("user","foros","categoria"));
  return view('auth.login');
}

public function create()
{
        //return view('admin.users.create');
        return view('admin.users.create');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUsersRequets $request)
    {
      //return $request->all();
      //User::create($request->all());  // muestra todos los colmnas de la tabla 
      //return redirect('/admin/users');

       //VALIDACION DE DATOS INGRESADOS ANTES DE ALMACENAR 
       //  $this->validate($request,['name'=>'required']);

      /*$suscriptor=new Suscriber;
      $suscriptor->usuario=$request->usuario;
      $suscriptor->contraseña=$request->contraseña;

      $suscriptor->save();
      return redirect('/suscriber');
    }*/


     $entrada =$request ->all();// trae todos los datos del formulario
        if($archivo=$request->file('foto_id'))  //$request->file  , es el valor traido desde el fomulario
        {
         $nombre=$archivo->getClientOriginalName();
         $archivo->move('images',$nombre);
         $foto=foto::create(['ruta_foto'=>$nombre]); 
         $entrada['foto_id']=$foto->id;

       }

       User::create($entrada);

       ?>

       <script type="text/javascript">
        alert("ususario creado"); 
      </script>

      <?php                 
      $user=User::all();
      $foros=Foros::all();  $categoria=Categoria::all();
      return view("admin.users.index",compact("user","foros","categoria"));
       //return view('admin.users.index');
    }
    
    public function show($id)
    {

      return view('admin.users.create');
    }

  }
