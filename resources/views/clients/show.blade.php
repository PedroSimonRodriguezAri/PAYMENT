@extends('adminlte::page')

@section('title', 'Cliente')
@section('content_header')
@section('content')
<h1>Detalles del Cliente</h1>
<div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="col-md-5">ID de client</th>
                        <td>{{ $client->id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre del client</th>
                        <td>{{ $client->first_name . ' ' . $client->last_name }}</td>
                    </tr>

                    <tr>
                        <th>Cédula de Identidad</th>
                        <td>{{ $client->dni }}</td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>{{ $client->email }}</td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td>{{ $client->phone }}</td>
                    </tr>
                    <tr>
                        <th>Genero</th>
                        <td>{{ $client->gender }}</td>
                    </tr>
                    <tr>
                        <th>Nacionalidad</th>
                        <td>{{ $client->nationality }}</td>
                    </tr>
                    <tr>
                        <th>Telefono de emergencia</th>
                        <td>{{ $client->emergency_phone }}</td>
                    </tr>
                    <tr>
                        <th>Direccion</th>
                        <td>{{ $client->address }}</td>
                    </tr>
                    <tr>
                        <th>Informacion</th>
                        <td>{{ $client->information }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('clients.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop