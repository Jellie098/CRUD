<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Gate;

class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('administrador')->only('pedidosClientes');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pedidos = Pedido::with('productos')->get();
        return view('pedidos/pedidosIndex', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('administrador')){
            $productos = Producto::all();

            return view('pedidos/pedidoForm', compact('productos'));
        } else{
            return redirect('/dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['user_id'=>Auth::user()->id]);
        $pedido = Pedido::create($request->all());
        $pedido->productos()->attach($request->producto_id);

        return redirect('inicio')
            ->with([
                'mensaje' => 'Pedido creado con éxito',
                'alert-type' => 'alert-success',
            ]); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }

   /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function pedidosClientes()
    {
        $pedidos = Pedido::get();
        return view('pedidos/pedidosClientes', compact('pedidos'));
    }
}