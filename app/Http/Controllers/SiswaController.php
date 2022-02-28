<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa/index', [
            'siswa' => Siswa::all()
        ]);
    }

    public function create()
    {
        return view('siswa/create', [
            'kelas' => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        

      $data_siswa = $request->validate([
        'nis' => ['required', 'numeric', 'unique:siswa,nis'],
        'nama_siswa' => ['required'],
        'jk' => ['required'],
        'alamat' => ['required'],
        'id_kelas' => ['required'],
        'password' => ['required']
      ]);
    Siswa::create($data_siswa);

    return redirect('/siswa/index');
    }

    public function edit($nis)
    {
        return view('siswa/edit', [
            'siswa' => Siswa::where('nis', $nis)->first(),
            'kelas' => Kelas::all()
        ]);
    }

    public function update(Request $request, $nis)
    {
        $data_siswa = $request->validate([
            'nis' => ['required', 'numeric'],
            'nama_siswa' => ['required'],
            'jk' => ['required',],
            'alamat' => ['required',],
            'id_kelas' => ['required'],
            'password' => ['required']
        ]);

        Siswa::updateOrCreate(['nis' => $nis], $data_siswa);

        return redirect('/siswa/index');
    }

    public function destroy($nis)
    {
        Siswa::where('nis', $nis)->delete();

        return back();
    }
}
