<x-template></x-template>
<h1>Confirm your application</h1>


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
