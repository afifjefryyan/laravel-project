@extends('layout/main')

@section('content')

  <center>
    <h2>Data Guru</h2>

    <a href="/guru/create" class="button">Tambah data guru</a>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama Guru</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
      @foreach ($guru as $g)
        <tr align="center">
          <td>{{ $loop->iteration }}</td>
          <td>{{ $g->nip }}</td>
          <td>{{ $g->nama_guru }}</td>
          <td>{{ $g->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
          <td>{{ $g->alamat }}</td>
          <td>{{ $g->password }}</td>
          <td>
            <a href="/guru/edit/{{ $g->nip }}">Edit</a>
            <a href="/guru/destroy/{{ $g->nip }}" onclick="return confirm('Delete?')">Delete</a>
          </td>
        </tr>
      @endforeach
    </table>
  </center>

@endsection
