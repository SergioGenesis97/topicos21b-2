<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */

    /* Genera el formulario */
    public function create()
    {
        return view('clientes.crear_cliente');
    }

    /* Guarda los datos */
    public function store(Request $request){
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apell_pat = $request->apell_pat;
        $cliente->apell_mat = $request->apell_mat;
        $cliente->codigo_postal = $request->codigo_postal;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;

        $cliente->save();

        return redirect()->route('clientes.show', $cliente);
    }

    /* Muestra los datos registrados*/
    public function show()
    {
        $clientes = Cliente::paginate();

        return view('clientes.show', compact('clientes'));
    }

    /* Muestra la informacion del registro a editar */
    public function edit(Cliente $cliente){

        return view('clientes.edit', compact('cliente'));
    }

    /* Actualiza los registros */
    public function update(Request $request, Cliente $cliente){

        $cliente->nombre = $request->nombre;
        $cliente->apell_pat = $request->apell_pat;
        $cliente->apell_mat = $request->apell_mat;
        $cliente->codigo_postal = $request->codigo_postal;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;

        $cliente->save();

        return redirect()->route('clientes.show', $cliente)->with('actualizar', 'ok');
        
    }

    /* Elimina los registros */
    public function destroy(Cliente $cliente){

        $cliente->delete();

        return redirect()->route('clientes.show', $cliente)->with('eliminar', 'ok');

    }
}
