<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allcomentarios = Comentarios::all(); #Para recuperar los datos de la tabla
        #dd($allcomentarios);
        #allcomentarios lo nombré para quefueran todos los comentarios
        #>>   Comentarios::where('nombre', 'Lili')->get(); 
        #Ese tiene la misma función pero es más para una selección
        #Por ejemplo si quiero que aparezcan solo nombres o calificaciones específicas.
        return view('listado-comentarios', compact('allcomentarios'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('formulario-comentarios');
        
    }  #CON ESTO ESPERO QUE REGISTRE PERO AÚN NO SÉ CÓMO 

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) #CON ESTO SE GUARDA TODO A LA BASE DE DATOS
    {
            $comentarios = new Comentarios(); #Lo que viene del request lo asignamos acá 
            $comentarios->comentario = $request->comentario;  #Comentarios es por el nombre de la tabla ve en migrations
            $comentarios->calificacion=$request->calificacion;
            $comentarios->save();
            return redirect()->route('comentario.index');
            #return redirect('/comentario');
            #return redirect()->back();   #El store solo sirve para guardar datos
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentarios $comentarios)
    {
        #dd($comentarios);
        return view('comentarios.comentario-show', compact('comentario-info'));
        #$comentario= Comentarios::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentarios $comentarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentarios $comentarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentarios $comentarios)
    {
        //
    }
}
