<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\customer\usuario;
use App\customer\user_session;
use App\suscriber;
use App\User;
use App\foto;
use App\Foros;
use App\Categoria;
use App\Http\Requests\CreateUsersRequets;
class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    


    public function index()
    {
        // 2 DOS FORMAS DE OBTENER VALORES DE UN ATABLA DE LA BASE DATOS :
        
         //$users=DB::table('users')->get();
         //return view('admin.users.index',['users'=>$users]);
      
     //OTRA
       //$users=User::all(); 
       //return view('admin.users.index',compact('users'));



     
}






    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria=Categoria::all();
        return view('admin.users.create',compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Requets $request)  //PARA VALIDADR USER
    {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
    }



    
}
