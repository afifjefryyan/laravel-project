@extends('layout//main')

@section('content')

<center>
    <h2>Edit Data Mengajar</h2>

    <form action="/mengajar/store" method="POST">
    @csrf
    <table width="50%">
        <tr>
            <td width="25%"><strong>Nama Guru</strong></td>
            <td width="25%">
                <select name="nip">
                <option></option>    
                @foreach ($guru as $g)
                    <option value="{{ $g->nip }}">{{ $g->nama_guru }}</option>
                @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%"><strong>Mapel</strong></td>
            <td width="25%">
                <select name="id_mapel">
                <option></option>    
                @foreach ($mapel as $m)
                    <option value="{{ $m->id_mapel }}">{{ $m->nama_mapel }}</option>
                @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%"><strong>Kelas</strong></td>
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