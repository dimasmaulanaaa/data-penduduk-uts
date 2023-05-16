@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kota</h1>

        <form method="POST" action="{{ route('kota.store') }}">
            @csrf

            <div class="form-group">
                <label for="provinsi_id">Provinsi:</label>
                <select name="provinsi_id" id="provinsi_id" class="form-control">
                    @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name">Nama Kota:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection
