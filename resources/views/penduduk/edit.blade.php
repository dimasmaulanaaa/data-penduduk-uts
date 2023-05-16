@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Penduduk</div>

                <div class="card-body">
                    <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $penduduk->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK:</label>
                            <input type="text" name="nik" id="nik"class="form-control" value="{{ $penduduk->nik }}" required>
                        </div>
                        <div class="form-group">
                        <label for="provinsi_id">Provinsi:</label>
                        <select name="provinsi_id" id="provinsi_id" class="form-control" required>
                        <option value="">Pilih Provinsi</option>
                        @foreach ($provinsis as $provinsi)
                        <option value="{{ $provinsi->id }}" {{ $penduduk->provinsi_id == $provinsi->id ? 'selected' : '' }}>{{ $provinsi->name }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="kota_id">Kota:</label>
                        <select name="kota_id" id="kota_id" class="form-control" required>
                        <option value="">Pilih Kota</option>
                        @foreach ($kotas as $kota)
                        <option value="{{ $kota->id }}" {{ $penduduk->kota_id == $kota->id ? 'selected' : '' }}>{{ $kota->name }}</option>
                        @endforeach
                        </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        </div>
                        @endsection
                            