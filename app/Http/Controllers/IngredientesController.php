<?php

namespace App\Http\Controllers;

use App\Models\Ingredientes;
use Illuminate\Http\Request;

class IngredientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingredientes = Ingredientes::all(); //recupera todo lo de la tabla

        //dd($ingredientes);
        //Ingrediente::where ('nombre','Pepino')->get();
        return view('ingredientes/ingrediente-index', compact('ingredientes'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingredientes/ingrediente-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            //'nombre'=>'required|max:200',
            //'cantidad'=>'required1|numeric',
            //'unidadMedida'=>'required'
        ]);

        $ingrediente = new Ingredientes();
        $ingrediente->nombre = $request->nombre;
        $ingrediente->cantidad = $request->cantidad;
        $ingrediente->unidadMedida = $request->unidadMedida;
        $ingrediente->save();

        return redirect('ingredientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredientes $ingrediente)
    {
        return view('ingredientes/ingrediente-show', compact('ingrediente'));
        //$imngrediente= Ingredientes::find($id);
        //dd($ingredientes); para probar que funciona
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredientes $ingrediente)
    {
        //se envia un formulario con los campos llenos
        return view('ingredientes/ingrediente-edit', compact('ingrediente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredientes $ingrediente)
    {
        //se actualizan los cambios del edit
        $ingrediente->nombre=$request->nombre;
        $ingrediente->cantidad=$request->cantidad;
        $ingrediente->unidadMedida=$request->unidadMedida;
        $ingrediente->save();
        return redirect()->route('ingredientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredientes $ingrediente)
    {
        $ingrediente->delete();
        return redirect()->route('ingredientes.index');

    }
}
