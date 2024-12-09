<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - {{$business->name}}</title>
</head>
<body>

<main>
    <div class="sidebar">
        <img src="{{asset('images/logo-oh-png.png')}}" alt="Openhiring logo">
        <button class="sidebar-btn">Mijn vacatures</button>
    </div>
    <div class="right-container">
        <div class="vacatures-container">
            <h1>Openstaande Vacatures</h1>
        </div>
        @foreach($vacancies as $vacancy)
            <p>{{$vacancy->name}}</p>
        @endforeach
    </div>
</main>

</body>
</html>


<style>
    body {
        margin: 0;
    }
    main {
        display: flex;

    }
    .sidebar {
        width: 20vw;
        background-color: #b20060;
        height: 100vh;
    }

    .sidebar img {
        width: 3rem;
        height: auto;
    }
</style>
