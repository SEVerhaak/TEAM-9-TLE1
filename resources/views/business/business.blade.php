<x-template :selected="1">

</x-template>
<div class="container-show">
    <div class="business-banner">
        <img class="business-banner" src="{{$business->banner_image}}" alt="Banner image of {{$business->name}}">
    </div>

    <div class="header-info">
        <img class="business-logo" src="{{$business->logo}}" alt="Logo of {{$business->name}}">
        <h1>{{$business->name}}</h1>
    </div>

    <div class="main-profile-content-container">
        <div class="business-vacancies">
            <h2 class="vacancies-header">Vacatures</h2>
            @if($vacancyCount !== 0)
                @foreach($business->vacancy as $vacancy)
                    <div class="result-container">
                        <h2>{{$vacancy->name}}</h2>
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


                        <button class="more-info"
                                onclick="location.href='{{ route('open_vacancies.show', $vacancy->id) }}'">
                            <a href="{{route('open_vacancies.show', $vacancy->id)}}">Meer informatie</a>
                            <x-icon-info-svg>

                            </x-icon-info-svg>
                        </button>
                    </div>
                @endforeach
            @else
                <h3>Dit bedrijf heeft nog geen vacatures</h3>
            @endif
        </div>
    </div>
</div>

<style>
    .container-show {
        position: absolute;
        top: 0;
    }

    .container-show div {
        position: relative;
        left: 0.8rem;
    }

    .business-banner {
        position: relative;
        left: 0 !important;
        object-fit: cover;
        height: 17.5rem;
        min-width: 100vw;
        max-width: 100vw;
        margin-bottom: 0.8rem;
    }

    .business-logo {
        height: 5rem;
    }

    .header-info {
        gap: 0.8rem;
        display: flex;
        align-items: center;
        max-width: max-content;

    }

    .header-info h1 {
        margin: 0;
        max-width: 75vw;
        white-space: wrap;
    }

    .main-profile-content-container {
        left: 0 !important;
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 100%;
    }

    .business-vacancies {
        left: 0 !important;
        justify-content: center;
        width: 80vw !important;
        margin-bottom: 10rem;
    }

    .vacancies-header {
        font-size: 2rem;
        text-align: center;
    }

    .text-icon-content-container {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
    }

    .result-container {
        background-color: white;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        margin: 2rem 1rem;
        border-radius: 0 30px 30px 30px;
    }

    .result-container p {
        margin: 0.25rem 0;
        font-size: large;
    }

    .more-info {
        width: 100%;
        background-color: #b4085c;
        margin: 1rem 1rem 0 0;
        border: none;
        color: white;
        padding: 1rem;
        border-radius: 0 15px 15px 15px;
    }

    .more-info a {
        color: white;
        font-size: large;
        font-weight: bold;
        font-family: "Radikal Trial";
        text-decoration: none;
    }
</style>
