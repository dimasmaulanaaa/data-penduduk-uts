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
        return view('penduduk.index', compact('penduduks', 'provinsis', 'kotas'));
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
        $provinsis = Provinsi::all();
        $kotas = Kota::all();

        return view('penduduk.index', compact('penduduks', 'provinsis', 'kotas'));
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

    // public function getListDataPenduduk(Request $request)
    // {
    //     $keyword = $request->input('keyword');
    //     $provinsiId = $request->input('provinsi_id');
    //     $kotaId = $request->input('kota_id');

    //     $query = Penduduk::query();

    //     if ($keyword) {
    //         $query->where(function ($q) use ($keyword) {
    //             $q->where('nama', 'like', '%' . $keyword . '%')
    //                 ->orWhere('nik', 'like', '%' . $keyword . '%');
    //         });
    //     }

    //     if ($provinsiId) {
    //         $query->where('provinsi_id', $provinsiId);
    //     }

    //     if ($kotaId) {
    //         $query->where('kota_id', $kotaId);
    //     }

    //     $penduduks = $query->paginate(10);
    //     $provinsis = Provinsi::all();
    //     $kotas = Kota::all();

    //     $totalPenduduk = Penduduk::select('provinsi_id', 'kota_id', DB::raw('count(*) as total'))
    //         ->groupBy('provinsi_id', 'kota_id')
    //         ->get();

    //     return view('penduduk.index', compact('penduduks', 'provinsis', 'kotas', 'totalPenduduk'));
    // }

//     public function getTotal(Request $request)
//     {
//         $provinsi_id = $request->input('provinsi_id');
//         $kota_id = $request->input('kota_id');

//         $query = Penduduk::query();

//         if ($provinsi_id) {
//             $query->whereHas('kota', function ($q) use ($provinsi_id) {
//                 $q->where('provinsi_id', $provinsi_id);
//             });
//         }

//         if ($kota_id) {
//             $query->where('kota_id', $kota_id);
//         }

//         $totalPenduduk = $query->count();

//         return response()->json(['total' => $totalPenduduk]);
//     }


//     public function getTotalPendudukPage()
//     {
//         $provinsis = Provinsi::all();
//         $kotas = Kota::all();

//         return view('penduduk.total_penduduk', compact('provinsis', 'kotas'));
//     }


//     public function getRataUmur(Request $request)
//     {
//         $provinsi_id = $request->input('provinsi_id');
//         $kota_id = $request->input('kota_id');

//         $rataUmurBulan = Penduduk::select('provinsi_id', 'kota_id')
//             ->selectRaw('AVG(umur_bulan) as rata_umur_bulan')
//             ->where(function ($query) use ($provinsi_id, $kota_id) {
//                 if ($provinsi_id) {
//                     $query->where('provinsi_id', $provinsi_id);
//                 }

//                 if ($kota_id) {
//                     $query->where('kota_id', $kota_id);
//                 }
//             })
//             ->groupBy('provinsi_id', 'kota_id')
//             ->get();

//         return response()->json(['rata_umur' => $rataUmurBulan]);
//     }


//     public function getDataTotalPendudukByTanggalLahir(Request $request)
//     {
//         $bulan = $request->input('bulan');
//         $tahun = $request->input('tahun');

//         $penduduks = Penduduk::select('provinsi_id', 'kota_id', \DB::raw('count(*) as total'))
//             ->whereMonth('tanggal_lahir', $bulan)
//             ->whereYear('tanggal_lahir', $tahun)
//             ->groupBy('provinsi_id', 'kota_id')
//             ->get();

//         $provinsis = Provinsi::all();
//         $kotas = Kota::all();

//         return view('penduduk.index', compact('penduduks', 'provinsis', 'kotas'));
//     }


//     public function getDataRataUmurBulan(Request $request)
//     {
//         $provinsi_id = $request->input('provinsi_id');
//         $kota_id = $request->input('kota_id');

//         $query = Penduduk::query();

//         if ($provinsi_id) {
//             $query->where('provinsi_id', $provinsi_id);
//         }

//         if ($kota_id) {
//             $query->where('kota_id', $kota_id);
//         }

//         $penduduks = $query->get();

//         $rataUmurBulan = $penduduks->avg(function ($penduduk) {
//             return $penduduk->tanggal_lahir->diffInMonths(now());
//         });

//         $provinsis = Provinsi::all();
//         $kotas = Kota::all();

//         return view('penduduk.data_rata_umur', compact('rataUmurBulan', 'provinsis', 'kotas'));
//     }
// }
  // public function getDataTotalPenduduk(Request $request)
    // {
    //     $total_provinsi_id = $request->input('total_provinsi_id');
    //     $total_kota_id = $request->input('total_kota_id');

    //     $query = Penduduk::query();

    //     if (!empty($total_provinsi_id)) {
    //         $query->where('provinsi_id', $total_provinsi_id);
    //     }

    //     if (!empty($total_kota_id)) {
    //         $query->where('kota_id', $total_kota_id);
    //     }

    //     $totalPenduduk = $query->count();

    //     $provinsis = Provinsi::all();
    //     $kotas = Kota::all();

    //     return view('penduduk.data_total_penduduk', compact('totalPenduduk', 'provinsis', 'kotas'));
    // }
