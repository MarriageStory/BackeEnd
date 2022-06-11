<?php

namespace App\Http\Controllers;

use App\Models\teams;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = teams::get();
        return response()->json(['data' => $teams]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribut = $request->validate([
            'leader' => ['required'],
            'staf' => ['required'],
        ]);

        $teams = teams::create($attribut);
        return response()->json(['data' => $teams]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show(teams $teams)
    {
        return response()->json(['data' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teams $teams)
    {
        $attribut = $request->validate([
            'leader' => ['required'],
            'staf' => ['required'],
        ]);

        $teams = teams::create($attribut);
        return response()->json(['data' => $teams]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy(teams $teams)
    {
        $teams->delete();
        return response()->json(['mesage' => 'Data Berhasil dihapus']);
    }
}
