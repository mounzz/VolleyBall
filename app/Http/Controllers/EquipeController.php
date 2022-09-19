<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Continent;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continents = Continent::all();
        $equipes = Equipe::all();
        return view("pages.equipeliste", compact('continents', 'equipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'club' => 'required|unique:equipes,club',
            'pays' => 'required',
            'ville' => 'required',
            'nbJoueurs' => 'required',
            'continent_id' => 'required'
        ]);

        $store = new Equipe;
        $store->club = $request->club;
        $store->pays = $request->pays;
        $store->ville = $request->ville;
        $store->nbJoueurs = $request->nbJoueurs;
        $store->continent_id = $request->continent_id;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipe = Equipe::find($id);
        $continents = Continent::all();
        return view('pages.EquipeEdit', compact('equipe', 'continents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipe = Equipe::find($id);
        $equipe->club = $request->club;
        $equipe->pays = $request->pays;
        $equipe->ville = $request->ville;
        $equipe->nbJoueurs = $request->nbJoueurs;
        $equipe->continent_id = $request->continent_id;
        $equipe->save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Equipe::find($id);
        $destroy -> delete();
        return redirect()->back();

    }
}
