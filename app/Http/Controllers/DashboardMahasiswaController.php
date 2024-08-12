<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\prodi;
use Illuminate\Support\Facades\Gate;

class DashboardMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas=Mahasiswa::latest()->paginate(10);
        return view('dashboard.mahasiswa.index',['mahasiswas'=>$mahasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (! Gate::allows('isAdmin')){
            abort('403','Unauthorized action');

        }
        return view('dashboard.mahasiswa.create',['prodis'=>Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswas|max:10',
            'nama_lengkap' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'required'
        ]);

       // dd('Sukses');

        Mahasiswa::create($validated);
        return redirect('/dashboard-mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $mahasiswa = Mahasiswa::findOrFail($id);
       return view ('dashboard.mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $prodis = Prodi::all();
        return view('dashboard.mahasiswa.edit', compact('mahasiswa','prodis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nim' => 'required|max:10',
            'nama_lengkap' => 'required|min:2',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'required'
        ]);
        mahasiswa::where('id', $id)->update($validated);
        return redirect('dashboard-mahasiswa')->with('pesan','data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::destroy($id);
        return redirect('/dashboard-mahasiswa')->with('pesan','Data berhasil dihapus');
    }
}
