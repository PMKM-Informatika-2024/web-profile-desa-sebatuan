<?php

namespace App\Http\Controllers;

use App\Models\Layananpublik;
use App\Http\Requests\StoreLayananpublikRequest;
use App\Http\Requests\UpdateLayananpublikRequest;
use Illuminate\Http\Request; // Ensure this is included

class LayananpublikController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch records based on kategori_fasilitas
        $fasilitasPendidikan = Layananpublik::where('kategori_fasilitas', 'pendidikan')->get();
        $fasilitasPublik = Layananpublik::where('kategori_fasilitas', 'publik')->get();
        
        // Return the proper view
        return view('admin.admin-layanan-publik', [ // Change to your intended view (user.layanan-publik)
            'fasilitasPendidikan' => $fasilitasPendidikan,
            'fasilitasPublik' => $fasilitasPublik,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This method can be used to show a form for creating a new resource
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'kategori_fasilitas' => 'required',
            'nama_fasilitas' => 'required',
            'url_alamat' => 'required',
            'gambar_fasilitas' => 'image'
        ]);

        // Handle file upload
        if ($request->file('gambar_fasilitas')) {
            $validatedData['gambar_fasilitas'] = $request->file('gambar_fasilitas')->store('gambar_yang_tersimpan');
        }

        // Store the data in the database
        Layananpublik::create($validatedData);

        // Redirect back with success message
        return redirect('/layananpublik')->with('success', 'Lembaga Desa baru berhasil ditambahkan');
    }

    public function show()
    {
        // Fetch records based on kategori_fasilitas
        $fasilitasPendidikan = Layananpublik::where('kategori_fasilitas', 'pendidikan')->get();
        $fasilitasPublik = Layananpublik::where('kategori_fasilitas', 'publik')->get();
        
        // Return the proper view
        return view('user.layanan-publik', [ // Change to your intended view (user.layanan-publik)
            'fasilitasPendidikan' => $fasilitasPendidikan,
            'fasilitasPublik' => $fasilitasPublik,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layananpublik $layananpublik)
    {
        // This method can be used to show a form for editing the resource
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLayananpublikRequest $request, Layananpublik $layananpublik)
    {
        // Update the resource logic
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layananpublik $layananpublik)
    {
        // Delete the resource
    }
}
