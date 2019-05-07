<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use JWTAuth;
use JWTAuthException;

class UserController extends Controller
{
     public function __construct(User $user){
        $this->user = $user;
    }
   
    public function register(Request $require)
    {  $Users = new User;
    	$Users->username = $require->username;
    	$Users->password = $require->password;
    	$Users->email = $require->email;
    	$Users->tel = $require->tel;
    	$Users->address = $require->address;
    	$Users->avatar=$require->avatar;
    	$Users->description = $require->description;
          
        $Users->save();
        return response()->json($Users) ; 

	

	
}
    public function apiUsers(){
        $Users = User::all();
     
        return response()->json($Users);
       
       
    }

    public function show($id){
        $Users = User::find($id);
        return response()->json($Users); 
    }

};

