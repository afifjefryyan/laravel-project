@extends('layout/main')

@section('content')

  <center>
    <h2>Tambah Data Jurusan</h2>

    <form action="/jurusan/store" method="POST">
      @csrf
      <table width="50%">
        <tr>
          <td width="25%"><strong>Nama Jurusan</strong></td>
          <td width="25%"><input type="text" name="nama_jurusan"></td>
        </tr>
        <tr>
          <td width="25%" colspan="2">
            <center>
              <button type="submit" class="button">Tambah</button>
            </center>
          </td>
        </tr>
      </table>
    </form>
  </center>

@endsection
