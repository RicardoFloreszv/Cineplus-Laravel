<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Metodos para la creacion de usuarios

    //Importamos el RegistroRequest que contiene las reglas de validacion.
    public function register(RegistroRequest $request){
        
        $data = $request->validate();

    }
    
    
    public function login(Request $request){
        
    }
    
    public function logout(Request $request){
        
    }

}
