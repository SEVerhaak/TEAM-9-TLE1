<?php

use Carbon\Carbon;

?>

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
    <x-business-dashboard-sidebar id="{{$business->id}}"></x-business-dashboard-sidebar>

    <div class="right-container">
        <div class="vacancies-container">
            <h2>Recente Vacatures</h2>
            @if($vacancies->count() !== 0)
                @foreach($vacancies as $vacancy)
                    <div class="result-container">
                        <div class="vacancy-top-info">
                            <div class="vacancy-left-info">
                                <h2>{{$vacancy->name}}</h2>
                                <div class="text-icon-content-container">
                                    <x-icon-building-svg>

                                    </x-icon-building-svg>
                                    <p>{{$vacancy->business->name}}</p>
                                </div>
                                <div class="text-icon-content-container">
                                    <x-icon-map-svg>

                                    </x-icon-map-svg>
                                    <p>{{$vacancy->business->hq_location}}</p>
                                </div>
                                <div class="text-icon-content-container">
                                    <x-icon-clock-svg>

                                    </x-icon-clock-svg>
                                    <p>{{$vacancy->time_hours}} uur per week</p>
                                </div>
                                <div class="text-icon-content-container">
                                    <x-icon-money-svg>

                                    </x-icon-money-svg>
                                    <p>{{$vacancy->salary}} euro (per maand)</p>
                                </div>
                            </div>
                            <div class="vacancy-right-info">
                                <div class="text-icon-content-container">
                                    <x-icon-building-svg>

                                    </x-icon-building-svg>
                                    <p>{{$vacancy->users->count()}} reacties</p>
                                </div>
                                <div class="text-icon-content-container">
                                    <x-icon-building-svg>

                                    </x-icon-building-svg>
                                    <p class="date-opened">{{ round(Carbon::parse($vacancy->created_at)->diffInDays(Carbon::now()))}}
                                        dagen online</p>
                                </div>
                            </div>
                        </div>
                        <div class="vacancy-links">
                            <a class="more-info green" href="{{route('business.edit', $business->id)}}">Accepteer
                                Sollicitaties
                                <x-icon-info-svg width="20" height="20"></x-icon-info-svg>
                            </a>
                            <a href="{{route('vacancy.edit', ['business' => $business->id, 'vacancy' => $vacancy->id])}}" class="more-info"> Bewerk
                                <x-icon-info-svg width="20" height="20"></x-icon-info-svg>
                            </a>
                        </div>
                    </div>
                @endforeach
                <a href="{{ route('business.vacancies', $business->id) }}" class="all-vacancies-link"> Alle vacatures
                </a>
            @else
                <h3>Uw bedrijf heeft nog geen vacatures</h3>
                {{--            moet later nog een andere link worden voor de link van alle vacatures van het bedrijf--}}
                <a href="{{ route('vacancy.create', $business->id)}}" class="all-vacancies-link"> Open een vacature
                </a>
            @endif
        </div>
        <div class="right-side-info-container">
            <div class="business-details-container">
                <div class="business-details-top">
                    <h2>Mijn Gegevens</h2>
                    <div class="business-details">
                        <img src="{{asset('storage/' . $business->logo)}}" alt="Logo of {{$business->name}}">
                        <div>
                            <div class="text-icon-content-container">
                                <x-icon-building-svg width="22" height="22">

                                </x-icon-building-svg>
                                <p>{{$business->name}}</p>
                            </div>
                            <div class="text-icon-content-container">
                                <x-icon-map-svg width="22" height="22"></x-icon-map-svg>
                                <p>{{$business->hq_location}}</p>
                            </div>

                        </div>
                    </div>
                </div>

                <a class="more-info" href="{{route('business.edit', $business->id)}}">Bewerk
                    <x-icon-info-svg width="20" height="20"></x-icon-info-svg>
                </a>
            </div>
            <div class="business-results">
                <h2>Resultaten</h2>
                <p>N/A</p>
            </div>
        </div>
    </div>

</main>

</body>
</html>


<style>
    body {
        margin: 0;
        font-family: "Radikal Trial", sans-serif;
    }

    main {
        display: flex;
        min-height: 100vh;
        height: max-content;
    }

    h2 {
        margin: 0;
    }

    .right-container {
        height: min-content;
        width: 100%;
        display: flex;
        gap: 5rem;
        margin: 2rem;
        margin-bottom: 0 !important;
        justify-content: space-between;
    }

    .vacancies-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        border: #b20060 0.1rem solid;
        border-radius: 1.5rem;
        border-top-left-radius: 0 !important;
        min-height: 35rem;
        height: min-content;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        padding: 1rem 1.5rem;
    }

    .vacancy-top-info {
        font-size: 0.8rem !important;
        display: flex;
        justify-content: space-between;
    }

    .vacancy-links {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-top: 0.5rem;
    }

    .all-vacancies-link {
        background: none;
        color: #b20060;
        font-weight: 500;
    }

    .vacancy-right-info {
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 5px 15px 5px rgba(0, 0, 0, 0.1);
    }

    .text-icon-content-container {
        display: flex;
        left: 0 !important;
        flex-direction: row !important;
        align-items: center !important;
        justify-content: flex-start !important;
        gap: 0.5rem !important;
    }

    .result-container {
        background-color: white;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        padding: 1.5rem;
        margin: 0.8rem 0;
        border-radius: 0 30px 30px 30px;
        min-width: max-content;
        width: 25rem;
    }

    .result-container p {
        margin: 0.25rem 0;
    }

    .more-info {
        display: flex;
        width: 100%;
        font-weight: 500;
        text-decoration: none;
        background-color: #b4085c;
        margin: 0;
        justify-content: center;
        align-items: center;
        border: none;
        color: white;
        padding: 0.5rem 0;
        gap: 1rem;
        border-radius: 0 15px 15px 15px;
    }

    .green {
        background-color: #04AB5C;
    }

    .more-info a {
        color: white;
        font-size: 1rem;
        font-weight: bold;
        font-family: "Radikal Trial", sans-serif;
        text-decoration: none;
    }

    .business-details-container {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        border: #b20060 0.1rem solid;
        border-radius: 1.5rem;
        border-top-right-radius: 0 !important;
        min-height: 15rem;
        height: min-content;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        padding: 1rem 1.5rem;
    }

    .business-details-top {
        display: flex;
        flex-direction: column;
    }

    .business-details h2 {
        margin-bottom: 0.8rem;
    }

    .business-details p {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 400;
    }


    .business-details img {
        width: 6rem;
        height: 6rem;
        object-fit: contain;
    }

    .business-details {
        margin-top: 1rem;
        display: flex;
    }

    .business-details div {
        display: flex;
        gap: 0.8rem;
        flex-direction: column;
        margin: 0 !important;
        margin-left: .5rem !important;
    }

    .right-side-info-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 30rem;
        max-width: 40rem;
        align-items: stretch;
    }

    .business-results {
        display: flex;
        flex-direction: column;
        border: #b20060 0.1rem solid;
        border-radius: 1.5rem;
        border-top-right-radius: 0 !important;
        min-height: 15rem;
        height: min-content;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
        padding: 1rem 1.5rem;
    }
</style>
