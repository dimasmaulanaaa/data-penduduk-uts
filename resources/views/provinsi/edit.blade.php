@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Kota</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('kota.update', $kota->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama Kota</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $kota->name) }}" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="provinsi_id" class="col-md-4 col-form-label text-md-right">Provinsi</label>

                                <div class="col-md-6">
                                    <select id="provinsi_id" class="form-control @error('provinsi_id') is-invalid @enderror" name="provinsi_id" required>
                                        <option value="">Pilih Provinsi</option>
                                        @foreach($provinsis as $provinsi)
                                            <option value="{{ $provinsi->id }}" {{ old('provinsi_id', $kota->provinsi_id) == $provinsi->id ? 'selected' : '' }}>{{ $provinsi->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('provinsi_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('kota.index') }}" class="btn btn-link">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
