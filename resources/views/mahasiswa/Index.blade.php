@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="my-3">
        <form action="{{ route('mahasiswa.index') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by Name">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $m)
        <tr>
            <td>{{ $m->Nim }}</td>
            <td>{{ $m->Nama }}</td>
            <td>{{ $m->kelas->nama_kelas }}</td>
            <td>{{ $m->Jurusan }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$m->Nim) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',$m->Nim) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$m->Nim) }}">Edit</a>
                    @csrf

                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a class="btn btn-warning" href="/nilai/{{$m->Nim}}">Nilai</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pagination">
        @if ($mahasiswa->currentPage() > 1)
            <a href="{{ $mahasiswa->previousPageUrl() }}" class="btn btn-primary">Previous</a>
        @endif

        @if ($mahasiswa->hasMorePages())
            <a href="{{ $mahasiswa->nextPageUrl() }}" class="btn btn-primary">Next</a>
        @endif
    </div>
@endsection
