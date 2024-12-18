<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Http\Requests\StoreDestinasiRequest;
use App\Http\Requests\UpdateDestinasiRequest;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('destinasi');
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
    public function store(StoreDestinasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinasi $destinasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinasi $destinasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinasiRequest $request, Destinasi $destinasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinasi $destinasi)
    {
        //
    }
}
