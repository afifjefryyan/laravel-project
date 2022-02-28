@extends('layout/main')

@section('content')

<center>
    <h2>Tambah Data siswa</h2>
    <form action="/nilai/store" method="POST">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%"><strong>Mapel</strong></td>
                <td width="25%">
                    <select name="id_mengajar" id="">
                        <option value=""></option>
                        @foreach ($mengajar as $m)
                        <option value="{{ $m->id_mengajar }}">{{ $m->mapel->nama_mapel }}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td width="25%"><strong>Siswa</strong></td>
                <td width="25%">
                    <select name="nis" id="">
                        <option value=""></option>
                        @foreach ($siswa as $s)
                        <option value="{{ $s->nis }}">{{ $s->nama_siswa }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td width="25%"><strong>UH</strong></td>
                <td width="25%"><input type="text" name="uh"></td>
            </tr>
            <tr>
                <td width="25%"><strong>UTS</strong></td>
                <td width="25%"><input type="text" name="uts"></td>
            </tr>
            <tr>
                <td width="25%"><strong>UAS</strong></td>
                <td width="25%"><input type="text" name="uas"></td>
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