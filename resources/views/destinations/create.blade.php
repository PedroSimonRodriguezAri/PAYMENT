@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>Nuevo destino</h1>
@stop

@section('content')
    <form action="{{ route('destinations.store') }}" method="POST">
        @csrf
        
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <input type="text" id="description" name="description" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/*" onchange="previewImage(event)" required>
                        <img id="preview" src="#" alt="Vista previa de la imagen" style="display: none; margin-top: 10px; max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="number" id="price" name="price" class="form-control" required step="0.01" min="0">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="duration">Duracion</label>
                        <input type="text" id="duration" name="duration" class="form-control" required>
                    </div>
                </div>
            </div>
            
                
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="activities">Actividades</label>
                        <input type="text" id="activities" name="activities" class="form-control" required>
                    </div>
                </div>
            </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
