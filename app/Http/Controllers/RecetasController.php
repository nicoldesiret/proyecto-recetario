<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use Illuminate\Http\Request;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recetas = Recetas::all(); ///regresa todo lo de la tabla
        ///Recetas::where('nombre','Nicol')->get();

        //dd($recetas); ///verficar que la consulta funciona
        return view('recetas/listadoRecetas', compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recetas/formularioRecetas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$request->validate([]);
        $recetas = new Recetas();
        $recetas->titulo = $request->titulo;
        $recetas->descripcion = $request->descripcion;
        $recetas->tipoComida = $request->tipoComida;
        $recetas->save();

        return redirect()->route('recetas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recetas $receta)
    {
        return view('recetas.receta-show', compact('receta'));
        //$recetas = Recetas::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recetas $receta)
    {
        return view('recetas.recetas-edit', compact('receta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recetas $receta)
    {
        $receta->titulo = $request->titulo;
        $receta->descripcion = $request->descripcion;
        $receta->tipoComida = $request->tipoComida;
        $receta->save();
        
        return redirect()->route('recetas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recetas $receta)
    {
        $receta->delete();
        return redirect()->route('recetas.index');
    }
}
