<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recetas;
use App\Models\Etiqueta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware(['auth','verified'])->except('index','show');
     }
     
    public function index()
    {
        $recetas = Recetas::all(); ///regresa todo lo de la tabla
        ///Recetas::where('nombre','Nicol')->get();
        ///$recetas = Recetas::where('user_id')->get();

        //dd($recetas); ///verficar que la consulta funciona
        return view('recetas/listadoRecetas', compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etiquetas = Etiqueta::all();
        return view('recetas/formularioRecetas', compact('etiquetas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|regex:/^[\pL\s\-]+$/u|max:150',
            'tipoComida' => 'required|regex:/^[\pL\s\-]+$/u|max:100',
            'descripcion' => 'required|string|max:1000',
            'archivo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        if(!$request->file('archivo')->isValid()){
            //mensaje de error
        }

        $request->merge([
            'archivo_ubicacion'=>$request->file('archivo')->store('public/img_recetas'),
            'user_id' => Auth::id()
        ]);

        Recetas::create($request->all());
       
        /*
        $recetas = new Recetas();
        $recetas->titulo = $request->titulo;
        $recetas->descripcion = $request->descripcion;
        $recetas->tipoComida = $request->tipoComida;
        $recetas->save();

        // Asociar la etiqueta seleccionada con la receta
        //dd($request->etiqueta_id);
        $recetas->etiquetas()->attach($request->etiqueta_id);*/

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

    public function descargar(Recetas $receta)
    {
        return Storage::download($receta->archivo_ubicacion);
    }
}

