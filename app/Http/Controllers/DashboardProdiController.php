<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Prodi;

class DashboardProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis=Prodi::latest()->paginate(10);
        return view('dashboard.prodi.index',['prodi'=>$prodis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.prodi.create',['prodis'=>Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required'
        ]);
        Prodi::create($validated);
        return redirect('/dashboard-prodi')->with('pesan', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('dashboard.prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Prodi::find($id);
        $prodis = Prodi::all();
        return view('dashboard.prodi.edit',compact('prodi','prodis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required'
        ]);
        Prodi::where('id', $id)->update($validated);
        return redirect('/dashboard-prodi')->with('pesan', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Prodi::destroy($id);
        return redirect('/dashboard-prodi')->with('pesan', 'Data Berhasil dihapus');
    }
}
