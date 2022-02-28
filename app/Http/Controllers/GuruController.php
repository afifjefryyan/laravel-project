<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mengajar;
use Illuminate\Http\Request;

class GuruController extends Controller
{
  public function index()
  {
    return view('guru/index', [
      'guru' => Guru::all()
    ]);
  }

  public function create()
  {
    return view('guru.create');
  }

  public function store(Request $request)
  {
    $data_guru = $request->validate([
      'nip' => ['required', 'numeric'],
      'nama_guru' => ['required'],
      'jk' => ['required'],
      'alamat' => ['required'],
      'password' => ['required']
    ]);

    Guru::create($data_guru);

    return redirect('/guru/index');
  }

  public function edit($nip)
  {
    //return response()->json(Guru::where('nip', $nip)->first());
    return view('guru/edit', [
      'guru' => Guru::where('nip', $nip)->first()
    ]);
  }

  public function update(Request $request, $nip)
  {
    $data_guru = $request->validate([
      'nip' => ['required', 'numeric'],
      'nama_guru' => ['required'],
      'jk' => ['required'],
      'alamat' => ['required'],
      'password' => ['required']
    ]);

    Guru::updateOrCreate(['nip' => $nip], $data_guru);

    return redirect('/guru/index');
  }

  public function destroy($nip)
  {
    $guru = Guru::where('nip', $nip)->first();

    $guru->delete();

    return back();
  }
}
