<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isi = feedback::all();
        return view('feedback', compact('isi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function simpan(Request $request)
    {
        // dd($request->all());

        $validateData = $request->validate([
            'name' => 'required',
            'komentar' => 'required',
        ]);

        feedback::create($validateData);
        return redirect('/');

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
