@extends('layout/main')

@section('content')

<center>
    <h2>Tambah Data Siswa</h2>

    <form action="/siswa/store" method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td width="25%"><strong>NIS</strong></td>
            <td width="25%"><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td width="25%"><strong>Nama Siswa</strong></td>
            <td width="25%"><input type="text" name="nama_siswa"></td>
        </tr>
        <tr>
            <td width="25%"><strong>Jenis Kelamin</strong></td>
            <td width="25%">
                <input type="radio" name="jk" value="L">Laki-laki
                <input type="radio" name="jk" value="P">Perempuan  
            </td>
        </tr>
        <tr>
            <td width="25%"><strong>Alamat</strong></td>
            <td width="25%"><textarea name="alamat" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td width="25%"><strong>Nama kelas</strong></td>
            <td width="25%">
                <select name="id_kelas">
                    <option></option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%"><strong>Password</strong></td>
            <td width="25%"><input type="password" name="password"></td>
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