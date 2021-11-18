<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{

    public function index()
    {
        $merek = Merek::all();
        return view('admin.merek.index', compact('merek'));
    }

    public function create()
    {
        return view('admin.merek.create');

    }

    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'nama_merek' => 'required',
            ]);

        $merek = new Merek;
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        return redirect()->route('merek.index');
    }

    public function show($id)
    {
        $merek = Merek::findOrFail($id);
        return view('admin.merek.show', compact('merek'));
    }

    public function edit($id)
    {
        $merek = Merek::findOrFail($id);
        return view('admin.merek.edit', compact('merek'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $validated = $request->validate([
            'nama_merek' => 'required',
            ]);

        $merek = Merek::findOrFail($id);
        $merek->nama_merek = $request->nama_merek;
        $merek->save();
        return redirect()->route('merek.index');
    }

    public function destroy($id)
    {
        $merek = Merek::findOrFail($id);
        $merek->delete();
        return redirect()->route('merek.index');
    }
}
