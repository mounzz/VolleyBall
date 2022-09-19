@extends('layout.index')

@section('content')
    <div class="containerJoueurs">
        <div class="glass">
            <form class="formJoueurs" action="/joueurs/store" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>
                    Ajouter un joueur
                </h1>
                <div>
                    <input type="text" name="nom" placeholder="Nom du joueur">
                    <input type="text" name="prenom" placeholder="Prénom du joueur">
                    <input type="number" name="age" placeholder="Âge du joueur">
                    <select name="genre" id="genre">
                        <option>Féminin</option>
                        <option>Masculin</option>
                    </select>
                </div>
                <div>
                    <input type="text" name="email" placeholder="E-mail du joueur">
                    <input type="number" name="tel" placeholder="numéro de téléphone">
                    <input type="text" name="pays" placeholder="Pays d'origine du joueur">
                </div>

                <div>
                    <select name="role_id" id="role">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->role }}</option>
                        @endforeach
                    </select>
                    <select name="equipe_id" id="equipe">
                        <option value=""> Choisissez votre équipe </option>
                        @foreach ($equipes as $equipe)
                            <option value="{{ $equipe->id }}">{{ $equipe->club }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <input class="inputfile" type="file" name="url">
                </div>
                <div>
                    <button type="submit">envoyer</button>
                </div>

            </form>
        </div>
    </div>
@endsection
