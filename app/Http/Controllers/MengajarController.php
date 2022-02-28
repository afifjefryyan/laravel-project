<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Mengajar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MengajarController extends Controller
{
    public function index()
    {
        return view('mengajar/index', [
        'mengajar' => Mengajar::with('guru')->get()]);
    }

    public function create()
    {
        return view('mengajar/create',[
        'guru' => Guru::all(),
        'mapel' => Mapel::all(),
        'kelas' => Kelas::all()
    ]);
    
    }

    public function store(Request $request)
    {
        $data_mengajar = $request->validate([
            'nip' => ['required'],
            'id_mapel' => ['required'],
            'id_kelas' => ['required'],
        ]);

        Mengajar::create($data_mengajar);

        return redirect('/mengajar/index');
    }

    public function edit($id)
    {
        return view('mengajar/edit', [
            'mengajar' => Mengajar::where('id_mengajar', $id)->first(),
            'guru' => Guru::all(),
            'mapel' => Mapel::all(),
            'kelas' => Kelas::all()
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $data_mengajar = $request->validate([
            'nip' => ['required'],
            'id_mapel' => ['required'],
            'id_kelas' => ['required']
        ]);

        Mengajar::updateOrcreate(['id_mengajar' => $id], $data_mengajar);

        return redirect('/mengajar/index');
    }

    public function destroy($id)
    {
        Mengajar::where('id_mengajar', $id)->delete();

        return back();
    }
}
