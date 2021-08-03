@extends('adminlte::page')

@section('title', 'Crud')

@section('content_header')
    <h1>Editar Articulo</h1>
@stop

@section('content')
  <form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mt-2">
      <label for="" class="form-label">Codigo</label>
      <input type="number" name="codigo" class="form-control" value="{{$articulo->codigo}}">
    </div>
    <div class="form-group mt-2">
      <label for="" class="form-label">Descripcion</label>
      <input type="text" name="descripcion" class="form-control" value="{{$articulo->descripcion}}">
    </div>
    <div class="form-group mt-2">
      <label for="" class="form-label">Cantidad</label>
      <input type="number" name="cantidad" class="form-control" value="{{$articulo->cantidad}}">
    </div>
    <div class="form-group mt-2">
      <label for="" class="form-label">Precio</label>
      <input type="number" name="precio" class="form-control" value="{{$articulo->precio}}">
    </div>
    <a href="/articulos" class="btn btn-secondary mt-3">Cancelar</a>
    <button type="submit" class="btn btn-primary mt-3">Editar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

