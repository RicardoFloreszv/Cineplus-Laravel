<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductosCollection;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //De esta manera creamos la respuesta JSON
        //::all para traer todo
        //Tambien podemos ser especificos con lo que queremos retornar o podemos crear una paginacion
        //Tambien podemos ordenar por ASCENDENTE o DESCENDENTE
        //En este caso queremos enviar los productos que esten disponibles. Si estan como 1 es que si estan disponibles.
        return new ProductosCollection(Productos::where('disponible', 1)->orderBy('id', 'DESC')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $productos)
    {
        //
    }
}
