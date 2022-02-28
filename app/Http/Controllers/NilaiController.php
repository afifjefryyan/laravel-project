<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mengajar;
use App\Models\Siswa;
use App\Http\Controllers\NilaiController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class NilaiController extends Controller
{
    //
    public function index(){

        if (session('role') == 'guru') {
            $nilai = Nilai::whereHas('mengajar', function($query){
                $query->where('nip', session('nip'));
            })->get();
        } else {
            $nilai = Nilai::where('nis', session('nis'))->get();
        }

        return view('nilai/index', [
            'nilai' => $nilai
        ]);
    }

    public function create(){
        $mengajar = Mengajar::where('nip', session('nip'));
        $siswa = $mengajar->first();

        return view('nilai/create', [
            'mengajar' => $mengajar->get(),
            'siswa' => Siswa::whereIn('id_kelas', $siswa)->get()
        ]);
    }

    public function store(Request $request){

        $data_nilai = $request->validate([
            'id_mengajar' => ['required'],
            'nis' => ['required'],
            'uh' => ['required', 'numeric'],
            'uts' => ['required', 'numeric'],
            'uas' => ['required', 'numeric']
        ]);

        $uts = $request->uts;
        $uh = $request->uh;
        $uas = $request->uas;

        $data_nilai['na'] = round(($uh + $uts + $uas)/ 3);

        Nilai::create($data_nilai);
        return redirect('/nilai/index');

    }

    public function edit(Request $request, $id){

        $mengajar = Mengajar::where('nip', session('nip'));

        return view('nilai.edit', [
            'nilai' => Nilai::where('id_nilai', $id)->first(),
            'mengajar' => $mengajar->get(),
            'siswa' => Siswa::whereIn('id_kelas', $mengajar->get('id_kelas'))->get()
        ]);
    }

    public function upadate(Request $request, $id){
        $data_nilai = $request->validate([
            'id_mengajar' => ['required'],
            'nis' => ['required'],
            'uh' => ['required','numeric'],
            'uts' => ['required', 'numeric'],
            'uas' => ['required', 'numeric']
        ]);

        $uts = $request->uts;
        $uh = $request->uh;
        $uas = $request->uas;

        $data_nilai['na'] = round(($uh + $uts + $uas)/ 3);

        Nilai::create($data_nilai);
        return redirect('/nilai/index');

    }

    public function destroy($id){

        Nilai::where('id_nilai', $id)->delete();
        return back();

    }





}
