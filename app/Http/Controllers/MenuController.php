<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

use App\Models\Recetas;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $recetasDesayuno = Recetas::where('tipoComida', 'Desayuno')->get();
        $recetasAlmuerzo = Recetas::where('tipoComida', 'Almuerzo')->get();
        $recetasComida = Recetas::where('tipoComida', 'Comida')->get();
        $recetasCena = Recetas::where('tipoComida', 'Cena')->get();
        $recetasBebida = Recetas::where('tipoComida', 'Bebida')->get();
        $recetasPostre = Recetas::where('tipoComida', 'Postre')->get();

        return view('menus/menu-create', compact('recetasDesayuno', 'recetasAlmuerzo', 'recetasComida', 'recetasCena', 'recetasBebida', 'recetasPostre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $menu = Menu::create([
            'nombre' => $request->input('nombre')
        ]);

        $recetaId = $request->input('receta_id');
        $diaSemana = $request->input('dia_semana');
        $tipoComida = $request->input('tipo_comida');

        $recetas = Recetas::findOrFail($recetaId);

        $menu->recetas()->attach($recetaId, [
            'dia_semana' => $diaSemana,
            'tipo_comida' => $tipoComida
        ]);

        return redirect()->back()->with('success', 'Receta agregada al menú exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
