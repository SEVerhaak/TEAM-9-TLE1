<x-template></x-template>
<h1>Confirm your application</h1>


<form action="{{ route('open_vacancies.vacancyApplicationHandler', $vacancy->id) }}" method="POST">
    @csrf
    <button type="submit">
        {{ $userApplyStatus }}
    </button>
</form>
