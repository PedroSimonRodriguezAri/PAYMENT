@extends('adminlte::page')

@section('title', 'Crear')

@section('content_header')
    <h1>nuevo pago</h1>
@stop 

@section('content')
    <form action="{{ route('payment.store') }}" method="POST">
        @csrf

                <div class="form-group">
                    <label for="method">Metodo de pago</label>
                    <select id="gender" name="gender" class="form-control" required>
                        <option value="method">Tarjetas de Crédito</option>
                        <option value="method">Transferencias Bancarias</option>
                        <option value="method">QR Codes</option>
                    </select>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="amount">Cantidad</label>
                        <input type="number" id="amount" name="amount" class="form-control" required step="0.01" min="0">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="date">Fecha de transaccion</label>
                        <input type="date" id="date" name="date" class="form-control" required step="0.01" min="0">
                    </div>
                </div>
                <div class="form-group">
                    <label for="currency_type">Tipo de moneda</label>
                    <select id="currency_type" name="currency_type" class="form-control" required>
                        <option value="currency_type">Dolares</option>
                        <option value="currency_type">Bolivianos</option>
                        <option value="currency_type">Peso argentino</option>
                    </select>
                </div>

                <div class="col-md-3">
                <div class="form-group">
                    <label for="especialidad">reservacion: </label>
                    <select name="reservation_id" id="reservation_id" class="form-control">
                        @foreach($reservations as $reservation)
                        <option value="{{ $reservation->id }}">{{ $reservation->id }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
     </form>     
    @stop       