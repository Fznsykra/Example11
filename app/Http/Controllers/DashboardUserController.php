<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('dashboard.user.index',['user'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create',['users'=>User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4'
        ]);
        User::create($validated);
        return redirect('/dashboard-user')->with('pesan', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $users = User::all();
        return view('dashboard.user.edit',compact('user','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);

        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        // jika password baru diisi
        if ($request->filled('password')) {
            $request->validate([

                'password' => 'required|min:4|confirmed',
            ]);

            // pengecekan password lama

            //  update password baru
            $user->password = Hash::make($request->input('password'));
        }

        // Update data pengguna lainnya seperti nama dan email
        $user->update($validated);

        return redirect('/dashboard-user')->with('pesan', 'Data berhasil di update');
    }
}
