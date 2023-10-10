<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("films.create"); //samo prikaz forme
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "naziv" => "required",
            "redatelj" => "required",
            "godina_izdanja" => "required"
        ]);

        // stvaranje novog filma
        Film::create($request->all());

        // preusmjeravanje uz prikaz poruke o uspjehu
        return redirect()->route("films.index")->with("success", "Woohoo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view("films.show", compact("film"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        return view("films.edit", compact("film"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        //validacija
        $request->validate([
            "naziv" => "required",
            "redatelj" => "required",
            "godina_izdanja" => "required" . $film->id,
        ]);

        //azuriranje
        $film->update($request->all());
        //home
        return redirect()->route("films.index")->with("success", "Podaci izmjenjeni");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //brisanje točno određenog člana
        $film->delete();
        return redirect()->route("films.index")
        ->with("success", "Film uspješno obrisan");
    }
}
