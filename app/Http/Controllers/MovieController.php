<?php

namespace Cinema\Http\Controllers;

use Cinema\Genero;
use Illuminate\Http\Request;
use Cinema\Movie;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::Movies();
        return view('peliculas.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::pluck('genero', 'id');
        return view('peliculas.create', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Movie;
        $datos->name=$request->name;
        $datos->path=$request->path;
        $datos->cast=$request->cast;
        $datos->direction=$request->direction;
        $datos->duration=$request->duration;
        $datos->genero_id=$request->genero_id;
        $datos->save();
        return "listo";
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
        $genres = Genero::pluck('Genero', 'id');
        $movie = Movie::find($id);
        return view('peliculas.edit', ['movie'=>$movie,'generos'=>$genres]);
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
        $movie= Movie::find($id);
        $movie->fill($request->all());
        $movie->save();
        Session::flash('message', 'Pelicula Editada Correctamente');
        return Redirect::to('/pelicula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie= Movie::find($id);
        $movie->delete();
        \Storage::delete($movie->path);
        Session::flash('message', 'Pelicula Eliminada Correctamente');
        return Redirect::to('/pelicula');
    }
}
