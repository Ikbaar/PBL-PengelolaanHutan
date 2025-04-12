<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sejarah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('admin.sejarah.index', compact('sejarah'));
    }

    public function create()
    {
        return view('admin.sejarah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'konten' => 'required'
        ]);

        Sejarah::create([
            'konten' => $request->konten
        ]);

        return redirect()->route('admin.sejarah.index')->with('success', 'Sejarah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('admin.sejarah.edit', compact('sejarah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'konten' => 'required'
        ]);

        $sejarah = Sejarah::findOrFail($id);
        $sejarah->update([
            'konten' => $request->konten
        ]);

        return redirect()->route('admin.sejarah.index')->with('success', 'Sejarah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        $sejarah->delete();

        return redirect()->route('admin.sejarah.index')->with('success', 'Sejarah berhasil dihapus!');
    }
}
