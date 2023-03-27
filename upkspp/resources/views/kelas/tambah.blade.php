@extends('main.bootstrap')

@section('content')
<div class="text-center py-5 h-100 bg-dark text-white">
    <h3>Kelola User</h3>
</div>

<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Tambah User</h4>
        </div>
        <a href="{{ url('kelas') }}" class="btn btn-warning">Kembali</a>
    </div>
    <hr>
    <form action="{{ url('/kelas/simpan') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
            <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control" required>
        </div>

        <div class="mt-3 text-end">
            <button type="reset" class="btn btn-secondary">reset</button>
            <button type="submit" class="btn btn-success">simpan</button>
        </div>
    </form>
</div>
@endsection