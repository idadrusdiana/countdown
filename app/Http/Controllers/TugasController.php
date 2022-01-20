<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function tambah()
    {
        $tugas = Tugas::all();
        // dd($tugas);
        return view('tugas.tambah', compact('tugas'));
    }

    public function lihat($id)
    {
        $tugas = Tugas::find($id);

        return view('tugas.lihat')->with(array('tugas' => $tugas));
    }

    public function simpan(Request $input)
    {
        $tugas = new Tugas();
        $tugas->nama_tugas = $input->nama_tugas;
        $tugas->end_date=$input->end_date;
        $tugas->save();

        return redirect('tugas/tambah');
    }
}
