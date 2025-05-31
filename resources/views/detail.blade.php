@extends('layouts.landing.index')

@section('content')
<section class="detail-dokumen py-5">
    <div class="container">
        @if (file_exists(storage_path('app/public/' . $dokumen->file_path)))
            <div class="text-center mb-4">
                <iframe src="{{ asset('storage/' . $dokumen->file_path) }}" width="100%" height="600px" style="border:1px solid #ccc; border-radius: 8px;"></iframe>
            </div>
            <div class="text-center">
                <a href="{{ asset('storage/' . $dokumen->file_path) }}" class="btn download-btn" download>
                    Download PDF
                </a>
            </div>
        @else
            <p class="text-danger text-center">File tidak ditemukan.</p>
        @endif
    </div>
</section>
@endsection
