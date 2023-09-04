@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Detalles del Producto</h1>
        <h2>{{ $product->nombre }}</h2>
        <p>Precio: {{ $product->precio }}</p>
        <p>Descripción: {{ $product->descripcion }}</p>
    </div>
    
@endsection