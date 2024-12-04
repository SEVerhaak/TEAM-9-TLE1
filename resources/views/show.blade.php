<x-template></x-template>

{{--Message die je krijgt als je een probleem hebt bij het aanmelden voor een vacature (bijv: niet ingelogd)--}}
@if (session('message'))
    <div>
        <h1>{{ session('message') }}</h1>
    </div>
@endif

<div class="container-show">
    {{-- Vacancy banner of banner van het bedrijf????!?!? --}}
    <div class="job-image">
        <img class="job-image" src="{{$vacancy->image}}" alt="Job image of {{$vacancy->name}}">
        <div class="background-yellow"></div>
    </div>

    <div class="job-details-part1">
        <div class="text-icon-content-container">
            <x-icon-building-svg width="22" height="30">

            </x-icon-building-svg>
            <p class="business-name">{{$vacancy->business->name}}</p>
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

    <div class="name-desc">
        <h1>{{$vacancy->name}}</h1>
        <p>{{$vacancy->description}}</p>
    </div>

    <div class="requirements">
        <h1>Vereisten</h1>
        <div class="certificates-container">
        @foreach($vacancy->certificates as $certificate)
            <p class="certificate">{{$certificate->name}}</p>
        @endforeach
        </div>
    </div>

    <form class="confirm-submission" action="{{ route('open_vacancies.vacancyApplicationHandler', $vacancy->id) }}" method="POST">
        @csrf
        <button type="submit" name="redirect">
            {{ $userApplyStatus }}
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 25.949 28.876" class="icon-internal">
                <defs>
                    <style>
                        .cls-1, .cls-2 {
                            fill: none;
                            stroke: #fff;
                            stroke-width: 0.2rem;
                        }

                        .cls-2 {
                            stroke-linecap: round;
                            stroke-linejoin: round;
                        }

                        .icon-internal{
                            padding: 0;
                        }

                    </style>
                </defs>
                <g id="Icon_akar-person-add" data-name="Icon akar-person-add" transform="translate(-3.394 -1.5)">
                    <path id="Path_9" data-name="Path 9" class="cls-1" d="M23.438,9.469A6.469,6.469,0,1,1,16.969,3a6.469,6.469,0,0,1,6.469,6.469Z" transform="translate(-0.77)"/>
                    <path id="Path_10" data-name="Path 10" class="cls-2" d="M22.668,31.35H7.486a2.588,2.588,0,0,1-2.568-2.908l.5-4.042A3.881,3.881,0,0,1,9.276,21H9.73m15.525,0v5.175m-2.588-2.588h5.175" transform="translate(0 -2.475)"/>
                </g>
            </svg>

        </button>
    </form>

</div>

<style>
    .background-yellow {
        position: absolute;
        left: 0 !important;
        top: -7.5rem;
        height: 20rem;
        width: 100vw !important;
        background: linear-gradient(180deg, rgba(255,255,255,0) 0%, rgba(249,239,27,1) 30%, rgba(249,239,27,1) 40%, rgba(255,255,255,0) 100%);
    }
    .job-details-part1 {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .business-name {
        font-weight: bold;
        text-decoration: underline;
        font-size: 1.2rem;
    }
    .name-desc h1{
        margin: 1.5rem 0 0 0;
    }
    .name-desc p{
        margin: 0.5rem 0 1rem 0;
        max-width: 95vw;
        white-space: wrap;
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
    .container-show {
        position: absolute;
        top: 0;
        width:100vw;
    }
    .container-show div {
        width: max-content;
        position: relative;
        left: 0.8rem;
    }
    .job-image {
        position: relative;
        left: 0 !important;
        object-fit: cover;
        height: 17.5rem;
        min-width: 100vw;
        max-width: 100vw;
        margin-bottom: 0.5rem;
    }
    .certificates-container {
        left: 0 !important;
        display: flex;
        flex-direction: column;
        gap: 0.6rem;
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
        margin: 0.8rem 0 10rem 0;
        background-color: #b4085c;
        border: none;
        border-radius: 100rem;
        border-top-right-radius: 0.3rem !important;
        color: white;
        width: 90vw;
        padding: 0.5rem 0;
        font-size: 1.5rem;
        font-weight: 500;
        font-family: "Radikal Trial", sans-serif;
    }
</style>
