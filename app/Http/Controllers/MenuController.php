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
        $menus = Menu::all();
        return view('menus/menu-index', compact('menus'));
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
        //Mass assignment: se pone en el fillable de Menu
        $menu = Menu::create([
            'nombre' => $request->input('nombre')
        ]);

        //Recupera los datos enviados desde el formulario que tienen el name=recetas[{{ $dia }}][{{ $tipo }}]
        $data = $request->input('recetas'); 

        foreach ($data as $dia => $tipo) {     //Iteración de arrays de data
            foreach ($tipo as $t => $recetaId) {       // Iteración del tipo de comida y receta correspondiente del día actual
                // Adjunta la receta al menú con los detalles del día y el tipo de comida en la tabla pivote
                $menu->recetas()->attach($recetaId, ['dia' => $dia, 'tipo_comida' => $t]);
            }
        }

        return redirect()->back()->with('success', 'Selección guardada exitosamente');
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
        $recetasDesayuno = Recetas::where('tipoComida', 'Desayuno')->get();
        $recetasAlmuerzo = Recetas::where('tipoComida', 'Almuerzo')->get();
        $recetasComida = Recetas::where('tipoComida', 'Comida')->get();
        $recetasCena = Recetas::where('tipoComida', 'Cena')->get();
        $recetasBebida = Recetas::where('tipoComida', 'Bebida')->get();
        $recetasPostre = Recetas::where('tipoComida', 'Postre')->get();

        return view('menus/menu-edit', compact('menu','recetasDesayuno', 'recetasAlmuerzo', 'recetasComida', 'recetasCena', 'recetasBebida', 'recetasPostre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $menu->update([
            'nombre' => $request->input('nombre')
        ]);
    
        $data = $request->input('recetas');
    
        foreach ($data as $dia => $tipo) {
            foreach ($tipo as $t => $recetaId) {
                if ($recetaId !== null && $recetaId !== '') {
                    $menu->recetas()->syncWithoutDetaching([$recetaId => ['dia' => $dia, 'tipo_comida' => $t]]);
                }          
            }
        }
    
        return redirect()->route('menus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
