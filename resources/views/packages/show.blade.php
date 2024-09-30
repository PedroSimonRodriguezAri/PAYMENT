@extends('adminlte::page')

@section('title', 'Paquete')
@section('content_header')
@section('content')
<h1>Detalles del Paquete</h1>
<div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="col-md-5">ID de package</th>
                        <td>{{ $package->id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre del package</th>
                        <td>{{ $package->pack_name }}</td>
                    </tr>

                    <tr>
                        <th>Cédula de Identidad</th>
                        <td>{{ $package->pack_description }}</td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>{{ $package->total }}</td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td>{{ $package->duration }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('packages.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('packages.edit', $package) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('packages.destroy', $package) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop