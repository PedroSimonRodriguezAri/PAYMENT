@extends('adminlte::page')
@section('title', 'Editar Paquete')
@section('content_header')
    <h1>Editar Paquete</h1>
@stop
@section('content')
<form action="{{route('packages.update', $package)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="pack_name">Nombre</label>
                <input type="text" id="pack_name" name="pack_name" class="form-control" value="{{$package->pack_name}}" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="pack_description">descripcion del paquete</label>
                <input type="text" id="pack_description" name="pack_description" class="form-control" value="{{$package->pack_description}}" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" id="total" name="total" class="form-control" value="{{$package->total}}" required step="0.01" min="0">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="duration">Duracion</label>
                <input type="number" id="duration" name="duration" class="form-control" value="{{$package->duration}}" required>
            </div>
        </div>

    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
