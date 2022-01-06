<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$clientes = Cliente::all(); trae todos los registros
        $clientes = Cliente::paginate(15);
        return view('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|max:150'
        ]);

        $cliente = Cliente::Create($request->only('nombre','apellidos','direccion','poblacion','provincia',
        'cp', 'dni', 'fnac', 'edad', 'telefono','movil','email', 'preno','aviso'));

        Session::flash('mensaje','Registro creado con exito');

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        return view('cliente.form')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        $request->validate([
            'nombre'=> 'required|max:150'
        ]);

        
        $cliente->nombre = $request['nombre'];
        $cliente->apellidos = $request['apellidos'];
        $cliente->direccion = $request['direccion'];
        $cliente->poblacion = $request['poblacion'];
        $cliente->provincia = $request['provincia'];
        $cliente->cp = $request['cp'];
        $cliente->dni = $request['dni'];
        $cliente->fnac = $request['fnac'];
        $cliente->edad = $request['edad'];
        $cliente->telefono = $request['telefono'];
        $cliente->movil = $request['movil'];
        $cliente->email = $request['email'];
        $cliente->preno = $request['preno'];
        $cliente->aviso = $request['aviso'];
        $cliente->save();

        Session::flash('mensaje','Registro actualizado con exito');

        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        Session::flash('mensaje','Registro eliminado con exito');

        return redirect()->route('cliente.index');
    }
}
