@extends('layout.index')

@section('content')
    <div class="containerInfosJoueurs">
        <div class="glassListe">
            <h1>
                Tous les Joueurs
            </h1>
            <div style="display: flex; gap:3rem;justify-content:center;flex-wrap:wrap;width:100%;">
            @foreach ($joueurs as $joueur)
                <div class="InfosJoueurs">
                    <div>
                        <img class="imgJoueurListe" src="{{ asset('storage/img/' . $joueur->photo->url) }}" alt="">
                    </div>
                    <div>
                        <p>{{ $joueur->nom }} {{ $joueur->prenom }}</p>
                    </div>
                    <div>
                        <p>{{ $joueur->age }}</p>
                        <p>{{ $joueur->genre }}</p>
                    </div>
                    <div>
                        <p>
                            {{ $joueur->equipe_id ? $joueur->equipe->club : 'sans équipe' }}
                        </p>
                    </div>
                    <div class="containerButtonListe">
                        <div>
                            <a href="/JoueursEdit/{{ $joueur->id }}">
                                <button type="submit">éditer</button>
                            </a>
                        </div>
                        <div>
                            <form action="/Joueursliste/{{ $joueur->id }}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection
