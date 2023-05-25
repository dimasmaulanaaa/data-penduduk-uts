@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Penduduk</div>

                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('penduduk.create') }}" class="btn btn-primary">Tambah Penduduk</a>
                    </div>

                    {{-- cari data penduduk --}}
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="card">
                                    <div class="card-header">Data Penduduk</div>
                    
                                    <div class="card-body">
                                        <form action="{{ route('penduduk.search') }}" method="GET" class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="search">Cari:</label>
                                                        <input type="text" name="search" id="search" class="form-control" placeholder="Nama atau NIK">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="provinsi_id">Provinsi:</label>
                                                        <select name="provinsi_id" id="provinsi_id" class="form-control">
                                                            <option value="">Semua Provinsi</option>
                                                            @foreach ($provinsis as $provinsi)
                                                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="kota_id">Kota:</label>
                                                        <select name="kota_id" id="kota_id" class="form-control">
                                                            <option value="">Semua Kota</option>
                                                            @foreach ($kotas as $kota)
                                                                <option value="{{ $kota->id }}">{{ $kota->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Cari</button>
                                        </form>
                    
                                        @if ($totalData > 0)
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>NIK</th>
                                                        <th>Provinsi</th>
                                                        <th>Kota</th>
                                                        <th>Tanggal lahir</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($penduduks as $penduduk)
                                                        <tr>
                                                            <td>{{ $penduduk->nama }}</td>
                                                            <td>{{ $penduduk->nik }}</td>
                                                            <td>{{ $penduduk->provinsi->name }}</td>
                                                            <td>{{ $penduduk->kota->name }}</td>
                                                            <td>{{ $penduduk->tgl_lahir}}</td>
                                                            <td>
                                                                <a href="{{ route('penduduk.edit', $penduduk->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                                <form action="{{ route('penduduk.destroy', $penduduk->id) }}" method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $penduduks->links() }}
                                        @else
                                            <p>Tidak ada data penduduk.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
