<?php

namespace App\Http\Controllers;

use App\Models\Daftardesa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DaftardesaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-daftar-desa', [
            'daftardesas' => Daftardesa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_desa' => 'required',
            'gambar_desa' => 'image'
        ]);

        // Handle file upload
        if ($request->file('gambar_desa')) {
            $validatedData['gambar_desa'] = $request->file('gambar_desa')->store('gambar_yang_tersimpan');
        }

        // Store the data in the database
        Daftardesa::create($validatedData);

        // Redirect back with success message
        return redirect('/daftardesa')->with('success', 'Desa baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftardesa $daftardesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftardesa $daftardesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftardesa $daftardesa)
    {
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required',
            'gambar_desa' => 'image'
        ]);
        if($request->file('gambar_desa')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_desa'] = $request->file('gambar_desa')->store('gambar_yang_tersimpan');
        }
        Daftardesa::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/daftardesa')->with('success', 'Desa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Daftardesa $daftardesa)
    {
        // dd($request);
        if($daftardesa->gambar_desa){
            Storage::delete($daftardesa->gambar_desa);
        }
        Daftardesa::destroy($daftardesa->id);
        return redirect('/daftardesa')->with('error', 'Desa berhasil dihapus');
    }
}
