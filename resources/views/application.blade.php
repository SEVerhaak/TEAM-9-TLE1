<x-template :selected="1"></x-template>
<section>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
        <h3> {{$application->vacancy->name}}</h3>
        <p> {{$application->vacancy->business->hq_location}}</p>
        <p> {{$application->vacancy->salary}}</p>
        <p> {{$application->vacancy->time_hours}}</p>
        <form class="confirm-submission"
              action="test"
              method="POST">
            @csrf
            <label for="">message to buisness</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <button type="submit">
                send message message to buisness
            </button>
        </form>
</section>
