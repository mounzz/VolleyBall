@extends('layout.index')

@section('content')
    <div class="containerGen">
        <div class="header">
            <div class="titreheader">VolleyBall Club</div>
        </div>
        <section class="equipesRemplies">
            <h1>Équipes Complètes</h1>
            équipes remplies
        </section>
        <section class="equipesNonRemplies">
            <h1>Équipes incomplètes</h1>
        </section>
        <section class="ImageHome1">
        </section>
        <section class="SansEquipe">
            <h1>Joueurs sans équipe</h1>
           @foreach ($sansEquipe as $sans )
               {{$sans->nom}}
           @endforeach
        </section>
        <section class="AvecEquipe">
            <h1>Joueurs avec équipe</h1>
            @foreach ($avecEquipe as $avec )
            {{$avec->nom}}
        @endforeach
        </section>
        <section class="ImageHome2">

        </section>
        <section class="Europe">
            <h1>Équipes Européenne</h1>
            @foreach ($Europe as $europeen)
                <div>
                    {{$europeen->club }}
                    {{$europeen->pays}}
                </div>
            @endforeach
        </section>
        <section class="HorsEurope">
            <h1>Équipes Internationales</h1>
            @foreach ($HorsEurope as $etranger)
                <div>
                    {{$etranger->club }}
                    {{$etranger->pays}}
                </div>
            @endforeach
        </section>
    </div>
@endsection
