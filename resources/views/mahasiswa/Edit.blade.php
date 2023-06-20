@extends('mahasiswa.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Edit Mahasiswa </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->Nim) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nim">Nim</label>
                    <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim" value="{{$mahasiswa->Nim}}">
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" value="{{$mahasiswa->Nama}}">
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas</label>
                    <select name="Kelas" id="Kelas" class="form-control">
                        @foreach ($kelas as $k)
                        <option value="{{$k->id}}" @if ($k->id == $mahasiswa->kelas_id) selected
                        @endif>{{$k->nama_kelas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="Jurusan" class="form-control" id="Jurusan" aria-describedby="Jurusan" value="{{$mahasiswa->Jurusan}}">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection
