@extends('layout/main')

@section('content')

<center>
    <h2>Edit Data Mapel</h2>

    <form action="/mapel/update/{{ $mapel->id_mapel }}" method="POST">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%"><strong>Nama mapel</strong></td>
                <td width="25%"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
            </tr>
            <tr>
                <td width="50%" colspan="2">
                <center>
                    <button type="submit" class="button">Edit</button>
                </center>
                </td>
            </tr>
        </table>
    </form>
</center>

@endsection