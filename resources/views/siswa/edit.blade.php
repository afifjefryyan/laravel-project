@extends('layout/main')

@section('content')

<center>
    <h2>Edit Data Siswa</h2>

    <form action="/siswa/update/{{ $siswa->nis }}"  method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td width="25%"><strong>NIS</strong></td>
            <td width="25%"><input type="text" name="nis" value="{{ $siswa->nis }}"></td>
        </tr>
        <tr>
            <td width="25%"><strong>Nama Siswa</strong></td>
            <td width="25%"><input type="text" name="nama_siswa" value="{{ $siswa->nama_siswa }}"></td>
        </tr>
        <tr>
            <td width="25%"><strong>Nama Siswa</strong></td>
            <td width="25%">
                <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : '' }}>Laki-laki
                <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : '' }}>Perempuan  
            </td>
        </tr>
        <tr>
            <td width="25%"><strong>Alamat</strong></td>
            <td width="25%"><textarea name="alamat" cols="30" rows="5">{{ $siswa->alamat }}</textarea></td>
        </tr>
        <tr>
            <td width="25%"><strong>Nama kelas</strong></td>
            <td width="25%">
                <select name="id_kelas">
                    <option></option>
                    @foreach ($kelas as $k)
                    @if ($siswa->id_kelas == $k->id_kelas)
                        <option value="{{ $k->id_kelas }}" selected>{{ $k->nama_kelas }}</option>
                    @else
                        <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                    @endif
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%"><strong>Password</strong></td>
            <td width="25%"><input type="password" name="password" value="{{ $siswa->password }}"></td>
        </tr>
        <tr>
            <td width="25%" collspan="2">
            <center>
                <button type="submit" class="button">Tambah</button>
            </center>
            </td>
        </tr>
    </table>
    </form>
</center>

@endsection