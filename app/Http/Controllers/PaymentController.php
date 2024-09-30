<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Reservation;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $payments = Payment::where('detalle', 'like', '%' . $search . '%')
                                ->get();
        } else {
            $payments = Payment::with('reservation')->get(); // Relación con la reserva
        }
        return view('payment.index', compact('payments'));
    }

    public function create()
    {
        $reservations = Reservation::all(); // Obtener todas las reservas
        return view('payment.create', compact('reservations'));
    }

    public function store(Request $request)
{
    $request->validate([
        'reservation_id' => 'required',
        'amount' => 'required|numeric', // Validar que se envíe el campo 'amount'
    ]);

    Payment::create($request->all());
    return redirect()->route('payment.index')->with('success', 'El Pago fue creado correctamente');
}
    public function show(string $id)
    {
        $payment = Payment::find($id);
        return view('payment.show', compact('payment'));
    }

    public function edit(string $id)
    {
        $reservations = Reservation::all(); // Obtener todas las reservas para editar
        $payment = Payment::findOrFail($id);
        return view('payment.edit', compact('payment', 'reservations'));
    }

    public function update(Request $request, string $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->update($request->all());
        return redirect()->route('payment.index')->with('success', 'El Pago se ha modificado correctamente');
    }

    public function destroy(string $id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect()->route('payment.index')->with('success', 'El Pago fue eliminado correctamente');
    }
}