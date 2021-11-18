<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customer = Customer::all();
        return view('admin.customer.index', compact('customer'));
    }

    public function create()
    {
        return view('admin.customer.create');

    }

    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'name' => 'required',
            'nomor_hp' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->nomor_hp = $request->nomor_hp;
        $customer->jenis_kelamin = $request->jenis_kelamin;
        $customer->agama = $request->agama;
        $customer->alamat = $request->alamat;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $validated = $request->validate([
            'name' => 'required',
            'nomor_hp' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->nomor_hp = $request->nomor_hp;
        $customer->jenis_kelamin = $request->jenis_kelamin;
        $customer->agama = $request->agama;
        $customer->alamat = $request->alamat;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->save();
        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
