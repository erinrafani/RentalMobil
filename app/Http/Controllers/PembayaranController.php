<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{

    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('admin.pembayaran.index', compact('pembayaran'));
    }


    public function create()
    {
        $booking = Booking::all();
        $customer = Customer::all();
        return view('admin.pembayaran.create', compact('booking', 'customer'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_booking' => 'required',
            'id_customer' => 'required',
            'dp' => 'required',
            'kekurangan' => 'required',
            'status' => 'required',
        ]);

        $pembayaran = new Pembayaran;
        $pembayaran->id_booking = $request->id_booking;
        $pembayaran->id_customer = $request->id_customer;
        $pembayaran->dp = $request->dp;
        $pembayaran->kekurangan = $request->kekurangan;
        $pembayaran->status = $request->status;
        $pembayaran->save();
        return redirect()->route('pembayaran.index');
    }


    public function show($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        return view('admin.pembayaran.show', compact('pembayaran'));
    }


    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $booking = Booking::all();
        $customer = Customer::all();
        return view('admin.pembayaran.edit', compact('pembayaran', 'booking', 'customer'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_booking' => 'required',
            'id_customer' => 'required',
            'dp' => 'required',
            'kekurangan' => 'required',
            'status' => 'required',
        ]);

        $pembayaran = new Pembayaran;
        $pembayaran->id_booking = $request->id_booking;
        $pembayaran->id_customer = $request->id_customer;
        $pembayaran->dp = $request->dp;
        $pembayaran->kekurangan = $request->kekurangan;
        $pembayaran->status = $request->status;
        $pembayaran->save();
        return redirect()->route('pembayaran.index');
    }


    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index');
    }
}
