@extends('layouts.landing.index')

@section('content')
<section class="detail-dokumen py-5">
    <div class="container">
        <a href="{{ route('dokumen') }}" class="btn btn-outline-secondary mb-4">&larr; Kembali ke daftar dokumen</a>
        

        @if (file_exists(storage_path('app/public/' . $dokumen->file_path)))
            <div class="text-center mb-4">
                <iframe src="{{ asset('storage/' . $dokumen->file_path) }}" width="100%" height="600px" style="border:1px solid #ccc; border-radius: 8px;"></iframe>
            </div>

                <a href="{{ asset('storage/' . $dokumen->file_path) }}" class="btn download-btn" download>
                    Download PDF
                </a>
        @else
            <p class="text-danger text-center">File tidak ditemukan.</p>
        @endif
    </div>
</section>
@endsection
