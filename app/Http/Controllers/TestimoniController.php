<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{

    public function index()
    {
        $testimoni = Testimoni::all();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    public function create()
    {
        $customer = Customer::all();
        return view('admin.testimoni.create', compact('customer'));

    }

    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'id_customer' => 'required',
            'testimoni' => 'required',
            ]);

        $testimoni = new Testimoni;
        $testimoni->id_customer = $request->id_customer;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->save();
        return redirect()->route('testimoni.index');
    }

    public function show($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('admin.testimoni.show', compact('testimoni'));
    }

    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $customer = Customer::all();
        return view('admin.testimoni.edit', compact('testimoni', 'customer'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $validated = $request->validate([
            'id_customer' => 'required',
            'testimoni' => 'required',
            ]);

        $testimoni = new Testimoni;
        $testimoni->id_customer = $request->id_customer;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->save();
        return redirect()->route('testimoni.index');
    }

    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        return redirect()->route('testimoni.index');
    }
}
