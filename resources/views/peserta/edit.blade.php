@extends('layouts.pink')

@section('content')
    <div class="container">
        <h1>Edit</h1>

    <form action="/peserta/{{$peserta->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">NAMA</label>
            <input type="text" class="form-control" name="nama" value="{{$peserta->nama}}">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" value="{{$peserta->nim}}">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">KELAS</label>
            <input type="text" class="form-control" name="kelas" value="{{$peserta->kelas}}">
        </div>
        <div class="mb-3">
            <label for="program_studi" class="form-label">PROGRAM STUDI</label>
            <input type="text" class="form-control" name="program_studi" value="{{$peserta->program_studi}}">
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">FAKULTAS</label>
            <input type="text" class="form-control" name="fakultas" value="{{$peserta->fakultas}}">
        </div>
        <div class="mb-3">
            <select class="form-select" name="keterangan">
                <option value="">Keterangan</option>
                <option value="Hadir" @if($peserta->keterangan == "Hadir") selected @endif>Hadir</option>
                <option value="Izin" @if($peserta->keterangan == "Izin") selected @endif>Izin</option>
                <option value="Sakit" @if($peserta->keterangan == "Sakit") selected @endif>Sakit</option>
            </select>
        </div>
            <input type="submit" name="submit" class="btn btn-danger" value="Update">
    </form>
    </div>
@endsection