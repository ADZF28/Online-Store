<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Producto::all();
        return response()->json(['result'=>$datos, 'code'=>'201']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=new Producto();
        $datos->id_categoria=$request->id_categoria;
        $datos->id_marca=$request->id_marca;
        $datos->id_estado=$request->id_estado;
        $datos->nombre=$request->nombre;
        $datos->descripcion=$request->descripcion;
        $datos->stock=$request->stock;
        $datos->precio=$request->precio;

        $datos->save();
        return response()->json(['result'=>"Datos guardados", 'code'=>'201']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=Producto::find($id);
        $datos->id_categoria=$request->id_categoria;
        $datos->id_marca=$request->id_marca;
        $datos->id_estado=$request->id_estado;
        $datos->nombre=$request->nombre;
        $datos->descripcion=$request->descripcion;
        $datos->stock=$request->stock;
        $datos->precio=$request->precio;

        $datos->update();
        return response()->json(['result'=>"Datos actualizados", 'code'=>'201']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $datos=Producto::find($id);
        $datos->delete();
        return response()->json(['result'=>"Dato eliminado", 'code'=>'201']);
    }
}
