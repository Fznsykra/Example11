<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $matakuliahs=Matakuliah::latest()->paginate(10);
        return view('dashboard.matakuliah.index',['matkul'=>$matakuliahs]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.matakuliah.create',['matakuliahs'=>Matakuliah::all()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required',
            'sks' => 'required',
            'semester' => 'required'
        ]);
        Matakuliah::create($validated);
        return redirect('/dashboard-matkul')->with('pesan', 'Data Berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('dashboard.matakuliah.read', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matakuliah = Matakuliah::find($id);
        $matakuliahs = Matakuliah::all();
        return view('dashboard.matakuliah.update',compact('matakuliah','matakuliahs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required',
            'semester' => 'required'
        ]);
        Matakuliah::where('id', $id)->update($validated);
        return redirect('/dashboard-matakuliah')->with('pesan', 'Data Berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matakuliah::destroy($id);
        return redirect('/dashboard-matakuliah')->with('pesan', 'Data Berhasil dihapus');

    }
}
