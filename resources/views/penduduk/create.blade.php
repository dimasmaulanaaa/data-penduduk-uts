@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Penduduk</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('penduduk.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nik" class="col-md-4 col-form-label text-md-right">NIK</label>

                                <div class="col-md-6">
                                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autofocus>

                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-md-4 col-form-label text-md-right">Jenis Kelamin</label>

                                <div class="col-md-6">
                                    <select id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                    </select>

                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>

                                <div class="col-md-6">
                                    <input id="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>

                                    @error('tgl_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="provinsi_id" class="col-md-4 col-form-label text-md-right">Provinsi</label>

                                <div class="col-md-6">
                                    <select id="provinsi_id" class ="form-control @error('provinsi_id') is-invalid @enderror" name="provinsi_id" required>
                                        <option value="">Pilih Provinsi</option>
                                        @foreach($provinsis as $provinsi)
                                        <option value="{{ $provinsi->id }}" {{ old('provinsi_id') == $provinsi->id ? 'selected' : '' }}>{{ $provinsi->name }}</option>
                                        @endforeach
                                        </select>
                                        @error('provinsi_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="kota_id" class="col-md-4 col-form-label text-md-right">Kota</label>
    
                                <div class="col-md-6">
                                    <select id="kota_id" class="form-control @error('kota_id') is-invalid @enderror" name="kota_id" required>
                                        <option value="">Pilih Kota</option>
                                        @foreach($kotas as $kota)
                                            <option value="{{ $kota->id }}" {{ old('kota_id') == $kota->id ? 'selected' : '' }}>{{ $kota->name }}</option>
                                        @endforeach
                                    </select>
    
                                    @error('kota_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <a href="{{ route('penduduk.index') }}" class="btn btn-link">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection    
