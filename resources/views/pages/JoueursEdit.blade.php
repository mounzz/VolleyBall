@extends('layout.index')

@section('content')
    <div class="containerProfilJoueur">
        <div class="glass">
            <form class="formProfilJoueur" action="/JoueursEdit/{{ $joueurs->id }}/update" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <img class="imgProfilJoueur" src="{{ asset('storage/img/' . $joueurs->photo->url) }}" alt="">
                </div>
                <div class="infosProfil">
                    <div>
                        <input type="text" name="nom" value="{{ $joueurs->nom }}"> <input type="text"
                            name="prenom" value="{{ $joueurs->prenom }}">

                    </div>

                    <div>
                        <input type="number" name="age" value="{{ $joueurs->age }}">
                        <select name="genre" id="genre">
                            <option>Féminin</option>
                            <option>Masculin</option>
                        </select>
                    </div>


                    <div>
                        <input type="text" name="email" value="{{ $joueurs->email }}">
                        <input type="number" name="tel" value="{{ $joueurs->tel }}">
                    </div>

                    <div>
                        <input type="text" name="pays" value="{{ $joueurs->pays }}">
                    </div>
                    <div>
                        <select name="role_id" id="role">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->role }}</option>
                            @endforeach
                        </select>
                        <select name="equipe_id" id="equipe">
                            @foreach ($equipes as $equipe)
                                <option value="{{ $equipe->id }}">{{ $equipe->club }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <input class='infosfiles' type="file" name="url">
                    </div>

                    <div>
                        <button type="submit">update</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
