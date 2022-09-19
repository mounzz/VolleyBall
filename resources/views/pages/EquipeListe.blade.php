@extends('layout.index')

@section('content')
    <div class="containerEquipeListe">
        <div class="glassEquipe">
            <div class="gridEquipe">
                <div>Club</div>
                <div>Pays</div>
                <div>Ville</div>
                <div>MaxJoueurs</div>
                <div>Continent</div>
                <div></div>
                <div></div>
            </div>
            <div class="contenairInfos">
            @foreach ($equipes as $equipe)
                <div class="contenuListe">
                    <div> {{ $equipe->club }}</div>
                    <div> {{ $equipe->pays }}</div>
                    <div> {{ $equipe->ville }}</div>
                    <div> {{ $equipe->nbJoueurs }}</div>
                    <div> {{ $equipe->continent->nom }}</div>
                    <div>
                        <a href="/EquipeEdit/{{ $equipe->id }}">
                            <button type="submit">éditer</button>
                        </a>
                    </div>

                    <div>
                        <form action="/equipeliste/{{ $equipe->id }}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">supprimer</button>
                        </form>
                    </div>


                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
