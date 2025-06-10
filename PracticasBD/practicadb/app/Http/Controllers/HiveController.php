<?php

namespace App\Http\Controllers;

use App\Models\Hive;
use Illuminate\Http\Request;

class HiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hives = Hive::all();
        dd($hives);
        return view('hives.index', compact('hives'));
        
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
    public function show(Hive $hive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hive $hive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hive $hive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hive $hive)
    {
        //
    }
}
