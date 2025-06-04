<li class="sidebar-header fw-bold fs-4">Dashboard PH</li>

{{-- <li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.index') }}">
        <i class="align-middle" data-feather="home"></i>
        <span class="align-middle">Dashboard</span>
    </a>
</li> --}}

<li class="sidebar-header">MANAGEMENT KONTEN</li>

<li class="sidebar-item {{ request()->routeIs('alasan.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('alasan.index') }}">
        <i class="align-middle" data-feather="file-text"></i>
        <span class="align-middle">Alasan</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.berita.index') }}">
        <i class="align-middle" data-feather="file-text"></i>
        <span class="align-middle">Berita</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.sejarah.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.sejarah.index') }}">
        <i class="align-middle" data-feather="book-open"></i>
        <span class="align-middle">Sejarah</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.visi.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.visi.index') }}">
        <i class="align-middle" data-feather="target"></i>
        <span class="align-middle">Visi</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.misi.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.misi.index') }}">
        <i class="align-middle" data-feather="file-text"></i>
        <span class="align-middle">Misi</span>
    </a>
</li>

<li class="sidebar-header">AKADEMIK</li>

<li class="sidebar-item {{ request()->routeIs('admin.dokumen.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.dokumen.index') }}">
        <i class="align-middle" data-feather="calendar"></i>
        <span class="align-middle">Dokumen</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.output-lulusan.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.output-lulusan.index') }}">
        <i class="align-middle" data-feather="user-check"></i>
        <span class="align-middle">Output Lulusan</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.kurikulum.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.kurikulum.index') }}">
        <i class="align-middle" data-feather="book-open"></i>
        <span class="align-middle">Kurikulum</span>
    </a>
</li>

<li class="sidebar-header">DATA PEGAWAI</li>

<li class="sidebar-item {{ request()->routeIs('admin.dosen.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.dosen.index') }}">
        <i class="align-middle" data-feather="users"></i>
        <span class="align-middle">Dosen</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.plp.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.plp.index') }}">
        <i class="align-middle" data-feather="user"></i>
        <span class="align-middle">PLP & Admin</span>
    </a>
</li>

<li class="sidebar-header">LAIN-LAIN</li>

<li class="sidebar-item {{ request()->routeIs('admin.akreditasi.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.akreditasi.index') }}">
        <i class="align-middle" data-feather="award"></i>
        <span class="align-middle">Akreditasi</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.beasiswa.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.beasiswa.index') }}">
        <i class="align-middle" data-feather="gift"></i>
        <span class="align-middle">Beasiswa</span>
    </a>
</li>

<li class="sidebar-item {{ request()->routeIs('admin.kontak.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.kontak.index') }}">
        <i class="align-middle" data-feather="file-text"></i>
        <span class="align-middle">Kontak</span>
    </a>
</li>
