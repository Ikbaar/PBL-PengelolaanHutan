<?php

namespace App\Http\Controllers\Admin;

use App\Models\Akreditasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AkreditasiController extends Controller
{
    public function index()
    {
        $akreditasi = Akreditasi::all();
        return view('admin.akreditasi.index', compact('akreditasi'));
    }

    public function create()
    {
        return view('admin.akreditasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'sertifikat' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    

        // Menyimpan sertifikat gambar
        $sertifikatPath = $request->file('sertifikat')->store('sertifikat', 'public');

        Akreditasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'sertifikat_path' => $sertifikatPath,
        ]);

        return redirect()->route('admin.akreditasi.index')->with('success', 'Akreditasi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $akreditasi = Akreditasi::findOrFail($id);
        return view('admin.akreditasi.edit', compact('akreditasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'sertifikat' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $akreditasi = Akreditasi::findOrFail($id);

        // Jika ada gambar baru
        if ($request->hasFile('sertifikat')) {
            $sertifikatPath = $request->file('sertifikat')->store('sertifikat', 'public');
            $akreditasi->sertifikat_path = $sertifikatPath;
        }

        $akreditasi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.akreditasi.index')->with('success', 'Akreditasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $akreditasi = Akreditasi::findOrFail($id);
        $akreditasi->delete();

        return redirect()->route('admin.akreditasi.index')->with('success', 'Akreditasi berhasil dihapus.');
    }
}

