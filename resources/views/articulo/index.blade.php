@extends('layouts.plantillabase');

@section('contenido')
<a href="articulos/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
@csrf
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Codigo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>


    </tr>
<tbody>
    @foreach ($articulos as $articulo)
    <tr>
        <td>{{$articulo->id}}</td>
        <td>{{$articulo->codigo}}</td>
        <td>{{$articulo->descripcion}}</td>
        <td>{{$articulo->cantidad}}</td>
        <td>{{$articulo->precio}}</td>
        <td>
           
            <a href="/articulos/{{ $articulo->id}}/edit" class="btn btn-info">Editar</a> 
            
            <button class="btn btn-danger">Borrar</button> 
            



        </td>

    </tr>
    @endforeach
</tbody>>
</thead>
</table>

@endsection

