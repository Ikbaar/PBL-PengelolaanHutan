@extends('layouts.landing.index')
@section('content')

<section id="dosen" class="dosen-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">Daftar Dosen</h2>

    <!-- Tabel Daftar Dosen -->
    <table class="table table-bordered table-striped">
      <thead class="thead-dark text-center">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Nama</th>
          <th>NIP</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dosen as $index => $item)
        <tr>
          <td class="text-center">{{ $index + 1 }}</td> <!-- No centering -->
          <td>
            @if ($item->photo)
              <img src="{{ asset('storage/' . $item->photo) }}" alt="Foto Dosen {{ $index + 1 }}" width="50" height="50">
            @else
              -
            @endif
          </td>
          <td>{{ $item->name }}</td> <!-- Left-aligned -->
          <td>{{ $item->nip }}</td> <!-- Left-aligned -->
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>





<section id="plp-admin" class="plp-admin-section">
  <div class="container">
    <h2 class="text-center mb-4">PLP & Admin</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-success text-center">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>Posisi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($plp as $index => $plp)
            <tr>
              <td class="text-center">{{ $index + 1 }}</td>
              <td>{{ $plp->nama }}</td>
              <td>{{ $plp->nip }}</td>
              <td>{{ $plp->posisi }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection

