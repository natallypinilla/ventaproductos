@extends('layouts.app')

@section('content')
    <h1>Cantidad de Ventas por Producto</h1>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventasPorProducto as $venta)
                <tr>
                    <td>{{ $venta->producto }}</td>
                    <td>{{ $venta->cantidad_total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection