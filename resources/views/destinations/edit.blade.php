@extends('adminlte::page')
@section('title', 'Editar destino')
@section('content_header')
    <h1>Editar Destino</h1>
@stop 
@section('content')
<form action="{{route('destinations.update', $destination)}}" method="POST">
    @csrf
    @method('PUT' )

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$destination->name}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <input type="text" id="description" name="description" class="form-control" value="{{$destination->description}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="text" id="price" name="price" class="form-control" value="{{$destination->price}}" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="image">Imagen Actual</label>
                        @if($destination->image)
                            <img id="preview" src="{{ asset('path_to_images/' . $destination->image) }}" alt="Vista previa de la imagen actual" style="margin-top: 10px; max-width: 100%; height: auto;">
                        @else
                            <p>No hay imagen cargada.</p>
                        @endif

                        <label for="image" style="margin-top: 10px;">Cambiar Imagen (opcional)</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/*" onchange="previewNewImage(event)">
                        
                        <img id="new_preview" src="#" alt="Vista previa de la nueva imagen" style="display: none; margin-top: 10px; max-width: 100%; height: auto;">
                    </div>
                    
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="text" id="price" name="price" class="form-control" value="{{$destination->price}}" required>
                    </div>
                </div>
                
            </div>
            </div>
            
                
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="duration">Duracion</label>
                        <input type="text" id="duration" name="duration" class="form-control" value="{{$destination->duration}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="activities">Actividades</label>
                        <input type="text" id="activities" name="activities" class="form-control" value="{{$destination->activities}}" required>
                    </div>
                </div>

            </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
