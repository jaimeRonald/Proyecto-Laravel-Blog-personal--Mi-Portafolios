<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\suscriber;
use App\User;
use App\foto;
use App\Foros;
use App\Categoria;

class mensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    
    public function mostrar()
    {
        $categoria=Categoria::all(); 
        return view('admin.foro.foroPrincipal',compact('categoria'));
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
    /// FORO CON UNA CIERTA BUSQUEDA
    public function store(Request $request)
    {
            $categoria=Categoria::all(); 



            $sea=$request->input('search');
             
              // SI ENCUNTRA UNA COINCIDENCIA CON LO BUSCADO 
            $contador=0;
            $foroLike=Foros::where('titulo','like','%'.$sea.'%')->get();
            foreach ($foroLike as $f) {
                    $tit=$f->titulo;
                    $idForo=$f->id;
                    $foroB=$f;
                    $contador++;
                }

           
            if($contador>0){
                

                 $users= DB::table('Foros')
            ->join('foros_user', 'Foros.id', '=', 'foros_user.foros_id')
            ->join('users', 'users.id', '=', 'foros_user.user_id')
            ->where('Foros.id','=', $idForo)
            ->select('mensaje','name','foros_user.created_at')
            ->get();
            
            return view("admin.foro.listaForos",compact("foroLike","users","categoria" ));

            }else{
                $NingunResultado='No se encontraron foros con ese nombre';
                 return view("admin.foro.foro",compact("NingunResultado","categoria" ));
            }

           
           
            


 
             
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // BUSQUEDA DE UN FORO (C)
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
