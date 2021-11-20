<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductController extends Controller
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
        return view('productos.crear_producto');
    }

    /* Guarda los datos */
    public function store(Request $request){
        $producto = new Producto();

        $producto->marca = $request->marca;
        $producto->tipo = $request->tipo;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        $producto->save();

        return redirect()->route('productos.show', $producto);
        
    } 


    /* Muestra los datos registrados */
    public function show()
    {
        $productos = Producto::paginate();

        return view('productos.show', compact('productos'));
    }


    /* Muestra la informacion del registro a editar */
    public function edit(Producto $producto){
        
        return view('productos.edit', compact('producto'));
    }


    /* Actualiza los registros */
    public function update(Request $request, Producto $producto){

        $producto->marca = $request->marca;
        $producto->tipo = $request->tipo;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        $producto->save();

        return redirect()->route('productos.show', $producto)->with('actualizar', 'ok');

    }


    /* Elimina los registros */
    public function destroy(Producto $producto){
        $producto->delete();

        return redirect()->route('productos.show')->with('eliminar', 'ok');
    }

}
