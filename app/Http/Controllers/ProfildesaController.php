<?php

namespace App\Http\Controllers;

use App\Models\Profildesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProfildesaController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $profildesa = Profildesa::first();
        // dd($profildesa);
        return view('admin.admin-profile-desa', [
            'profiledesa' => Profildesa::first()
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profildesa $profildesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profildesa $profildesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profildesa $profildesa)
    {
        // dd($request);
        $validatedData = $request->validate([
            'sejarah_desa' => 'required',
            'visi_desa' => 'required',
            'gambar_profiledesa'=>'image',
            'misi_desa' => 'required',
            'total_jiwa' => 'required',
            'total_kk' => 'required',
            'total_laki_laki' => 'required',
            'total_perempuan' => 'required',
            'total_melayu' => 'required',
            'total_madura' => 'required',
            'total_tionghoa' => 'required',
            'total_dayak' => 'required',
            'total_jawa' => 'required',
            'total_bugis' => 'required',
            'total_suku_lainnya' => 'required',
            'total_islam' => 'required',
            'total_katolik' => 'required',
            'total_protestan' => 'required',
            'total_buddha' => 'required',
            'total_hindu' => 'required',
            'total_konghuchu' => 'required',
            'peta_desa' => 'required',
        ]);
        if($request->file('gambar_profiledesa')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar_profiledesa'] = $request->file('gambar_profiledesa')->store('gambar_yang_tersimpan');
        }
        Profildesa::where('id', $request->input('id'))
            ->update($validatedData);

        return redirect('/profildesa')->with('success', 'Profile desa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profildesa $profildesa)
    {
        //
    }
}
