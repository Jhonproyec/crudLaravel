@extends('adminlte::page')

@section('title', 'Crud')

@section('content_header')
    <h1>CRUD</h1>
@stop

@section('content')
<a href="/articulos/create" class="btn btn-primary mb-4">Agregar</a>
<table class="table shadow-lg text-uppercase">
  <thead class="table-dark">
    <tr>
      <th>Id</th>
      <th>Codigo</th>
      <th>Descripcion</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articulos as $articulo)
      <tr>
        <td>{{$articulo->id}}</td>
        <td>{{$articulo->codigo}}</td>
        <td>{{$articulo->descripcion}}</td>
        <td>{{$articulo->cantidad}}</td>
        <td>{{$articulo->precio}}</td>
        <td>
          <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-secondary">Editar</a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
