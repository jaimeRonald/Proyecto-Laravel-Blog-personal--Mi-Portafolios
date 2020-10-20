<?php 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\suscriber;
use App\User;
use App\foto;
use App\Foros;
use App\Categoria;
use App\Http\Requests\CreateUsersRequets;
class AdminUserController extends Controller
{


   public $flag=false;
	public function store(Request $request)
    {
        
      session_start();
     // Guardar datos de sesión
     //$flag=false;
     $note = \DB::select('SELECT  id,name from users where email=?',[$request->email]);
     $foros=Foros::all();
      
     $categoria=Categoria::all();   
     foreach ($note as $key) {
     //echo $key->id;
        $this->flag=true;
        $_SESSION["ban"] = $flag;
        
     //echo $note->name;
        echo "jaime";
        return view("admin.users.index",compact("note","foros","categoria","flag"));
    }
    if($this->flag==false)
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


     public function show($id)
    {
         
         $foros=Foros::findOrFail($id);
         //echo $foros->created_at;
         
         $foro=Foros::find($id)->usuario;
          

         $mensaje=Foros::find($id)->foros_user;
          
         $categoria=Categoria::all();  
         
         $var=$this->fla;

         $users = DB::table('Foros')
            ->join('foros_user', 'Foros.id', '=', 'foros_user.foros_id')
            ->join('users', 'users.id', '=', 'foros_user.user_id')
            ->where('Foros.id','=',$id)
            ->select('mensaje','name')
            ->get();

    return view("admin.foro.foro",compact("foros","users","categoria","flag"));
         
    }

}



  

 ?> 