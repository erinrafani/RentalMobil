<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Mobil;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Sopir;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $booking = Booking::all();
        return view('admin.booking.index', compact('booking'));
    }


    public function create()
    {
        $mobil = Mobil::all();
        $customer = Customer::all();
        $sopir = Sopir::all();
        $admin = Admin::all();
        return view('admin.booking.create', compact('mobil', 'customer', 'sopir', 'admin'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_mobil' => 'required',
            'id_customer' => 'required',
            'id_sopir' => 'required',
            'id_admin' => 'required',
            'tanggal_booking' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'tanggal_kembali' => 'required',
            'denda' => 'required',
            'durasi' => 'required',
            'status' => 'required',
            'jumlah_bayar' => 'required',
            'jumlah_dp' => 'required',
        ]);

        $booking = new Booking;
        $booking->id_mobil = $request->id_mobil;
        $booking->id_customer = $request->id_customer;
        $booking->id_sopir = $request->id_sopir;
        $booking->id_admin = $request->id_admin;
        $booking->tanggal_booking = $request->tanggal_booking;
        $booking->tanggal_mulai = $request->tanggal_mulai;
        $booking->tanggal_selesai = $request->tanggal_selesai;
        $booking->tanggal_kembali = $request->tanggal_kembali;
        $booking->denda = $request->denda;
        $booking->durasi = $request->durasi;
        $booking->status = $request->status;
        $booking->jumlah_bayar = $request->jumlah_bayar;
        $booking->jumlah_dp = $request->jumlah_dp;
        $booking->save();
        return redirect()->route('booking.index');
    }


    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin.booking.show', compact('booking'));
    }


    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $mobil = Mobil::all();
        $customer = Customer::all();
        $sopir = Sopir::all();
        $admin = Admin::all();
        return view('admin.booking.edit', compact('booking', 'mobil', 'customer', 'sopir', 'admin'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_mobil' => 'required',
            'id_customer' => 'required',
            'id_sopir' => 'required',
            'id_admin' => 'required',
            'tanggal_booking' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'tanggal_kembali' => 'required',
            'denda' => 'required',
            'durasi' => 'required',
            'status' => 'required',
            'jumlah_bayar' => 'required',
            'jumlah_dp' => 'required',
        ]);

        $booking = new Booking;
        $booking->id_mobil = $request->id_mobil;
        $booking->id_customer = $request->id_customer;
        $booking->id_sopir = $request->id_sopir;
        $booking->id_admin = $request->id_admin;
        $booking->tanggal_booking = $request->tanggal_booking;
        $booking->tanggal_mulai = $request->tanggal_mulai;
        $booking->tanggal_selesai = $request->tanggal_selesai;
        $booking->tanggal_kembali = $request->tanggal_kembali;
        $booking->denda = $request->denda;
        $booking->durasi = $request->durasi;
        $booking->status = $request->status;
        $booking->jumlah_bayar = $request->jumlah_bayar;
        $booking->jumlah_dp = $request->jumlah_dp;
        $booking->save();
        return redirect()->route('booking.index');
    }


    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('booking.index');
    }
}
