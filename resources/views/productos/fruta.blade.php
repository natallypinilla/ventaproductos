@extends('layouts.app')

@section('contenidoProducto')
<table>
    <tr>
        <td>Categoria Producto</td>
        <td>Nombre Producto</td>
        
    </tr>
    @foreach($categoria as $productoCAT)
    <tr>
        
        <td> {{$productoCAT->idcategoria}} </td>
        <td> {{$productoCAT->nombre}} </td>
        <td>  <img src="{{asset($productoCAT->imagen)}}" alt="" style="width: 50px"> </td>
        <td> {{$productoCAT->precio}} </td>
    </tr>
    @endforeach
</table>
    

@endsection