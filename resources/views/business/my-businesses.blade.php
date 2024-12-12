<x-template :selected="2">

</x-template>
<div class="container-show">
    <h2 class="vacancies-header">Bedrijven</h2>
    @foreach($businesses as $business)
        <div class="business-container">
            <div class="info">
                <div>
                    <img class="business-logo" src="{{asset('storage/' . $business->business->logo)}}"
                         alt="Logo of {{$business->business->name}}">
                    <h1>{{$business->business->name}}</h1>
                </div>
                <p>Function: {{$business->function}}</p>
                <a href="{{route('business.dashboard', $business->business->id)}}">Open Dashboard</a>
            </div>
        </div>
    @endforeach
</div>

<style>
    .container-show {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100vw;
    }

    .business-container {
        padding: 1rem;
        margin: 1.5rem 0;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }
    .business-logo {
        height: 5rem;
        width: 5rem;
        object-fit: contain;
    }
</style>
