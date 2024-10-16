<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Game::all();

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
    public function show(game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(game $game)
    {
        //
    }
}
