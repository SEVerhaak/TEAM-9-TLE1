<x-template :selected="1">

</x-template>

<div class="parent-container">
@isset($removeApplication)
<h1>Aanmelding Intrekken</h1>
@else
    <h1>Bevestig Aanmelding</h1>
@endisset

<div class="container">
    <div class="job-details-part1">
        <div class="name">
            <h1>{{$vacancy->name}}</h1>
        </div>
        <div class="text-icon-content-container">
            <x-icon-building-svg width="20" height="26">

            </x-icon-building-svg>
            <p>{{$vacancy->business->name}}</p>
        </div>
        <div class="text-icon-content-container">
            <x-icon-map-svg width="22" height="30">

            </x-icon-map-svg>
            <p>{{$vacancy->business->hq_location}}</p>
        </div>
        <div class="text-icon-content-container">
            <x-icon-clock-svg width="22" height="30">

            </x-icon-clock-svg>
            <p>{{$vacancy->time_hours}} Uur per week</p>
        </div>
        <div class="text-icon-content-container">
            <x-icon-money-svg width="22" height="30">

            </x-icon-money-svg>
            <p>{{$vacancy->salary}} Euro (Per maand)</p>
        </div>
    </div>

    <div class="requirements">
        <h1>Vereisten</h1>
        <div class="certificates-container">
            @foreach($vacancy->certificates as $certificate)
                <p class="certificate">{{$certificate->name}}</p>
            @endforeach
        </div>
    </div>

    @isset ($removeApplication)
    @else
        <div class="info-container">
            <x-icon-info-svg width="34" height="34" customColor="#000">
            </x-icon-info-svg>
            <p>Uw persoonlijke informatie wordt niet gedeeld met de werkgever!</p>
        </div>
    @endisset

    <form class="confirm-submission" action="{{ route('open_vacancies.vacancyApplicationHandler', $vacancy->id) }}" method="POST">
        @csrf
        <button type="submit">
            {{ $userApplyStatus }}
        </button>
    </form>
</div>
</div>

<style>
    * {
        font-family: "Radikal Trial", sans-serif;
    }

    .parent-container {
        display: flex;
        flex-direction: column;
        position: absolute;
        top:4rem;
        align-items: center;
        width: 100vw;
    }
    .container{
        padding: 1.2rem;
        box-shadow: 0 0 0.5rem 0 rgba(0,0,0,0.2);
        width: 75vw !important;
        border-radius: 2rem;
    }
    .job-details-part1 {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .name h1{
        margin: 0;
    }
    .text-icon-content-container{
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
    }
    .text-icon-content-container p {
        margin: 0.2rem !important;
    }
    .container-show div {
        width: max-content;
        position: relative;
        left: 0.8rem;
    }
    .certificates-container {
        left: 0 !important;
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
    }
    .certificate {
        font-weight: bold;
        width: max-content;
        background-color: #faec02;
        padding: 3vw;
        border-radius: 100rem;
        border-top-left-radius: 0.3rem !important;
        margin:0;
    }
    .requirements h1 {
        margin: 0 0 0.8rem 0 ;
    }
    .confirm-submission {
        display: flex;
        justify-content: center;
    }
    .confirm-submission button {
        display: flex;
        gap: 1rem;
        justify-content: center;
        align-items: center;
        margin: 1.2rem 0 0 0;
        background-color: #b4085c;
        border: none;
        border-radius: 100rem;
        color: white;
        width: 90vw;
        padding: 0.5rem 0;
        font-size: 1.5rem;
        font-weight: 500;
        font-family: "Radikal Trial", sans-serif;
    }
    .info-container {
        border-radius: 2rem;
        border-top-right-radius: 0.3rem !important;
        margin-top:1rem;
        background-color: #faec02;
        display: flex;
        justify-content: space-evenly;
        flex-direction: row;
        align-items: center;
    }
    .info-container p {
        width: 80%;
    }
</style>
