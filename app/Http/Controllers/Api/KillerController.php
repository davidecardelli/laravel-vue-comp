<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Killer;
use Illuminate\Http\Request;

class KillerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $killers = Killer::orderBy('updated_at', 'DESC')->get();

        // foreach ($killers as $killer) {
        //     if ($killer->picture) $killer->picture = url('storage/' . $killer->picture);
        //     else $killer->picture = 'https://marcolanci.it/utils/placeholder.jpg';
        // }

        return response()->json($killers);
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
        $killer = Killer::find($id);
        if (!$killer) return response(null, 404);

        // // Assemble url image in backend
        // if ($killer->picture) $killer->picture = url('storage/' . $killer->picture);
        // else $killer->picture = 'https://marcolanci.it/utils/placeholder.jpg';
        return response()->json($killer);
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
