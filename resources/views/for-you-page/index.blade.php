@props(['vacancies' => $vacancies])

<x-template :selected="1">

</x-template>
<p>{{$vacancies[0]}}</p>
<p>{{$vacancies[0]->business->name}}</p>
<p>{{$vacancies[0]->business->location}}</p>
<p>{{$vacancies[0]->name}}</p>
<p>{{$vacancies[0]->description}}</p>
<p>{{$vacancies[0]->salary}}</p>
<p>{{$vacancies[0]->time_hours}}</p>
<p>{{$vacancies[0]->image}}</p>

<form method="POST" action="{{ route('fyp.next') }}">
    @csrf
    <input type="hidden" name="vacancies" value="{{ json_encode($vacancies) }}">

    <button type="submit" name="action" value="accept" class="btn btn-success">Accept</button>
    <button type="submit" name="action" value="deny" class="btn btn-danger">Deny</button>
</form>

