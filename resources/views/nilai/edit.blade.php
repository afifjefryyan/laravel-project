@extends('layout/main')

@section('content')

<center>
    <h2>Edit Data Mengajar</h2>

    <form action="/nilai/update/{{ $nilai->id_nilai  }}" method="POST">
        @csrf
        <table width="50%">
            <tr>
                <td width="25%"><strong>Mapel</strong></td>
                <td width="25%">
                    <select name="id_mengajar">
                        <option></option>
                        @foreach ($mengajar as $m)
                        @if ($nilai->id_mengajar == $m->id_mengajar)
                        <option value="{{ $m->id_mengajar }}" selected>{{ $m->mapel->nama_mapel }}
                        </option>
                        @else
                        <option value="{{ $m->id_mengajar }}">{{ $m->mapel->nama_mapel }}
                        </option>
                        @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td width="25%"><strong>Siswa</strong></td>
                <td width="25%">
                    <select name="nis">
                        <option></option>
                        @foreach ($siswa as $s)
                        @if ($nilai->nis == $s->nis)
                        <option value="{{ $s->nis }}" selected>{{ $s->nama_siswa }}</option>
                        @else
                        <option value="{{ $s->nis }}">{{ $s->nama_siswa }}</option>
                        @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td width="25%"><strong>UH</strong></td>
                <td width="25%">
                    <input type="text" name="uh" value="{{ $nilai->uh }}">
                </td>
            </tr>
            <tr>
                <td width="25%"><strong>UTS</strong></td>
                <td width="25%">
                    <input type="text" name="uts" value="{{ $nilai->uts }}">
                </td>
            </tr>
            <tr>
                <td width="25%"><strong>UAS</strong></td>
                <td width="25%">
                    <input type="text" name="uas" value="{{ $nilai->uas }}">
                </td>
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