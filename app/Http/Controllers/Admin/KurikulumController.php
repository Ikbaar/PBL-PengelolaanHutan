<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kurikulum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;



class KurikulumController extends Controller
{
    public function index(Request $request)
    {
        $semester = $request->input('semester', 1);
        $kurikulums = Kurikulum::where('semester', $semester)->get();

        return view('admin.kurikulum.index', compact('kurikulums', 'semester'));
    }

    public function create()
    {
        return view('admin.kurikulum.create');
    }

    public function store(Request $request)
    {
        Kurikulum::create($request->all());
        return redirect()->route('admin.kurikulum.index')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        return view('admin.kurikulum.edit', compact('kurikulum'));
    }

    public function update(Request $request, $id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->update($request->all());
        return redirect()->route('admin.kurikulum.index')->with('success', 'Mata kuliah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->delete();
        return redirect()->route('admin.kurikulum.index')->with('success', 'Mata kuliah berhasil dihapus!');
    }

    public function indexPublic()
{
    $kurikulums = Kurikulum::all();
    return view('kurikulum', compact('kurikulums'));
}

}
