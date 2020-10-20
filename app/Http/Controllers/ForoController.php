<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\suscriber;
use App\User;
use App\foto;
use App\Foros;
use App\Categoria;
use App\Http\Requests\CreateUsersRequets;
class ForoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
       $users=User::all(); 
       return view('admin.users.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       $user=User::all();
       $foros=Foros::all();
       $categoria=Categoria::all();
  //return view("admin.users.index",compact("user","foros","categoria"));
   // return view("auth.login",compact("user","foros","categoria"));



       $userSession = new user_session();
       $user1 = new usuario();


       if(isset($_SESSION['user'])){
    //echo "hay sesion";
        $user1->setUser($userSession->getCurrentUser());
        return view("admin.users.index",compact("user","foros","categoria"));

    }
    elseif(isset($re->email) && isset($re->password))
    {

        $userForm = $re->emai;
        $passForm = $re->password;

        echo " oli ".$userForm;
    }
    else
    {
    //echo "login";
   // echo "a ".$_POST['email'];
    //echo "o ".$_POST['password'];
        echo "oli ".$re->email;
        return view("auth.login",compact("user","foros","categoria"));

     // Guardar datos de sesión
    
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    ///LISTA DE FOROS (A)
    public function show($id)
    {
        $foroLike=Foros::where('Categoria_id','=',$id)->get();


       // $foros=Foros::findOrFail($id);
         //echo $foros->created_at;
         
         //$foro=Foros::find($id)->usuario;
          

         $mensaje=Foros::find($id)->foros_user;
          
         $categoria=Categoria::all();  
         
     

         $users = DB::table('Foros')
            ->join('foros_user', 'Foros.id', '=', 'foros_user.foros_id')
            ->join('users', 'users.id', '=', 'foros_user.user_id')
            ->where('Foros.id','=',$id)
            ->select('mensaje','name','foros_user.created_at')
            ->get();

    return view("admin.foro.listaForos",compact("foroLike","users","categoria" ));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //LISTADO DE TEMAS (B)
    public function search(request $search)
    {
           
         
 
        
    }
    public function edit($id)
    {

        //$foros=Foros::where('Categoria_id','=',$id)->get();


         $foros=Foros::find($id);
         //echo $foros->created_at;
         
         //$foro=Foros::find($id)->usuario;
          

         $mensaje=Foros::find($id)->foros_user;
          
         $categoria=Categoria::all();  
         
      
         
         $users = DB::table('Foros')
            ->join('foros_user', 'Foros.id', '=', 'foros_user.foros_id')
            ->join('users', 'users.id', '=', 'foros_user.user_id')
            ->where('Foros.id','=',$id)
            ->select('mensaje','name','foros_user.created_at')
            ->get();

    return view("admin.foro.foro",compact("foros","users","categoria" ));
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
        //
    }
}
