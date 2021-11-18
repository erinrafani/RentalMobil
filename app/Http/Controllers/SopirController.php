<?php

namespace App\Http\Controllers;

use App\Models\Sopir;
use Illuminate\Http\Request;

class SopirController extends Controller
{

    public function index()
    {
        $sopir = Sopir::all();
        return view('admin.sopir.index', compact('sopir'));
    }

    public function create()
    {
        return view('admin.sopir.create');

    }

    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'nama_sopir' => 'required',
            'status' => 'required',
        ]);

        $sopir = new Sopir;
        $sopir->nama_sopir = $request->nama_sopir;
        $sopir->status = $request->status;
        $sopir->save();
        return redirect()->route('sopir.index');
    }

    public function show($id)
    {
        $sopir = Sopir::findOrFail($id);
        return view('admin.sopir.show', compact('sopir'));
    }

    public function edit($id)
    {
        $sopir = Sopir::findOrFail($id);
        return view('admin.sopir.edit', compact('sopir'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $validated = $request->validate([
            'nama_sopir' => 'required',
            'status' => 'required',
        ]);

        $sopir = Sopir::findOrFail($id);
        $sopir->nama_sopir = $request->nama_sopir;
        $sopir->status = $request->status;
        $sopir->save();
        return redirect()->route('sopir.index');
    }

    public function destroy($id)
    {
        $sopir = Sopir::findOrFail($id);
        $sopir->delete();
        return redirect()->route('sopir.index');
    }
}

