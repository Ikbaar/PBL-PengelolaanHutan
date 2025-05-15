<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kalender;

class KalenderController extends Controller
{
    // Menampilkan daftar semua kalender (READ)
    public function index()
    {
        $kalender = Kalender::all();
        return view('admin.kalender_akademik.index', compact('kalender'));
    }

    // Menampilkan form edit (EDIT)
    public function edit($id)
    {
        $kalender = Kalender::findOrFail($id);
        return view('admin.kalender_akademik.edit', compact('kalender'));
    }

    // Memperbarui data kalender (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
        ]);

        $kalender = Kalender::findOrFail($id);
        $kalender->update([
            'nama_event' => $request->nama_event,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.kalender.index')->with('success', 'Data kalender berhasil diperbarui.');
    }

    // Menghapus data kalender (DELETE)
    public function destroy($id)
    {
        $kalender = Kalender::findOrFail($id);
        $kalender->delete();

        return redirect()->route('admin.kalender.index')->with('success', 'Data kalender berhasil dihapus.');
    }

    // Menampilkan form tambah data kalender
    public function create()
    {
        return view('admin.kalender_akademik.create');
    }

    // Menyimpan data kalender baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
        ]);

        Kalender::create([
            'nama_event' => $request->nama_event,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.kalender.index')->with('success', 'Data kalender berhasil ditambahkan.');
    }
}
//controllerkalender
