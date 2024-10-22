<?php

namespace App\Http\Controllers;

use App\Models\riwayattransaksi;
use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RiwayatTransaksi::all();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(riwayattransaksi $riwayattransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(riwayattransaksi $riwayattransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, riwayattransaksi $riwayattransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(riwayattransaksi $riwayattransaksi)
    {
        //
    }
}
