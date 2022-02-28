@extends('layout/main')

@section('content')

  <center>
    <h2>Data Jurusan</h2>

    <a href="/jurusan/create" class="button">Tambah Data Jurusan</a>

    @if (session('error'))
      <p style="color: red">{{ session('error') }}</p>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Nama Jurusan</th>
        <th>Action</th>
      </tr>
      @foreach ($jurusan as $j)
        <tr align="center">
          <td>{{ $loop->iteration }}</td>
          <td>{{ $j->nama_jurusan }}</td>
          <td>
            <a href="/jurusan/edit/{{ $j->id_jurusan }}">Edit</a>
            <a href="/jurusan/destroy/{{ $j->id_jurusan }}" onclick="return confirm('Delete?')">Delete</a>
          </td>
        </tr>
      @endforeach
    </table>
  </center>

@endsection
