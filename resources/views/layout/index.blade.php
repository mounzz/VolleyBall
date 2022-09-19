<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/EquipeBlade.css">
    <link rel="stylesheet" href="/assets/css/JoueurBlade.css">
    <link rel="stylesheet" href="/assets/css/JoueursListe.css">
    <link rel="stylesheet" href="/assets/css/EquipeListe.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/JoueurProfil.css">
    <link rel="stylesheet" href="/assets/css/EquipeProfil.css">
    <link rel="stylesheet" href="/assets/css/home.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>home</title>
</head>

<body>
    <header>
        @include('partials.nav')
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
