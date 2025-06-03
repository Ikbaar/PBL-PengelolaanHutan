@extends('layouts.landing.index')

@section('content')
<section class="kurikulum-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">Kurikulum</h2>

    <div class="d-flex justify-content-center mb-4">
      @for ($i = 1; $i <= 6; $i++)
        <button class="btn mx-1 semester-btn {{ $i == 1 ? 'active' : '' }}" data-target="semester{{ $i }}">Semester {{ $i }}</button>
      @endfor
    </div>

    @for ($i = 1; $i <= 6; $i++)
      <div id="semester{{ $i }}" class="semester-table {{ $i != 1 ? 'd-none' : '' }}">
        <h4>Semester {{ $i }}</h4>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($kurikulums->where('semester', $i) as $item)
              <tr>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->mata_kuliah }}</td>
                <td>{{ $item->sks }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="text-center">Belum ada data untuk semester ini</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    @endfor

  </div>
</section>

<script>
  document.querySelectorAll('.semester-btn').forEach(button => {
    button.addEventListener('click', () => {
      // Reset tombol aktif
      document.querySelectorAll('.semester-btn').forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      // Sembunyikan semua tabel semester
      document.querySelectorAll('.semester-table').forEach(table => table.classList.add('d-none'));

      // Tampilkan tabel target
      const target = button.getAttribute('data-target');
      document.getElementById(target).classList.remove('d-none');
    });
  });
</script>

@endsection
