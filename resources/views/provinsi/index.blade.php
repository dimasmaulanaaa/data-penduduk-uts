@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Provinsi</h1>

        <a href="{{ route('provinsi.create') }}" class="btn btn-primary mb-3">Tambah Provinsi</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Provinsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($provinsis as $provinsi)
                    <tr>
                        <td>{{ $provinsi->id }}</td>
                        <td>{{ $provinsi->name }}</td>
                        <td>
                            <a href="{{ route('provinsi.edit', $provinsi->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('provinsi.destroy', $provinsi->id) }}" method="POST" class="d-inline">
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
@endsection
