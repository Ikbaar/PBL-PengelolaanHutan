<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kontak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KontakController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);

        Kontak::create($request->only('nama', 'email', 'pesan'));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function index()
{
    $kontaks = Kontak::orderBy('created_at', 'desc')->get();
    return view('admin.kontak.index', compact('kontaks'));
}

public function destroy($id)
{
    $kontak = Kontak::findOrFail($id);
    $kontak->delete();
    return redirect()->route('admin.kontak.index')->with('success', 'Pesan berhasil dihapus.');
}
public function show($id)
{
    $kontak = Kontak::findOrFail($id);
    return view('admin.kontak.show', compact('kontak'));
}


}
