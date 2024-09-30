@extends('adminlte::page')

@section('title', 'Destinos')
@section('content_header')
@section('content')
<h1>Detalles del Destino</h1>
<div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="col-md-5">ID de destino</th>
                        <td>{{ $destination->id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre del destino</th>
                        <td>{{ $destination->name }}</td>
                    </tr>

                    <tr>
                        <th>descripcion</th>
                        <td>{{ $destination->description }}</td>
                    </tr>
                    <tr>
                        <th>Imagen</th>
                        <td>
                            @if($destination->image)
                                <img src="{{ asset('storage/images/' . $destination->image) }}" alt="{{ $destination->name }}" style="max-width: 200px; height: auto;">
                            @else
                                <p>No hay imagen disponible</p>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Precio</th>
                        <td>{{ $destination->price }}</td>
                    </tr>
                    <tr>
                        <th>Duracion</th>
                        <td>{{ $destination->duration }}</td>
                    </tr>
                    <tr>
                        <th>Actividades</th>
                        <td>{{ $destination->activities }}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('destinations.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('destinations.edit', $destination) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('destinations.destroy', $destination) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop