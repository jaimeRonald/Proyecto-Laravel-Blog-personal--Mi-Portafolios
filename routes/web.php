<?php

use App\Comenteario;
use App\Suscriber;
use App\User;
use App\foto;
use App\Foros;
use App\Categoria;
use App\Http\Requests\CreateUsersRequets;
use App\customer\usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dia', function () {
	$user=User::all();
	//$foros=Foros::all();
	 $categoria=Categoria::all();
	 
         if(!$_GET)
         {
            header('Location:dia?pagina=1');
         }else
         {
     



	$cantidad=Foros::all()->count();
    $cantidad_x_paginas=4;  ///CANTIDAD DE FOROS POR PAGINA
	$aux=$cantidad/$cantidad_x_paginas;
    $can_de_paginas =round($aux, 0, PHP_ROUND_HALF_UP);
       
       if($_GET['pagina']>$can_de_paginas || $_GET['pagina']<1 ){
       	header('Location:dia?pagina=1');
       }

    
   
    $iniciar=($_GET['pagina']-1)*4;
     
    //$cantidad->bindParam(':inicio',$iniciar, PDO::PARAM_INT);
    //$cantidad->bindParam(':fin', $can_x_pagina, PDO::PARAM_INT);

    $sql_foros=DB::table('Foros')->skip($iniciar)->take(4)->get();


	

    /*$userGenereal=Auth::user();
    if($userGenereal->EsAdmin())
   
    	echo "eres administrador";
    else
    	echo "eres estudiante";*/
   
	return view('welcome',compact('categoria','sql_foros','cantidad','can_de_paginas'));
} 

});

Route::get('/Suscriptor/{id}/Comnteario', function ($id) {

    return Suscriber::find($id)->Comenteario->comentario;
});

Route::get('/comentario/{id}/Suscriptor',function($id)
{
	return Comenteario::find($id)->Suscriber;
});

Route::get("/comentarios",function(){
$comentarios = Suscriber::find(1)->Comentearios;

foreach ($comentarios as $comment) {
	echo $comment->comentario."</br>";              
      }
});


// Y AQUI USAMOS RESOURSE ESTO ES GENERAR UN MODELO DE UNA TABLA 
//PARA  MANIPULAR DIRECTAMENTE(INCERTAR ,ACTUALIZAR,BORRAR ,LEER) CON ESTA RUTA   //
Route::resource('/suscriber','SuscriberController');
Route::resource('/foro','ForoController');
Route::resource('/Categoria','ForoController');

//Route::resource('/mensaje','forosUserController');
//Route::resource('/login','ForoController');
 
//// CODIGO CASI TERIMINADO 

/*Route::get("/usuario/{id}/foro",function($id)
{
	$user=App\User::find($id);
	foreach ($user->foros as $key) {
		return $key->titulo;
	}
}
);*/



Route::get('/login',function(){
	return view('auth.login');
});
 

 
Route::post('/login','Auth\LoginController@login')->name('login');
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::post('/logout','Auth\LoginController@logout')->name('logout');

Route::post('/mensaje','forosUserController@store');
Route::post('/search','mensajeController@store');
Route::get('/foroPrincipal','mensajeController@mostrar')->name('foroPrincipal');

//Route::get('register/verify/{code}','Auth\RegisterController@verify');
/*Route::post('/logout',function()
{
   $user=User::all();
  $foros=Foros::all();
  $categoria=Categoria::all();


    return view('welcome',compact('categoria'));
}
)->name('logout');*/
