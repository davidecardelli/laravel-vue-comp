<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Support\Arr;
use App\Models\Killer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class KillerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $killers = Killer::all();
        return view('admin.killers.index', compact('killers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $killer = new Killer();
        return view('admin.killers.create', compact('killer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $killer = new Killer();

        if (array_key_exists('picture', $data)) {
            $img_url = Storage::put('killers', $data['picture']);
            $data['picture'] = $img_url;
        }

        // if (Arr::exists($data, 'picture')) {
        //     $extension = $data['picture']->extension();
        //     $img_url = Storage::putFileAs('killers', $data['picture']);
        //     $data['picture'] = $img_url;
        // }

        $killer->fill($data);
        $killer->save();
        return to_route('admin.killers.show', $killer->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Killer $killer)
    {
        return view('admin.killers.show', compact('killer'));
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
