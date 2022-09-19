<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Photo;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        $roles = Role::all();
        $photos = Photo::all();
        $joueurs = Joueur::all();
        return view('pages.Joueurs', compact('joueurs', 'roles', 'equipes', 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipes = Equipe::all();
        $roles = Role::all();
        $joueurs = Joueur::all();
        return view('pages.JoueursListe', compact('equipes', 'roles', 'joueurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $store = new Joueur;
        $photo = new Photo;
        Storage::put('public/img/', $request->file('url'));
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->tel = $request->tel;
        $store->email = $request->email;
        $store->genre = $request->genre;
        $store->pays = $request->pays;
        $store-> equipe_id = $request-> equipe_id;
        $store-> role_id = $request-> role_id;
        $photo -> url = $request ->file('url')->hashName();
        $photo -> save();
        $store -> photo_id = $photo -> id;
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
        $equipes = Equipe::all();
        $roles = Role::all();
        $photos = Photo::all();
        $joueurs = Joueur::find($id);
        return view('pages.JoueursEdit', compact('equipes', 'roles', 'joueurs', 'photos'));
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
        $update = Joueur::find($id);
        $photo = Photo::find($id);
        Storage::delete('public/img/' . $update->photo->url);
        Storage::put('public/img/', $request->file('url'));
        $photo-> url = $request ->file('url')->hashName();
        $photo->save();

        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->age = $request->age;
        $update->tel = $request->tel;
        $update->email = $request->email;
        $update->genre = $request->genre;
        $update->pays = $request->pays;
        $update-> equipe_id = $request-> equipe_id;
        $update-> role_id = $request-> role_id;
        $update->photo_id = $photo->id;
        $update->save();
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
       $destroy = Joueur::find($id);
       $destroy -> delete();
       Storage::delete('public/img/' . $destroy->photo->url);
       $destroy-> photo()->delete();
       return redirect()->back();
    }
}
