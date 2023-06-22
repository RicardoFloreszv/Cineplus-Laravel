<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //Crear el tipo JSON
    public function index(){
        return new CategoriaCollection(Categoria::all());
    }
}
