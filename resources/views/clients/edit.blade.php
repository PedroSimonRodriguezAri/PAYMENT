@extends('adminlte::page')
@section('title', 'Editar Cliente')
@section('content_header')
    <h1>Editar Cliente</h1>
@stop
@section('content')
<form action="{{route('clients.update', $client)}}" method="POST">
    @csrf
    @method('PUT')

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="first_name">Nombre</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" value="{{$client->first_name}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" value="{{$client->last_name}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dni">C.I</label>
                        <input type="text" id="dni" name="dni" class="form-control" value="{{$client->dni}}" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{$client->email}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{$client->phone}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                <div class="form-group">
                    <label for="gender">Género</label>
                    <select id="gender" name="gender" class="form-control" required>
                        <option value="male" {{ $client->gender == 'male' ? 'selected' : '' }}>Masculino</option>
                        <option value="female" {{ $client->gender == 'female' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>
            </div>
            </div>
            
                
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nationality">Nacionalidad</label>
                        <input type="text" id="nationality" name="nationality" class="form-control" value="{{$client->nationality}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="emergency_phone">Telefono de emergencia</label>
                        <input type="text" id="emergency_phone" name="emergency_phone" class="form-control" value="{{$client->emergency_phone}}" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address">Direccion</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{$client->address}}" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="information">Informacion</label>
                        <input type="text" id="information" name="information" class="form-control" value="{{$client->information}}" required>
                    </div>
                </div>
            </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop
