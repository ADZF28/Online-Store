<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Imagen::all();
        return response()->json(['result'=>$datos, 'code'=>'201']);
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
    public function store(Request $request)
    {
        $file=$request->file('file-7');
        $nombre=$file->getClientMimeType();
        $tipoImagen=str_replace('image/', '.',$nombre);
        $fileName=uniqid() . $tipoImagen;
        $path=public_path().'/imagenes';
        $file->move($path,$fileName);
     
        $datos=new Imagen();
        $datos->ruta=$fileName;
        $datos->tabla=$request->tabla;
        $datos->id_tabla=$request->id_tabla;
        $datos->save();
        return response()->json(['result'=>"Datos guardados", 'code'=>'201']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show(Imagen $imagen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagen $imagen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=Imagen::find($id);
        $datos->ruta=$request->ruta;
        $datos->tabla=$request->tabla;
        $datos->id_tabla=$request->id_tabla;

        $datos->update();
        return response()->json(['result'=>"Datos actualizados", 'code'=>'201']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $datos=Imagen::find($id);
        $datos->delete();
        return response()->json(['result'=>"Dato eliminado", 'code'=>'201']);
    }
}
