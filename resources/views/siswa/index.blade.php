@extends('layout/main')

@section('content')

<center>
    <h2>Data Siswa</h2>

    <a href="/siswa/create" class="button">Tambah Data Siswa</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama_siswa }}</td>
            <td>{{ $s->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->kelas->nama_kelas }}</td>
            <td>{{ $s->password }}</td>
            <td>
                <a href="/siswa/edit/{{ $s->nis }}">Edit</a>
                <a href="/siswa/destroy/{{ $s->nis }}">Delete</a>
            </td>
        </tr>
        @endforeach
        </table>
</center>

@endsection