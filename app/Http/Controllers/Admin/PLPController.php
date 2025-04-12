<?php

namespace App\Http\Controllers\Admin;

use App\Models\PLP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PLPController extends Controller
{
    public function index()
    {
        $plps = PLP::all();
        return view('admin.plp.index', compact('plps'));
    }

    public function create()
    {
        return view('admin.plp.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|unique:plps,nip',
            'posisi' => 'required',
        ]);

        PLP::create($request->all());

        return redirect()->route('admin.plp.index')->with('success', 'Data PLP berhasil ditambahkan.');
    }

    public function edit($id)
{
    $plp = PLP::findOrFail($id);
    return view('admin.plp.edit', compact('plp'));
}


public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'nip' => 'required',
        'posisi' => 'required',
    ]);

    $plp = PLP::findOrFail($id);
    $plp->update($request->all());

    return redirect()->route('admin.plp.index')->with('success', 'Data PLP berhasil diperbarui.');
}

public function destroy($id)
{
    $plp = PLP::findOrFail($id);
    $plp->delete();

    return redirect()->route('admin.plp.index')->with('success', 'Data PLP berhasil dihapus.');
}

}
