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
            <h2>Mijn Openstaande Vacatures</h2>
            <div class="vacancies-container-layout">
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
                                        <p>{{$vacancy->time_hours}} Uur per week</p>
                                    </div>
                                    <div class="text-icon-content-container">
                                        <x-icon-money-svg>

                                        </x-icon-money-svg>
                                        <p>{{$vacancy->salary}} Euro (Per maand)</p>
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
                                <a href="{{ route('open_vacancies.show', $vacancy->id) }}" class="more-info"> Bewerk
                                    <x-icon-info-svg width="20" height="20"></x-icon-info-svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="no-vacancies">
                        <h3>Uw bedrijf heeft nog geen vacatures</h3>
                        {{--            moet later nog een andere link worden voor de link van alle vacatures van het bedrijf--}}
                        <a href="{{ route('open_vacancies.index') }}" class="all-vacancies-link"> Open een vacature
                        </a>
                    </div>
                @endif
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
        width: 100%;
        max-width: 80vw;
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

    .vacancies-container-layout {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(min(30rem, max(40rem)), 1fr));
        gap: 2rem;
        width: 100%;
        justify-items: center;
    }


    .result-container {
        background-color: white;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        padding: 1.5rem;
        margin: 0.8rem 0;
        border-radius: 0 30px 30px 30px;
        width: 100%; /* Adjusts width to fit in grid */
        max-width: 25rem; /* Optional: Ensures a max size */
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
    .no-vacancies {
        margin-top: 3rem;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
