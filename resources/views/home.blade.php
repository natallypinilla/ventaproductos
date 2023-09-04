@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ya ingresaste!') }}
                </div>
            </div>
            <a href=" {{route('productos.catalogo')}}">Catalogo</a>
            <br>
            <a href=" {{route('productos.index')}}">venta</a>
        </div>
    
    </div>
    
</div>

@endsection
