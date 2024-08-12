<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatans=Jabatan::latest()->paginate(10);
        return view('dashboard.jabatan.index',['jabatan'=>$jabatans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jabatan.create',['jabatans'=>Jabatan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_jabatan' => 'required|unique:jabatans',
            'nama_jabatan' => 'required',
            'keterangan' => 'required',
        ]);
        Jabatan::create($validated);
        return redirect('/dashboard-jabatan')->with('pesan', 'Data Berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('dashboard.jabatan.show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatans = Jabatan::all();
        return view('dashboard.jabatan.update',compact('jabatan','jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required',
            'keterangan' => 'required',
        ]);
        Jabatan::where('id', $id)->update($validated);
        return redirect('/dashboard-jabatan')->with('pesan', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            Jabatan::destroy($id);
        return redirect('/dashboard-jabatan')->with('pesan', 'Data Berhasil dihapus');
    }
}
