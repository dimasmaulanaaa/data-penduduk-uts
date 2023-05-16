<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Provinsi;

class KotaController extends Controller
{
    public function index()
    {
        $kotas = Kota::with('provinsi')->get();
        return view('kota.index', compact('kotas'));
    }

    public function create()
    {
        $provinsis = Provinsi::all();
        $kotas = new Kota(); // Menambahkan baris ini
        return view('kota.create', compact('provinsis', 'kota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'provinsi_id' => 'required',
        ]);

        Kota::create($request->all());

        return redirect()->route('kota.index')->with('success', 'Kota berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kota = Kota::find($id);

        if (!$kota) {
            // Handle the case where the kota is not found
            abort(404);
        }

        $provinsis = Provinsi::all();

        return view('kota.edit', compact('kota', 'provinsis'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'provinsi_id' => 'required',
        ]);

        $kota = Kota::findOrFail($id);
        $kota->update($request->all());

        return redirect()->route('kota.index')->with('success', 'Kota berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();

        return redirect()->route('kota.index')->with('success', 'Kota berhasil dihapus');
    }
}
