<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use DB;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mostrarVentasPorProducto()
    {
        
        $ventasPorProducto = DB::Ventas('ventas')
            ->select('productos.descripcion as producto', DB::raw('SUM(ventas.cantidad) as cantidad_total'))
            ->join('productos', 'ventas.idproducto', '=', 'productos.idproducto')
            ->groupBy('productos.descripcion')
            ->get();

        return view('productos.index', compact('ventasPorProducto'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
