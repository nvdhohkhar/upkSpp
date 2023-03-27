@extends('main.bootstrap')

@section('content')
<div class="text-center py-5 h-100 bg-dark text-white">
    <h3>Kelola User</h3>
</div>

<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Edit User</h4>
        </div>
        <a href="{{ url('user') }}" class="btn btn-warning">Kembali</a>
    </div>
    <hr>
    <form action="{{ url('user/update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $users->id }}">
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $users->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $users->email }}"  required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <small>Kosongkan Jika Tidak Ingin Mengganti Password.</small>
        </div>

        <div class="form-group">
            <label for="level">level</label>
            <select name="level" id="" class="form-select" required>
                <option value="" disabled selected>pilih level user</option>
                <option  {{ $users->level == 'admin' ? 'selected' : ''}} value="Admin">Admin</option>
                <option  {{ $users->level == 'petugas' ? 'selected' : ''}} value="Petugas">Petugas</option>
                <option  {{ $users->level == 'siswa' ? 'selected' : ''}} value="Siswa">Siswa</option>
            </select>
        </div>

        <div class="mt-3 text-end">
            <button type="reset" class="btn btn-secondary">reset</button>
            <button type="submit" class="btn btn-success">simpan</button>
        </div>
    </form>
</div>
@endsection