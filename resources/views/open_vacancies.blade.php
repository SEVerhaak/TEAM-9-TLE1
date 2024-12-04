{{--Message die je krijgt als je voor een vacature hebt aangemeld of uitgeschreven--}}
@if (session('message'))
    <div>
        <h1>{{ session('message') }}</h1>
    </div>
@endif
<h1>Openstaande Vacatures</h1>

{{-- Search filter formulier. WERKT NU NOG NIET OMDAT ER GEEN USER STORY VOOR WAS!--}}
{{-- Willen we dit async maken? --}}
{{--   Action = {{ route('open_vacancies.search')}}--}}
<form method="GET" action="">
    {{--Zet deze op hidden--}}
    <label for="search_vacancy_input">Search</label>
    <input name="search_vacancy_input" placeholder="Search">
    <div>
        <button>
            {{--            <img src="">--}}
            Filters
        </button>
        <button>
            {{--            <img src="">--}}
            Sort by
        </button>
    </div>
</form>

@foreach($vacancies as $vacancy)
    <div>
        <h1>{{$vacancy->name}}</h1>
        <h2>{{$vacancy->business->name}}</h2>
        <h2>{{$vacancy->business->hq_location}}</h2>
        <h2>{{$vacancy->time_hours}} Hours per week</h2>
        <h2>{{$vacancy->salary}} Euro (Gross income per month)</h2>

        <a href="{{route('open_vacancies.show', $vacancy->id)}}">More Info</a>
    </div>
@endforeach
