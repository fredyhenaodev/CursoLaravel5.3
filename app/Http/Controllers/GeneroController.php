<?php

namespace Cinema\Http\Controllers;

use Cinema\Genero;
use Illuminate\Http\Request;
use Cinema\Http\Requests\GeneroRequest;

class GeneroController extends Controller
{
    public function listing()
    {
        $genre = Genero::all();
        return response()->json(
          $genre->toArray()
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('genero.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneroRequest $request)
    {
        if ($request->ajax()) {
            $datos = new Genero;
            $datos->genero = $request->genre;
            $datos->save();
            return response()->json([
            "mensaje" => "creado"
          ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = Genero::find($id);
        return response()->json(
          $datos->toArray()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = Genero::find($id);
        $datos->fill($request->all());
        $datos->save();
        return response()->json([
          "mensaje" => "actualizado"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datos = Genero::find($id);
        $datos->delete();
        return response()->json([
          "mensaje" => "Eliminado"
        ]);
    }
}
