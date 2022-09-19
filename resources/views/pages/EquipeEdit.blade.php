@extends('layout.index')

@section('content')
    <div class="containerEquipeProfil">
        <div class="glass">
            <form class="formEquipe" action="/equipeEdit/{{ $equipe->id }}/update" method="POST">
                @csrf
                @method('PUT')
                <h1>
                    {{$equipe->club}}
                </h1>
                <div>
                    <input type="text" name="club" value="{{ $equipe->club }}">
                    <input type="text" name="pays" value="{{ $equipe->pays }}">
                    <input type="text" name="ville" value="{{ $equipe->ville }}">
                </div>
                <div>
                    <input type="number" name="nbJoueurs" value="{{ $equipe->nbJoueurs }}">
                    <select name="continent_id" id="continent">
                        @foreach ($continents as $continent)
                            <option value="{{ $continent->id }}">{{ $continent->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
