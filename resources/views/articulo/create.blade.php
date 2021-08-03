@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Nuevo Articulo</h1>
@stop

@section('content')
<form action="/articulos" method="POST">
    @csrf
    <div class="form-group mt-2">
      <label for="" class="form-label">Codigo</label>
      <input type="number" name="codigo" class="form-control">
    </div>
    <div class="form-group mt-2">
      <label for="" class="form-label">Descripcion</label>
      <input type="text" name="descripcion" class="form-control">
    </div>
    <div class="form-group mt-2">
      <label for="" class="form-label">Cantidad</label>
      <input type="number" name="cantidad" class="form-control">
    </div>
    <div class="form-group mt-2">
      <label for="" class="form-label">Precio</label>
      <input type="number" name="precio" class="form-control">
    </div>
    <a href="/articulos" class="btn btn-secondary mt-3">Cancelar</a>
    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
  </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
