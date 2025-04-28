<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('admin.dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('admin.dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:100|unique:dosens,nip',
            'photo' => 'nullable|image|max:15360'
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('dosen', 'public');
        }

        Dosen::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'photo' => $photoPath
        ]);

        return redirect()->route('admin.dosen.index')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('admin.dosen.edit', compact('dosen'));
    }

    public function update(Request $request, string $id)
    {
        $dosen = Dosen::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|max:100|unique:dosens,nip,' . $dosen->id,
            'photo' => 'nullable|image|max:15360'
        ]);

        $photoPath = $dosen->photo;
        if ($request->hasFile('photo')) {
            if ($photoPath) {
                Storage::disk('public')->delete($photoPath);
            }
            $photoPath = $request->file('photo')->store('dosen', 'public');
        }

        $dosen->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'photo' => $photoPath
        ]);

        return redirect()->route('admin.dosen.index')->with('success', 'Dosen berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        if ($dosen->photo) {
            Storage::disk('public')->delete($dosen->photo);
        }
        $dosen->delete();

        return redirect()->route('admin.dosen.index')->with('success', 'Dosen berhasil dihapus');
    }
}
