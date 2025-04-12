<?php

namespace App\Http\Controllers;

use App\Models\Alasan;
use App\Models\Berita;
use App\Models\AlasanBanner;
use App\Models\OutputLulusan;
use App\Models\Sejarah;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Dosen;
use App\Models\PLP;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Menampilkan halaman utama dengan data yang dibutuhkan
    public function index()
    {
        // Ambil data alasan, alasan banner, output lulusan, dan berita terbaru
        $alasan = Alasan::all();
        $alasanBanner = AlasanBanner::all();
        $outputLulusans = OutputLulusan::all();
        $beritas = Berita::orderBy('created_at', 'desc')->limit(3)->get();
        
        // Kirim data ke view
        return view('index', compact('outputLulusans', 'alasan', 'alasanBanner', 'beritas'));
    }

    // Menampilkan halaman profil dengan data sejarah
    public function profil()
{
    $sejarah = \App\Models\Sejarah::all();
    $visi = Visi::all();
    $misi = Misi::all();

    return view('profil', compact('sejarah', 'visi', 'misi'));
}

public function staff()
{
    $dosen = Dosen::all();
    $plp = PLP::all();

    return view('staff', compact('dosen', 'plp'));
}


    // Menampilkan detail berita berdasarkan ID
    public function beritaDetail($id)
    {
        // Cek jika berita ada atau tidak
        $berita = Berita::findOrFail($id);  // Jika tidak ditemukan, akan mengarah ke halaman 404
        return view('berita_detail', compact('berita'));
    }

    // Menampilkan semua berita
    public function beritaLainnya()
    {
        // Paginasi berita jika data banyak
        $beritas = Berita::orderBy('created_at', 'desc')->paginate(10);  // Menampilkan 10 berita per halaman
        return view('berita_lainnya', compact('beritas'));
    }

    // Menampilkan detail output lulusan berdasarkan ID
    public function outputLulusanDetail($id)
    {
        // Cek jika output lulusan ada atau tidak
        $outputLulusan = OutputLulusan::findOrFail($id);  // Jika tidak ditemukan, akan mengarah ke halaman 404
        return view('output_lulusan_detail', compact('outputLulusan'));
    }
}
