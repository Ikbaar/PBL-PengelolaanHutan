<?php

namespace App\Http\Controllers\Admin;

use App\Models\Misi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MisiController extends Controller
{
    public function index()
    {
        // Ambil semua data visi
        $misi = Misi::all();
        return view('admin.misi.index', compact('misi'));
    }

    public function create()
    {
        // Tampilkan form untuk membuat visi baru
        return view('admin.misi.create');
    }

    public function store(Request $request)
    {
        // Simpan data visi baru
        Misi::create([
            'konten' => $request->konten,
        ]);
        return redirect()->route('admin.misi.index');
    }

    public function edit($id)
    {
        $misi = Misi::findOrFail($id);
        return view('admin.misi.edit', compact('misi'));
    }
    
    public function update(Request $request, $id)
{
    $request->validate([
        'konten' => 'required|string|max:255',  // Validasi data konten
    ]);

    $misi = Misi::findOrFail($id);
    $misi->update([
        'konten' => $request->konten,
    ]);

    return redirect()->route('admin.misi.index');
}


    

    public function destroy($id)
    {
        $misi = Misi::findOrFail($id);
        $misi->delete();
    
        return redirect()->route('admin.misi.index');
    }
    
}
