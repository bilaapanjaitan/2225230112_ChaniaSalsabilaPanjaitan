@extends('layouts.pink')

@section('content')
    <div class="container">
        <a class="btn btn-outline-danger" href="/peserta/create">Isi Absen</a>
        <table class="table table-danger">
            <tr>
                <th>NO.</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>KELAS</th>
                <th>PROGRAM STUDI</th>
                <th>FAKULTAS</th>
                <th>KETERANGAN</th>
                <th>AKSI</th>
            </tr>
            @foreach($peserta as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->nim}}</td>
                <td>{{$p->kelas}}</td>
                <td>{{$p->program_studi}}</td>
                <td>{{$p->fakultas}}</td>
                <td>{{$p->keterangan}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="basic exsample">
                        <a class="btn btn-light" href="/peserta/{{$p->id}}/edit">Edit</a>
                        <form action="/peserta/{{$p->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection