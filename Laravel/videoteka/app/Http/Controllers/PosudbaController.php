<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Posudba;
use App\Models\Clan;
use Illuminate\Http\Request;

class PosudbaController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $posudbe = Posudba::with("clan", "film")->get();
        return view("posudbe.index", compact("posudbe"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clanovi = Clan::all();
        $filmovi = Film::all();

        return view("posudbe.create", compact("clanovi", "filmovi"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_clan" => "required",
            "id_film" => "required",
            "datum_posudbe" => "required|date"
        ]);
        Posudba::create($request->all());
        return redirect()->route("posudbe.index")->with("success", "Posudba uspješno spremljena");
    }

    /**
     * Display the specified resource.
     */
    public function show(Posudba $posudba)
    {
        return view("posudbe.show", compact("posudba"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posudba $posudba)
    {
        $clanovi = Clan::all();
        $filmovi = Film::all();
        return view("posudbe.edit", compact("posudba", "clanovi", "filmovi"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posudba $posudba)
    {
        $request->validate([
            "id_clan" => "required",
            "id_film" => "required",
            "datum_posudbe" => "required|date",
            "datum_vracanja" => "nullable|date"
        ]);

        $posudba->update($request->all());
        return redirect()->route("posudbe.index")->with("success", "Posudba uspješno ažurirana");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posudba $posudba)
    {
        $posudba->delete();
        return redirect()->route("posudbe.index")->with("success", "Posudba uspješno obrisana");
    }
}
