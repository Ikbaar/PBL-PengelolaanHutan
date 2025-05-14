<!-- SECTION: Kalender Akademik -->
<section id="kalender-akademik" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Kalender Akademik</h2>
        <div class="mb-3">
            <a href="{{ route('admin.kalender.create') }}" class="btn btn-primary">Tambah Event</a>
        </div>
        @if($kalender->isNotEmpty())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Event</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kalender as $index => $event)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $event->nama_event }}</td>
                        <td>{{ \Carbon\Carbon::parse($event->tanggal)->translatedFormat('d F Y') }}</td>
                        <td>{{ $event->deskripsi }}</td>
                        <td>
                            <a href="{{ route('admin.kalender.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.kalender.destroy', $event->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus event ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center">Belum ada data kalender akademik.</p>
        @endif
    </div>
</section>