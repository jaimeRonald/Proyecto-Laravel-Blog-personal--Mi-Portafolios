<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use App\suscriber;
use App\User;
use App\foto;
use App\Foros;
use App\Categoria;
use App\foros_user;

class forosUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $categoria=Categoria::all();

           $foros=Foros::findOrFail($request->input('foro'));
           



           $new=['user_id'=>$request->input('usuario'),
            
           'mensaje'=>$request->input('comentario'),
              'foros_id'=>$request->input('foro')];

           foros_user::create($new);

            $users = DB::table('Foros')
            ->join('foros_user', 'Foros.id', '=', 'foros_user.foros_id')
            ->join('users', 'users.id', '=', 'foros_user.user_id')
            ->where('Foros.id','=',$request->input('foro'))
            ->select('mensaje','name','foros_user.created_at')
            ->get();

             
           return view("admin.foro.foro",compact("foros","users","categoria" ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foros=Foros::where('Categoria_id','=',$id)->get();


       // $foros=Foros::findOrFail($id);
         //echo $foros->created_at;
         
         $foro=Foros::find($id)->usuario;
          

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
        //
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
