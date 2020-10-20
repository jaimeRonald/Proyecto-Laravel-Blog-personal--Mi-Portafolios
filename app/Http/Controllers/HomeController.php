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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $user=User::all();
       $foros=Foros::all();
       $categoria=Categoria::all();
       return view('home',compact('categoria'));
    }
}
