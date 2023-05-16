<!-- resources/views/provinsi/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Tambah Provinsi</div>

                    <div class="card-body">
                        <form action="{{ route('provinsi.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="id">ID Provinsi</label>
                                <input type="text" class="form-control" id="id" name="id" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Provinsi</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
