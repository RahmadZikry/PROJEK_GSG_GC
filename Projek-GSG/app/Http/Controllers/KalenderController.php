<?php

namespace App\Http\Controllers;

use App\Models\kalender;
use App\Http\Requests\StorekalenderRequest;
use App\Http\Requests\UpdatekalenderRequest;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kalender_index');
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
    public function store(StorekalenderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kalender $kalender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kalender $kalender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekalenderRequest $request, kalender $kalender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kalender $kalender)
    {
        //
    }
}