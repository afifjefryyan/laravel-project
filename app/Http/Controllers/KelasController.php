<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function index()
    {
        return view('kelas/index', [
        'kelas' => kelas::all()]);
    }


    public function create()
    {
        return view('kelas/create',[
        'jurusan' => Jurusan::all()
    ]);
    
    }

    public function store(Request $request)
    {
        $data_kelas = $request->validate([
            'nama_kelas' => ['required'],
            'id_jurusan' => ['required'],
        ]);

        kelas::create($data_kelas);

        return redirect('/kelas/index');
    }
    public function edit($id)
    {
        return view('kelas/edit', [
            'kelas' => Kelas::where('id_kelas', $id)->first(),
            'jurusan' => Jurusan::all()
        ]);
    }

    public function update(Request $request, $id){
        $data_kelas = $request->validate([
            'nama_kelas' => ['required'],
            'id_jurusan' => ['required'],
        ]);

        Kelas::updateOrCreate(['id_kelas' => $id], $data_kelas);

        return redirect('/kelas/index');
    }

    public function destroy($id)
    {
        $siswa = Siswa::where('id_kelas', $id)->first();

        if ($siswa) {
            return back()->with('error', 'Error Cuy');
        }
        kelas::where('id_kelas', $id)->delete();

        return back();
    }
}