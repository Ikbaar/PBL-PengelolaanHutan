@extends('layouts.dashboard')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h3>Pesan Masuk</h3>
        {{-- Kalau mau tambah tombol aksi, bisa ditaruh di sini --}}
      </div>
      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse($kontaks as $index => $kontak)
                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $kontak->nama }}</td>
                  <td>{{ $kontak->email }}</td>
                  <td>{{ $kontak->pesan }}</td>
                  <td>{{ $kontak->created_at->format('d M Y H:i') }}</td>
                  <td>
                    <a href="{{ route('admin.kontak.show', $kontak->id) }}" class="btn btn-warning btn-sm">Lihat</a>
                    <form action="{{ route('admin.kontak.destroy', $kontak->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center">Belum ada pesan masuk.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
