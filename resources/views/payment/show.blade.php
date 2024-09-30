@extends('adminlte::page')

@section('title', 'pagos')
@section('content_header')
@section('content')
<h1>Detalles de pagos</h1>
<div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="col-md-5">ID de payment</th>
                        <td>{{ $payment->id }}</td>
                    </tr>
                    <tr>
                        <th>metodo de pago</th>
                        <td>{{$payment->method }}</td>
                    </tr>

                    <tr>
                        <th>Cantidad</th>
                        <td>{{ $payment->amount }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de transaccion</th>
                        <td>{{ $payment->date }}</td>
                    </tr>
                    <tr>
                        <th>Tipo de moneda</th>
                        <td>{{ $payment->currency_type }}</td>
                    </tr>
                    <tr>
                        <th>reservacion</th>
                        <td>{{ $payment->reservation_id }}</td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('payment.index') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> </a>
            <a href="{{ route('payment.edit', $payment) }}" class="btn btn-warning"><i class="fas fa-edit"></i> </a>
            <form action="{{ route('payment.destroy', $payment) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </button>
            </form>
        </div>
    </div>
@stop