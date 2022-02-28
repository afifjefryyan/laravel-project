@extends('layout/main')

@section('content')

<center>
    <h2>Data Kelas</h2>

    @if (session('error'))
    <p>{{ session('error') }}</p>
    @endif
    <a href="/kelas/create" class="button">Tambah Data Kelas</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        @foreach ($kelas as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->nama_kelas }}</td>
            <td>{{ $k->jurusan->nama_jurusan }}</td>
            <td>
                <a href="/kelas/edit/{{ $k->id_kelas }}">Edit</a>
                <a href="/kelas/destroy/{{ $k->id_kelas }}" onclick="return confirm ('Delete?')">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</center>

@endsection