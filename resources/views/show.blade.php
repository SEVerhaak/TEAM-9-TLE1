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

    <a href="{{route('open_vacancies.show', $vacancy->id)}}">Apply</a>
</div>
