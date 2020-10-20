<?php namespace App\Customer;
use Illuminate\Support\Facades\DB;

class usuario 
{
    private $nombre;
    private $username;


    public function userExists($user, $pass){
        
         $note = \DB::select('SELECT  id,name from users where email=? and password=?',[$user],[$pass]);
          

         foreach ($note as $key) {
          echo "oli".$key->id;
         	$con=true;


         }

         if($con)
         {
         	return true;
         }else
         {
         	return false;
         }

    }

    public function setUser($user){
        $note = \DB::select('SELECT  id,name from users where email=?',[$user]);
         
         foreach ($note as $key) {
          $this->nombre = $note->name;
         	 


         }

        
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>