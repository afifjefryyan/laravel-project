@extends('layout/main')

@section('content')

<center>
    <h2>Data Mapel</h2>

    <a href="/mapel/create" class="button">Tambah Mapel</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Mapel</th>
            <th>Action</th>
        </tr>
        @foreach ($mapel as $m)
            <tr align="center">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->nama_mapel }}</td>
                <td>
                    <a href="/mapel/edit/{{ $m->id_mapel }}">Edit</a>
                    <a href="/mapel/destroy/{{ $m->id_mapel }}" onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</center>

@endsection