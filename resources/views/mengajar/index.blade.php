@extends('layout/main')

@section('content')

<center>
    <h2>Data Mengajar</h2>

    <a href="/mengajar/create" class="button">Tambah Data Mengajar</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Mapel</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>
        @foreach ($mengajar as $m)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $m->guru->nama_guru }}</td>
            <td>{{ $m->mapel->nama_mapel }}</td>
            <td>{{ $m->kelas->nama_kelas }}</td>
            <td>
                <a href="/mengajar/edit/{{ $m->id_mengajar }}">Edit</a>
                <a href="/mengajar/destroy/{{ $m->id_mengajar }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</center>

@endsection