<x-template></x-template>
<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->

    @foreach($vacancies as $vacancy)
        <div>
            <p> {{$vacancy->vacancy->name}}</p>
            <p> {{$vacancy->vacancy->business->hq_location}}</p>
            <p> {{$vacancy->vacancy->salary}}</p>
            <p> {{$vacancy->vacancy->time_hours}}</p>
            <a href="{{route('open_vacancies.show', $vacancy->vacancy->id)}}">More information</a>
        </div>
    @endforeach
</div>
