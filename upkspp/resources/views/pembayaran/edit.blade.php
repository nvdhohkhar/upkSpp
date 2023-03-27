@extends('main.bootstrap')
@section('content')
<div class="text-center py-5 bg-dark text-white">
    <h3>Kelola SPP</h3>
</div>
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <div>
            <H4>Edit SPP</H4>
        </div>
        <div>
            <a href="{{ url('spp') }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
    <hr>
    <form action="{{ url('pembayaran/update') }}" method="post">
        <div class="modal-body">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="siswa_id" value="{{ $data->siswa_id }}">
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="form-group">
                <label for="jumlah_bayar">Jumlah Bayar</label>
                <input type="number" name="jumlah_bayar" id="jumlah_bayar" value="{{ $data->jumlah_bayar }}" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection