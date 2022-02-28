@extends('layout/main')

@section('content')

  <center>
    <h2>Edit Data Guru</h2>

    <form action="/guru/update/{{ $guru->nip }}" method="POST">
      @csrf
      <table width="50%">
        <tr>
          <td width="25%"><strong>NIP</strong></td>
          <td width="25%"><input type="text" name="nip" maxlength="10" value="{{ $guru->nip }}"></td>
        </tr>
        <tr>
          <td width="25%"><strong>Nama Guru</strong></td>
          <td width="25%"><input type="text" name="nama_guru" maxlength="10" value="{{ $guru->nama_guru }}"></td>
        </tr>
        <tr>
          <td width="25%"><strong>Jenis Kelamin</strong></td>
          <td width="25%">
            <input type="radio" name="jk" value="L" {{ $guru->jk == 'L' ? 'checked' : '' }}> Laki-laki
            <br>
            <input type="radio" name="jk" value="P" {{ $guru->jk == 'P' ? 'checked' : '' }}> Perempuan
          </td>
        </tr>
        <tr>
          <td width="25%"><strong>Alamat</strong></td>
          <td width="25%"><textarea name="alamat" cols="30" rows="5">{{ $guru->alamat }}</textarea></td>
        </tr>
        <tr>
          <td width="25%"><strong>Password</strong></td>
          <td width="25%"><input type="text" name="password" value="{{ $guru->password }}"></td>
        </tr>
        <tr>
          <td width="25%" colspan="2">
            <center>
              <button type="submit" class="button">Edit</button>
            </center>
          </td>
        </tr>
      </table>
    </form>
  </center>

@endsection
