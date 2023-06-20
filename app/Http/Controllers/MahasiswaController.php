<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Mahasiswa_Matakuliah;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    $keyword = $request->get('search');
    $query = Mahasiswa::query()->with('kelas');

    if ($keyword) {
        $query->where('Nama', 'LIKE', "%$keyword%");
    }

    $mahasiswa = $query->paginate(5);

    return view('mahasiswa.index', compact('mahasiswa'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create',compact(['kelas']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->Nim = $request->get('Nim');
        $mahasiswa->Nama = $request->get('Nama');
        $mahasiswa->Jurusan = $request->get('Jurusan');
        $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('Kelas');

            //fungsi eloquent untuk menambah datadengan relasi belongTo
            $mahasiswa->kelas()->associate($kelas);
            $mahasiswa->save();
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('mahasiswa.index')
                ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($Nim)
    {
        $Mahasiswa = Mahasiswa::with('kelas')->where('Nim',$Nim)->first();
        return view('mahasiswa.detail', compact('Mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($Nim)
    {
        $mahasiswa = Mahasiswa::with('kelas')->where('Nim',$Nim)->first();
        $kelas = Kelas::all();
        return view('mahasiswa.edit', compact('mahasiswa','kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Nim)
    {
        $request->validate([
            'Nim' => 'required',
            'Nama' => 'required',
            'Kelas' => 'required',
            'Jurusan' => 'required',
        ]);

        $mahasiswa = Mahasiswa::with('kelas')->where('Nim',$Nim)->first();
        $mahasiswa->Nim = $request->get('Nim');
        $mahasiswa->Nama = $request->get('Nama');
        $mahasiswa->Jurusan = $request->get('Jurusan');
        $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('Kelas');

            //fungsi eloquent untuk menambah datadengan relasi belongTo
            $mahasiswa->kelas()->associate($kelas);
            $mahasiswa->save();
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('mahasiswa.index')
                ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Nim)
    {
        Mahasiswa::find($Nim)->delete();
        return redirect()->route('mahasiswa.index')
            -> with('success', 'Mahasiswa Berhasil Dihapus');
    }

}
