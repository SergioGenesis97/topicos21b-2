<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProviderController extends Controller
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
        return view('proveedores.crear_proveedor');
    }

    /* Guarda los datos */
    public function store(Request $request){
        $proveedor = new Proveedor();

        $proveedor->rfc = $request->rfc;
        $proveedor->nombre = $request->nombre;
        $proveedor->apell_pat = $request->apell_pat;
        $proveedor->apell_mat = $request->apell_mat;
        $proveedor->codigo_postal = $request->codigo_postal;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->correo = $request->correo;

        $proveedor->save();

        return redirect()->route('proveedores.show', $proveedor);

    }

    /* Muestra los datos registrados */
    public function show()
    {
        $proveedores = Proveedor::paginate();

        return view('proveedores.show', compact('proveedores'));
    }

    /* Muestra la informacion del registro a editar */
    public function edit(Proveedor $proveedor){

        return view('proveedores.edit', compact('proveedor'));
    }

    /* Actualiza los registros */
    public function update(Request $request, Proveedor $proveedor){
        
        $proveedor->rfc = $request->rfc;
        $proveedor->nombre = $request->nombre;
        $proveedor->apell_pat = $request->apell_pat;
        $proveedor->apell_mat = $request->apell_mat;
        $proveedor->codigo_postal = $request->codigo_postal;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->correo = $request->correo;

        $proveedor->save();

        return redirect()->route('proveedores.show', $proveedor)->with('actualizar', 'ok');
    }

    /* Elimina los registros */
    public function destroy(Proveedor $proveedor){

        $proveedor->delete();

        return redirect()->route('proveedores.show', $proveedor)->with('eliminar', 'ok');

    }

}
