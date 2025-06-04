@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>Detail Pesan</h3>
      </div>
      <div class="card-body">
        <h5><strong>Nama:</strong> {{ $kontak->nama }}</h5>
        <p><strong>Email:</strong> {{ $kontak->email }}</p>
        <p><strong>Pesan:</strong></p>
        <div class="border rounded p-3 bg-light">{{ $kontak->pesan }}</div>
        <p class="mt-3"><strong>Dikirim pada:</strong> {{ $kontak->created_at->format('d M Y H:i') }}</p>

        <a href="{{ route('admin.kontak.index') }}" class="btn btn-secondary mt-3">Kembali</a>
      </div>
    </div>
  </div>
</div>
@endsection
