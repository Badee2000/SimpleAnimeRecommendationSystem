<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnimeResourse;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Anime::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Anime::create([
            'name'=>$request->input('name'),
            'genre'=>$request->input('genre'),
            'type'=>$request->input('type'),

            'episodes'=>$request->input('episodes'),
            'rating'=>$request->input('rating'),
            'members'=>$request->input('members'),


        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anime $anime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {
        $anime->update([
            'name'=>$request->input('name'),
            'genre'=>$request->input('genre'),
            'type'=>$request->input('type'),

            'episodes'=>$request->input('episodes'),
            'rating'=>$request->input('rating'),
            'members'=>$request->input('members'),

        ]);
        return $anime;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        $anime->delete();
        return  response(null,204);

    }
    public function details($id){
        $anime =Anime::find($id);
        return new AnimeResourse($anime);
    }
}
