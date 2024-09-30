@extends('adminlte::page')

@section('title', 'Crear Paquete')

@section('content_header')
    <h1>Nuevo Paquete</h1>
@stop

@section('content')
    <form action="{{ route('packages.store') }}" method="POST">
        @csrf
        
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pack_name">Nombre</label>
                        <input type="text" id="pack_name" name="pack_name" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pack_description">descripcion del paquete</label>
                        <input type="text" id="pack_description" name="pack_description" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="number" id="total" name="total" class="form-control" required step="0.01" min="0">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="duration">Duracion</label>
                        <input type="number" id="duration" name="duration" class="form-control" required>
                    </div>
                </div>

            </div>
            
                
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
