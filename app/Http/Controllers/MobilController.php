<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Merek;
use Illuminate\Http\Request;

class MobilController extends Controller
{

    public function index()
    {
        $mobil = Mobil::with('merek')->get();
        return view('admin.mobil.index', compact('mobil'));
    }

    public function create()
    {
        $merek = Merek::all();
        return view('admin.mobil.create', compact('merek'));
    }

    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'title' => 'required|unique:books',
            'amount' => 'required',
            'author_id' => 'required',
            'cover' => 'required|image|max:2048',
        ]);

        $book = new Book;
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/books/', $name);
            $book->cover = $name;
        }
        $book->amount = $request->amount;
        $book->save();
        return redirect()->route('book.index');
    }

    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.show', compact('mobil'));
    }

    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('admin.mobil.edit', compact('mobil'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $validated = $request->validate([
            'id_merek' => 'required',
            'nama_mobil' => 'required',
            'nomor_polisi' => 'required',
            'seat' => 'required',
            'bahan_bakar' => 'required',
            'status_mobil' => 'required',
            'tarif_mobil' => 'required',
            'tarif_sopir' => 'required',
            'gambar' => 'required',
        ]);

        $mobil = new Mobil;
        $mobil->id_merek = $request->id_merek;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->nomor_polisi = $request->nomor_polisi;
        $mobil->seat = $request->seat;
        $mobil->bahan_bakar = $request->bahan_bakar;
        $mobil->status_mobil = $request->status_mobil;
        $mobil->tarif_mobil = $request->tarif_mobil;
        $mobil->tarif_sopir = $request->tarif_sopir;
        $mobil->gambar = $request->gambar;
        $mobil->save();
        return redirect()->route('mobil.index');
    }

    public function destroy($id)
    {
        $mobil = MObil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobil.index');
    }
}
