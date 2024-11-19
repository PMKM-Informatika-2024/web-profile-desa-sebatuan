<?php

namespace App\Http\Controllers;

use App\Models\Kelolakontak;
use App\Http\Requests\StoreKelolakontakRequest;
use App\Http\Requests\UpdateKelolakontakRequest;

class KelolakontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-kontak', []);
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
    public function store(StoreKelolakontakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelolakontak $kelolakontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelolakontak $kelolakontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelolakontakRequest $request, Kelolakontak $kelolakontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelolakontak $kelolakontak)
    {
        //
    }
}
