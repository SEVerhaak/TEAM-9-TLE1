<x-template></x-template>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<a href="{{route('registrations_data')}}">count</a>


<section class="accepted">
    <h2>accepted</h2>
    <a href="{{route('accepted_registrations')}}">show more</a>
    @foreach($vacancies as $vacancy)
        @if($vacancy->application_stage == 1)
            <h3> {{$vacancy->vacancy->name}}</h3>
            <p> {{$vacancy->vacancy->business->hq_location}}</p>
            <p> {{$vacancy->vacancy->salary}}</p>
            <p> {{$vacancy->vacancy->time_hours}}</p>
        @endif
    @endforeach
</section>
<section class="applied">
    <h2>applied</h2>
    <a href="{{route('pending_registrations')}}">show more</a>
    @foreach($vacancies as $vacancy)
        @if($vacancy->application_stage == 0)
            <h3> {{$vacancy->vacancy->name}}</h3>
            <p> {{$vacancy->vacancy->business->hq_location}}</p>
            <p> {{$vacancy->vacancy->salary}}</p>
            <p> {{$vacancy->vacancy->time_hours}}</p>
            <form class="confirm-submission"
                  action="{{ route('open_vacancies.vacancyApplicationHandler', $vacancy->vacancy->id) }}"
                  method="POST">
                @csrf
                <button type="submit">
                    cancel registration
                </button>
            </form>
        @endif
    @endforeach
</section>

<section class="denied">
    <h2>denied</h2>
    <a href="{{route('denied_registrations')}}">show more</a>
    @foreach($vacancies as $vacancy)
        @if($vacancy->application_stage == 2)
            <div>
                <h3> {{$vacancy->vacancy->name}}</h3>
                <p> {{$vacancy->vacancy->business->hq_location}}</p>
                <p> {{$vacancy->vacancy->salary}}</p>
                <p> {{$vacancy->vacancy->time_hours}}</p>
            </div>

        @endif
    @endforeach
</section>

