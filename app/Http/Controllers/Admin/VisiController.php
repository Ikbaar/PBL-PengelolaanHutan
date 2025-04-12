<?php

namespace App\Http\Controllers\Admin;

use App\Models\Visi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisiController extends Controller
{
    public function index()
    {
        // Ambil semua data visi
        $visi = Visi::all();
        return view('admin.visi.index', compact('visi'));
    }

    public function create()
    {
        // Tampilkan form untuk membuat visi baru
        return view('admin.visi.create');
    }

    public function store(Request $request)
    {
        // Simpan data visi baru
        Visi::create([
            'konten' => $request->konten,
        ]);
        return redirect()->route('admin.visi.index');
    }

    public function edit($id)
    {
        $visi = Visi::findOrFail($id);
        return view('admin.visi.edit', compact('visi'));
    }
    
    public function update(Request $request, $id)
    {
        $visi = Visi::findOrFail($id);
        $visi->update([
            'konten' => $request->konten,
        ]);
        return redirect()->route('admin.visi.index');
    }
    

    public function destroy($id)
    {
        $visi = Visi::findOrFail($id);
        $visi->delete();
    
        return redirect()->route('admin.visi.index');
    }
    
}
