@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> catalogo de Productos</h1>
        <ul>
            @foreach ($product as $productos)
                <li><a href=" {{route('productos.show', $productos->idcategoria)}} ">
                    {{ $productos->nombre }}

                </a></li>
            @endforeach
        </ul>
        @yield('contenidoProducto')
    </div>
    
@endsection