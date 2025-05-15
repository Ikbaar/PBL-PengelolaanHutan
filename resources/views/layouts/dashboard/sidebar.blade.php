<li class="sidebar-header">
</li>

<li class="sidebar-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.index') }}">
    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>

    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('alasan.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Alasan</span>
    </a>
    <!-- <a class="sidebar-link" href="{{ route('admin.alasan-banner.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Banner Alasan</span>
    </a> -->
    <a class="sidebar-link" href="{{ route('admin.berita.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Berita</span>
    </a>
    <a class="sidebar-link" href="{{ route('admin.output-lulusan.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Output Lulusan</span>
    </a>
    <a class="sidebar-link" href="{{ route('admin.sejarah.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Sejarah</span>
    </a>
    <a class="sidebar-link" href="{{ route('admin.visi.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Visi</span>
    </a>
    <a class="sidebar-link" href="{{ route('admin.misi.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Misi</span>
    </a>
    <a class="sidebar-link" href="{{ route('admin.dosen.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Dosen</span>
    </a>
    <a class="sidebar-link" href="{{ route('admin.plp.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">PLP & Admin</span>
    </a>
    <a class="sidebar-link" href="{{ route('admin.akreditasi.index') }}">
        <i class="align-middle" data-feather="papers"></i> <span class="align-middle">Akreditasi</span>
    </a>

    <li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('admin.kalender.index') }}">
        <span class="sidebar-middle">Kalender Akademik</span>
    </a>
</li>
</li>




