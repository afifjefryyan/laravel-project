@extends('layout/main')

@section('content')

<center>
    <h2>Data Nilai</h2>
    @if (session('role') == 'guru')
    <a href="/nilai/create" class="button">Tambah Data Nilai</a>
    @endif


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Mapel</th>
            <th>Guru</th>
            <th>Nama Siswa</th>
            <th>UH</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>

            @if (session('role') == 'guru')
            <th>Action</th>
            @endif

        </tr>

        @foreach ($nilai as $n)
        <tr align="center">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $n->mengajar->mapel->nama_mapel }}</td>
            <td>{{ $n->mengajar->guru->nama_guru }}</td>
            <td>{{ $n->siswa->nama_siswa }}</td>
            <td>{{ $n->uh }}</td>
            <td>{{ $n->uts }}</td>
            <td>{{ $n->uas }}</td>
            <td>{{ $n->na }}</td>
            @if (session('role') == 'guru')
            <td>
                <a href="/nilai/edit/{{ $n->id_nilai }}">Edit</a>
                <a href="/nilai/destroy/{{ $n->id_nilai }}" onclick="return confirm ('Delete?')">Destroy</a>
            </td>
            @endif
        </tr>
        @endforeach
    </table>
</center>


@endsection