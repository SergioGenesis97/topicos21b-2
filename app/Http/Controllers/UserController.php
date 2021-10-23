<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
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

    /* Muestra el formulario */
    public function create()
    {
        return view('usuarios.crear_usuario');
    }

    /* Guarda los datos */
    public function store(Request $request){
        $usuarios = new Usuario();

        $usuarios->nombre = $request->nombre;
        $usuarios->apellido_pat = $request->apell_pat;
        $usuarios->apellido_mat = $request->apell_mat;
        $usuarios->edad = $request->edad;
        $usuarios->pais = $request->pais;
        $usuarios->cod_postal = $request->codigo_postal;
        $usuarios->direccion = $request->direccion;

        $usuarios->save();

        return redirect()->route('usuarios.show', $usuarios);

    }

    /* Muestra los datos registrados */
    public function show()
    {   

        $usuarios = Usuario::paginate();        

        return view('usuarios.show', compact('usuarios'));
    }

    /* Muestra los registros a editar */
    public function edit(Usuario $usuario){

        return view('usuarios.edit', compact('usuario'));
    }

    /* Actualiza los registros */
    public function update(Request $request, Usuario $usuario){
        
        $usuario->nombre = $request->nombre;
        $usuario->apellido_pat = $request->apell_pat;
        $usuario->apellido_mat = $request->apell_mat;
        $usuario->edad = $request->edad;
        $usuario->pais = $request->pais;
        $usuario->cod_postal = $request->codigo_postal;
        $usuario->direccion = $request->direccion;

        $usuario->save();
        return redirect()->route('usuarios.show', $usuario)->with('actualizar', 'ok');                             
    }

    /* Elimina los registros */
    public function destroy(Usuario $usuario){
        $usuario->delete();

        return redirect()->route('usuarios.show')->with('eliminar', 'ok');
    }
}
