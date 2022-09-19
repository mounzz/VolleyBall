@extends('layout.index')

@section('content')
    <div class="containerEquipe">
        <div class="glass">
            <form class="formEquipe" action="/store" method="POST">
                @csrf
                <h1>
                    Ajouter une équipe
                </h1>
                <div>
                    <input type="text" name="club" placeholder="Nom du club">
                    <input type="number" name="nbJoueurs" placeholder="nombre de joueurs">
                </div>
                <div>
                    <input type="text" name="ville" placeholder="Ville du club">
                    <input type="text" name="pays" placeholder="Pays du club">

                </div>
                <div>
                    <select name="continent_id" id="continent">
                        @foreach ($continents as $continent)
                            <option value="{{ $continent->id }}">{{ $continent->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit">envoyer</button>
                </div>

            </form>
        </div>


    </div>
@endsection
