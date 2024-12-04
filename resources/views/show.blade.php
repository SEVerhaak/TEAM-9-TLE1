{{--Message die je krijgt als je een probleem hebt bij het aanmelden voor een vacature (bijv: niet ingelogd)--}}
@if (session('message'))
    <div>
        <h1>{{ session('message') }}</h1>
    </div>
@endif

<div style="background: #9ca3af; margin-bottom: 2vw">
    {{-- Vacancy banner of banner van het bedrijf????!?!? --}}
    <img src="{{$vacancy->image}}" alt="Job image of {{$vacancy->name}}">

    <div>
        <h2>{{$vacancy->business->name}}</h2>
        <h2>{{$vacancy->business->hq_location}}</h2>
        <h2>{{$vacancy->time_hours}} Hours per week</h2>
        <h2>{{$vacancy->salary}} Euro (Gross income per month)</h2>
    </div>

    <div>
        <h1>{{$vacancy->name}}</h1>
        <h2>{{$vacancy->description}}</h2>
    </div>

    <div>
        <h1>Requirements</h1>
        @foreach($vacancy->certificates as $certificate)
            <p>{{$certificate->name}}</p>
        @endforeach
    </div>

    <form action="{{ route('open_vacancies.vacancyApplicationHandler', $vacancy->id) }}" method="POST">
        @csrf
        <button type="submit">
            {{ $userApplyStatus }}
        </button>
    </form>
</div>
