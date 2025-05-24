<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JadwalController extends Controller
{
    public function index()
    {
        $files = File::files(public_path('files/jadwal'));

        return view('admin.jadwal.index', compact('files'));
    }

    public function create()
    {
        return view('admin.jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jadwal_file' => 'required|mimes:pdf|max:2048'
        ]);

        $file = $request->file('jadwal_file');
        $filename = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('files/jadwal'), $filename);

        return redirect()->route('admin.jadwal.index')->with('success', 'File berhasil diupload.');
    }

    public function destroy($filename)
    {
        $filePath = public_path('files/jadwal/' . $filename);

        if (File::exists($filePath)) {
            File::delete($filePath);
            return redirect()->back()->with('success', 'File berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }
}
