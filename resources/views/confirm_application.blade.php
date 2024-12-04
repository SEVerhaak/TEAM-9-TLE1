<x-template></x-template>
@isset($removeApplication)
<h1>Aanmelding Intrekken</h1>
    <h2>Weet je zeker dat u uw aanmelding wilt verwijderen voor:</h2>
@else
    <h1>Bevestig Aanmelding</h1>
@endisset

<div style="background: #9ca3af; margin-bottom: 2vw">

    <div>
        <h1>{{$vacancy->name}}</h1>
        <h2>{{$vacancy->business->name}}</h2>
        <h2>{{$vacancy->business->hq_location}}</h2>
        <h2>{{$vacancy->time_hours}} Hours per week</h2>
        <h2>{{$vacancy->salary}} Euro (Gross income per month)</h2>
    </div>

    <div>
        <h1>Requirements</h1>
        @foreach($vacancy->certificates as $certificate)
            <p>{{$certificate->name}}</p>
        @endforeach
    </div>

    <div>
        <x-icon-info-svg customColor="#000">
        </x-icon-info-svg>
        <p>Uw persoonlijke informatie wordt niet gedeeld met de werkgever!</p>
    </div>

    <form action="{{ route('open_vacancies.vacancyApplicationHandler', $vacancy->id) }}" method="POST">
        @csrf
        <button type="submit">
            {{ $userApplyStatus }}
        </button>
    </form>

</div>
