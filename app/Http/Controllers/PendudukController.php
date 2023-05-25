<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Provinsi;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduks = Penduduk::with('provinsi', 'kota')->paginate(10);
        $provinsis = Provinsi::all();
        $kotas = Kota::all();
        $totalData = Penduduk::count();
        return view('penduduk.index', compact('penduduks', 'provinsis', 'kotas', 'totalData'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $provinsi_id = $request->input('provinsi_id');
        $kota_id = $request->input('kota_id');

        $query = Penduduk::query();

        if (!empty($search)) {
            $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('nik', 'like', '%' . $search . '%');
        }
        if (!empty($provinsi_id)) {
            $query->where('provinsi_id', $provinsi_id);
        }
        if (!empty($kota_id)) {
            $query->where('kota_id', $kota_id);
        }

        $penduduks = $query->with('provinsi', 'kota')->paginate(10);
        $totalData = $query->count();

        $provinsis = Provinsi::all();
        $kotas = Kota::all();

        return view('penduduk.index', compact('penduduks', 'provinsis', 'kotas', 'totalData'));
    }





    public function create()
    {
        $provinsis = Provinsi::all();
        $kotas = Kota::all();
        return view('penduduk.create', compact('provinsis', 'kotas'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nik' => 'required|unique:penduduks,nik|max:16',
            'provinsi_id' => 'required|exists:provinsis,id',
            'kota_id' => 'required|exists:kotas,id',
        ]);

        $penduduk = new Penduduk;
        $penduduk->nama = $validatedData['nama'];
        $penduduk->nik = $validatedData['nik'];
        $penduduk->provinsi_id = $validatedData['provinsi_id'];
        $penduduk->kota_id = $validatedData['kota_id'];
        $penduduk->save();

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $provinsis = Provinsi::all();
        $kotas = Kota::all();
        return view('penduduk.edit', compact('penduduk', 'provinsis', 'kotas'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nik' => 'required|unique:penduduks,nik,' . $id . '|max:16',
            'provinsi_id' => 'required|exists:provinsis,id',
            'kota_id' => 'required|exists:kotas,id',
        ]);

        $penduduk = Penduduk::findOrFail($id);
        $penduduk->nama = $validatedData['nama'];
        $penduduk->nik = $validatedData['nik'];
        $penduduk->provinsi_id = $validatedData['provinsi_id'];
        $penduduk->kota_id = $validatedData['kota_id'];
        $penduduk->save();

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diupdate.');
    }

    public function destroy($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil dihapus.');
    }
}
