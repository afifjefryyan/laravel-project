@extends('layout/main')

@section('content')

<center>
    <h2>Tambah Data Mapel</h2>

    <form action="/mapel/store" method="POST">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%"><strong>Nama Mapel</strong></td>
                <td width="25%"><input type="text" name="nama_mapel"></td>
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