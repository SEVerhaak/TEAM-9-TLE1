<x-template>

</x-template>
<div class="wrapper">
    {{--Message die je krijgt als je voor een vacature hebt aangemeld of uitgeschreven--}}
    @if (session('message'))
        <div
            style="
                color: #B20060;
                text-align: center;">
            <h1>{{ session('message') }}</h1>
        </div>
    @endif
    <h2 style="text-align: center">Openstaande Vacatures</h2>

    {{-- Search filter formulier. WERKT NU NOG NIET OMDAT ER GEEN USER STORY VOOR WAS!--}}
    {{-- Willen we dit async maken? --}}
    {{--   Action = {{ route('open_vacancies.search')}}--}}
    <form method="GET" action="">
        {{--Zet deze op hidden--}}
        <label for="search_vacancy_input"></label>
        <input name="search_vacancy_input" class="search-vacancy" placeholder="Search">

        <div class="button-container-2">
            <button class="filters">
                <div class="button-flex">
                    <x-settings-logo-svg>

                    </x-settings-logo-svg>
                    <p> Filters</p>
                </div>
            </button>
            <button class="sort-by">
                <div class="button-flex">
                    <x-sort-by-logo-svg>

                    </x-sort-by-logo-svg>
                    <p> Sorteer</p>
                </div>
            </button>
        </div>
    </form>

    @foreach($vacancies as $vacancy)
        <div class="result-container">
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


            <button class="more-info" onclick="location.href='{{ route('open_vacancies.show', $vacancy->id) }}'">
                    <a href="{{route('open_vacancies.show', $vacancy->id)}}">Meer informatie</a>
                    <x-icon-info-svg>

                    </x-icon-info-svg>
            </button>
        </div>
    @endforeach
</div>

<style>

    .text-icon-content-container{
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
    }

    .result-container {
        max-width: 90%;
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

    .filters {
        background-color: #b4085c;
        border-radius: 15px;
        border: none;
        color: white;
        font-weight: bold;
        max-width: 40%;
        min-height: 3rem;
        max-height: 3rem;
        font-size: larger;
    }

    p {
        margin: 0;
    }

    .sort-by {
        background-color: #f9ee00;
        border-radius: 15px;
        border: none;
        color: black;
        font-weight: bold;
        max-width: 40%;
        min-height: 3rem;
        max-height: 3rem;
        font-size: larger;
    }

    .button-flex {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }

    .button-container-2 {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 2rem;
        margin: 1rem;
    }

    .search-vacancy {
        border-radius: 15px;
        border: 1px solid black;
        width: 90%;
        padding: 1rem 0;
        text-indent: 2rem;
        margin: 1rem;
    }

</style>
