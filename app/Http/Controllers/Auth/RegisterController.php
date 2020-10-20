<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
 
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\suscriber;
use App\User;
use App\foto;
use App\Foros;
use App\Categoria;
use App\Http\Requests\CreateUsersRequets;
use App\customer\usuario;
use App\customer\user_session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id'=>['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //$data['confirmation_code']=str_random();
         $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id'=>$data['role_id'],

            //'confirmation_code'=>$data['confirmation_code']
        ]);

        /*Mail::send('emails.confirmation_code',$data,function($message) use($data){
            $message->to($data['email'],$data['name'])->subject('porfabor confirma tu correo');
        });*/
     return $user   ;
    }

    public function verify($code)
    {
              $user=User::Where('confirmation_code',$code)->first();
              if(!$user)
              {
                return redirect('/dia');
              }
              $user->confirmed=true;
              $user->confirmation_code=null;
              $user->save();

              return redirect('/login');
    }
}
