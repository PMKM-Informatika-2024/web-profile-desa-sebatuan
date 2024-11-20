<?php

namespace App\Http\Controllers;

use App\Models\Layananadministrasi;
use App\Http\Requests\StoreLayananadministrasiRequest;
use App\Http\Requests\UpdateLayananadministrasiRequest;

class LayananadministrasiController  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-layanan-administrasi', []);
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
    public function store(StoreLayananadministrasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Layananadministrasi $layananadministrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layananadministrasi $layananadministrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLayananadministrasiRequest $request, Layananadministrasi $layananadministrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layananadministrasi $layananadministrasi)
    {
        //
    }
}
