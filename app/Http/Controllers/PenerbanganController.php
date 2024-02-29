<?php

namespace App\Http\Controllers;

use App\Models\Penerbangan;
use Illuminate\Http\Request;

class PenerbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerbangan = Penerbangan::all();
        return view('penerbangan.index', compact('penerbangan'));
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
    public function show(Penerbangan $penerbangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbangan $penerbangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbangan $penerbangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbangan $penerbangan)
    {
        //
    }
}
