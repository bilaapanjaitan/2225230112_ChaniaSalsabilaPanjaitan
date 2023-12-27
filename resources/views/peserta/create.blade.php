@extends('layouts.pink')

@section('content')
    <div class="container">
        <h1>Absen Peserta</h1>
        <form action="/peserta/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">NAMA</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" name="nim">
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">KELAS</label>
                <input type="text" class="form-control" name="kelas">
            </div>
            <div class="mb-3">
                <label for="program_studi" class="form-label">PROGRAM STUDI</label>
                <input type="text" class="form-control" name="program_studi">
            </div>
            <div class="mb-3">
                <label for="fakultas" class="form-label">FAKULTAS</label>
                <input type="text" class="form-control" name="fakultas">
            </div>
            <div class="mb-3">
                <select class="form-select" name="keterangan">
                    <option value="">Keterangan</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Izin">Izin</option>
                    <option value="Sakit">Sakit</option>
                </select>
            </div>
                <input type="submit" name="submit" class="btn btn-danger" value="Save">
        </form>
    </div>
@endsection