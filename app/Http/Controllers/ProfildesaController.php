<?php

namespace App\Http\Controllers;

use App\Models\Profildesa;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profildesa $profildesa)
    {
        //
    }
}
