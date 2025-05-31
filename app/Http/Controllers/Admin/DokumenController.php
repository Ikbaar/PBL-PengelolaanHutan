<?php

namespace App\Http\Controllers\admin;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // jangan lupa import Storage

class DokumenController extends Controller
{
    // Public: Landing page
    public function indexPublic()
    {
        $dokumen = Dokumen::latest()->get();
        return view('dokumen', compact('dokumen'));
    }

    // Public: Show detail PDF
    public function show($id)
{
    $dokumen = Dokumen::findOrFail($id); // Ambil satu data saja, kalau gak ada error 404
    return view('detail', compact('dokumen'));
}


    // Admin: Index
    public function index()
    {
        $dokumen = Dokumen::all();
        return view('admin.dokumen.index', compact('dokumen'));
    }

    // Admin: Create form
    public function create()
    {
        return view('admin.dokumen.create');
    }

    // Admin: Store
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $path = $request->file('file')->store('dokumen', 'public');

        Dokumen::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file_path' => $path,
        ]);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil diupload.');
    }

    // Admin: Edit form
    public function edit($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        return view('admin.dokumen.edit', compact('dokumen'));
    }

    // Admin: Update
    public function update(Request $request, $id)
    {
        $dokumen = Dokumen::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'file' => 'nullable|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($dokumen->file_path);
            $path = $request->file('file')->store('dokumen', 'public');
            $dokumen->file_path = $path;
        }

        $dokumen->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil diperbarui.');
    }

    // Admin: Delete
    public function destroy($id)
    {
        $dokumen = Dokumen::findOrFail($id);
        Storage::disk('public')->delete($dokumen->file_path);
        $dokumen->delete();

        return redirect()->route('admin.dokumen.index')->with('success', 'Dokumen berhasil dihapus.');
    }
}
