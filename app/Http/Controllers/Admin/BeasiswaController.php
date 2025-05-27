<?php

namespace App\Http\Controllers\admin;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BeasiswaController extends Controller
{
    public function index()
    {
        $beasiswas = Beasiswa::orderBy('created_at', 'desc')->get();
        return view('admin.beasiswa.index', compact('beasiswas'));
    }

    public function create()
    {
        return view('admin.beasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'batas_pendaftaran' => 'required|date',
        ]);

        Beasiswa::create($request->all());

        return redirect()->route('admin.beasiswa.index')->with('success', 'Beasiswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        return view('admin.beasiswa.edit', compact('beasiswa'));
    }

    public function update(Request $request, $id)
    {
        $beasiswa = Beasiswa::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'batas_pendaftaran' => 'required|date',
        ]);

        $beasiswa->update($request->all());

        return redirect()->route('admin.beasiswa.index')->with('success', 'Beasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $beasiswa = Beasiswa::findOrFail($id);
        $beasiswa->delete();

        return redirect()->route('admin.beasiswa.index')->with('success', 'Beasiswa berhasil dihapus.');
    }
    public function indexPublic()
{
    $beasiswas = Beasiswa::orderBy('created_at', 'desc')->get();
    return view('beasiswa', compact('beasiswas'));
}

public function show($id)
{
    $beasiswa = Beasiswa::findOrFail($id);
    return view('show', compact('beasiswa'));
}


}
