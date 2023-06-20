@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb text-center">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="pull-left mt-2 text-center" >
                <h1>KARTU HASIL STUDI</h1>
            </div>
        </div>
    </div>

    <div class="my-3"></div>

    <table>
        <tr>
            <td>Nama : {{$mahasiswa->Nama}}</td>
        </tr>
        <tr>
            <td>NIM : {{$mahasiswa->Nim}}</td>
        </tr>
        <tr>
            <td>Kelas : {{$mahasiswa->kelas->nama_kelas}}</td>
        </tr>
    </table>
    <br>

    <table class="table table-bordered">
        <tr>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
        @foreach ($nilai as $n)
        <tr>
            <td>{{ $n->matakuliah->nama_matkul}}</td>
            <td>{{ $n->matakuliah->sks}}</td>
            <td>{{ $n->matakuliah->semester }}</td>
            <td>{{ $n->nilai}}</td>
        </tr>
        @endforeach
    </table>
@endsection
