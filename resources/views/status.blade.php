<x-template :selected="1"></x-template>
<style>

    .text-icon-content-container {
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
        border-radius: 0 30px 30px 30px
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

    .more-info a {
        color: white;
        font-size: 1.5rem;
        /*font-weight: bolder;*/
        font-family: "Radikal Trial", sans-serif;
        text-decoration: none;

    }

    .more-info {
        width: 100%;

        background-color: #00ad5d;
        margin: 1rem 1rem 0 0;
        border: none;
        color: white;
        font-weight: bold;
        font-size: 1.4rem;
        padding: 1rem;
        border-radius: 0 15px 15px 15px;
    }

    .more-info-red {
        width: 100%;

        background-color: #bf212e;
        margin: 1rem 1rem 0 0;
        border: none;
        color: white;
        font-weight: bold;
        font-size: 1.4rem;
        padding: 1rem;
        border-radius: 0 15px 15px 15px;
    }

    .more-info-yellow {
        width: 100%;
        font-family: "Radikal Trial", sans-serif;
        background-color: #faee00;
        margin: 1rem 1rem 0 0;
        border: none;
        color: black;
        font-weight: bolder;
        font-size: 1.4rem;
        padding: 1rem;
        border-radius: 0 15px 15px 15px;
    }

    .button-wrapper-1 {
        display: flex;

        align-items: center;
        justify-content: center;

    }

    .button-wrapper-1 a {
        margin-right: 1vh;
    }
</style>
<div>

    @foreach($vacancies as $vacancy)

        <div class="result-container">
            <h2>{{$vacancy->vacancy->name}}</h2>
            <div class="text-icon-content-container">
                <x-icon-building-svg>

                </x-icon-building-svg>
                <p>{{$vacancy->vacancy->business->name}}</p>
            </div>
            <div class="text-icon-content-container">
                <x-icon-map-svg>

                </x-icon-map-svg>
                <p>{{$vacancy->vacancy->business->hq_location}}</p>
            </div>
            <div class="text-icon-content-container">
                <x-icon-clock-svg>

                </x-icon-clock-svg>
                <p>{{$vacancy->vacancy->time_hours}} Uur per week</p>
            </div>
            <div class="text-icon-content-container">
                <x-icon-money-svg>

                </x-icon-money-svg>
                <p>{{$vacancy->vacancy->salary}} Euro (Per maand)</p>
            </div>

            @if($application == 0)
                <button class="more-info-yellow" onclick="location.href='{{route('application.show', $vacancy->id)}}'">
                    <div class="button-wrapper-1">
                        <a>In afwachting</a>
                        <x-icon-clock-svg>
                        </x-icon-clock-svg>
                    </div>
                    @elseif ($application == 1)
                        <button class="more-info" onclick="location.href='{{route('application.show', $vacancy->id)}}'">
                            <div class="button-wrapper-1">
                                <a>Aangenomen!</a>
                                <x-unique-icon-check-svg></x-unique-icon-check-svg>
                            </div>

                            </x-unique-icon-check-svg>
                            @elseif ($application == 2)
                                <div class="button-holder">
                                    <button class="more-info-red"
                                            onclick="location.href='{{route('application.show', $vacancy->id)}}'">

                                        <div class="button-wrapper-1">
                                            <a>Afgewezen</a>
                                            <x-icon-exclamation-svg>

                                            </x-icon-exclamation-svg>
                                        </div>
                                </div>
                        </button>
            @endif
        </div>
    @endforeach
</div>


<style>
    .button svg {
        margin-top: 1vh;
    }
</style>

