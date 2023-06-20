<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Mahasiswa_Matakuliah;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function nilai($id)
    {
        $mahasiswa = Mahasiswa::where('Nim', $id)->first();
        $nilai =  Mahasiswa_Matakuliah::where('mahasiswa_id', $mahasiswa->Nim)->get();

        return view('mahasiswa.nilai', compact(['mahasiswa','nilai']));
    }
}
