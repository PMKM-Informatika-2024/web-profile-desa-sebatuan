<?php

namespace App\Http\Controllers;

use App\Models\Kelolakegiatan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class KelolakegiatanController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-kegiatan', [
            'kelolakegiatans' => Kelolakegiatan::all()
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
            'nama_kegiatan' => 'required',
            'gambar_kegiatan' => 'image'
        ]);

        // Handle file upload
        if ($request->file('gambar_kegiatan')) {
            $validatedData['gambar_kegiatan'] = $request->file('gambar_kegiatan')->store('gambar_yang_tersimpan');
        }

        // Store the data in the database
        Kelolakegiatan::create($validatedData);

        // Redirect back with success message
        return redirect('/kegiatan')->with('success', 'Kegiatan baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelolakegiatan $kelolakegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelolakegiatan $kelolakegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelolakegiatan $kelolakegiatan)
    {
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required',
            'gambar_kegiatan' => 'image'
        ]);
        if($request->file('gambar_kegiatan')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_kegiatan'] = $request->file('gambar_kegiatan')->store('gambar_yang_tersimpan');
        }
        Kelolakegiatan::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Kelolakegiatan $kelolakegiatan)
    {
        dd($request);
        // dd($kelolakegiatan->id);
        if($kelolakegiatan->gambar_kegiatan){
            Storage::delete($kelolakegiatan->gambar_kegiatan);
        }
        Kelolakegiatan::destroy($kelolakegiatan->id);
        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil dihapus');
    }
}
