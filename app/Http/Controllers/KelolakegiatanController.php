<?php

namespace App\Http\Controllers;

use App\Models\Kelolakegiatan;
use App\Http\Requests\StoreKelolakegiatanRequest;
use App\Http\Requests\UpdateKelolakegiatanRequest;

class KelolakegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin-kegiatan', []);
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
    public function store(StoreKelolakegiatanRequest $request)
    {
        //
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
    public function update(UpdateKelolakegiatanRequest $request, Kelolakegiatan $kelolakegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelolakegiatan $kelolakegiatan)
    {
        //
    }
}
