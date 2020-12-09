<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::get();
        return view('productos/productosIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();

        return view('productos/productoForm', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->tipo_id);
        //Validar datos
        $request->validate([
            'nombre'=>'required|string|min:5|max:255',
            'precio'=>'required|numeric|min:1',
            'fechaIngreso'=>'required|date',
        ]);

        $request->merge([
            'especie'=> $request->especie ?? '',
            'tipo_id' => $request->tipo_id
        ]);

        //dd($request->tipo_id);
        //Guardar en BD
        Producto::create($request->all());
        //Adentro se puede poner cada atributo para guardarlo

        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos/productoShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos/productoForm', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre'=>'required|string|min:5|max:255',
            'precio'=>'required|numeric|min:1',
            'fechaIngreso'=>'required|date',
        ]);

        Producto::where('id', $producto->id)->update($request->except('_method', '_token'));

        return redirect()->route('producto.show', [$producto]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
