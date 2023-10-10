<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clan;

class ClanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clans = Clan::all();
        return view('clans.index', compact('clans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clans.create"); //samo prikaz forme
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "ime" => "required",
            "prezime" => "required",
            "clanski_broj" => "required|unique:clans"
        ]);

        // stvaranje novog clana
        Clan::create($request->all());

        // preusmjeravanje uz prikaz poruke o uspjehu
        return redirect()->route("clans.index")->with("success", "Woohoo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Clan $clan)
    {
        return view("clans.show", compact("clan"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clan $clan)
    {
        return view("clans.edit", compact("clan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clan $clan)
    {
        //validacija
        $request->validate([
            "ime" => "required",
            "prezime" => "required",
            "clanski_broj" => "required|unique:clans,clanski_broj" . $clan->id,
        ]);

        //azuriranje
        $clan->update($request->all());
        //home
        return redirect()->route("clans.index")->with("success", "Podaci izmjenjeni");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clan $clan)
    {
        //brisanje točno određenog člana
        $clan->delete();
        return redirect()->route("clans.index")
        ->with("success", "Član uspješno obrisan");
    }
}
