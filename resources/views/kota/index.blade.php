{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Kota</h1>

        <a href="{{ route('kota.create') }}" class="btn btn-primary mb-3">Tambah Kota</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kota</th>
                    <th>Provinsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kotas as $kota)
                    <tr>
                        <td>{{ $kota->id }}</td>
                        <td>{{ $kota->name }}</td>
                        <td>{{ $kota->provinsi->name }}</td>
                        <td>
                            <a href="{{ route('kota.edit', $kota->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('kota.destroy', $kota->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Kota</h1>
        <a href="{{ route('kota.create') }}" class="btn btn-primary mb-3">Tambah Kota</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Kota</th>
                    <th>Provinsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kotas as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->provinsi ? $item->provinsi->name : '-' }}</td>
                        <td>
                            <a href="{{ route('kota.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('kota.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
