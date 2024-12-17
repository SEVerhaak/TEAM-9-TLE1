@props(['vacancies' => $vacancies])

<x-template :selected="1">

</x-template>
<div class="wrapper">
    <h1 style="text-align: center">Aanbevolen voor jou</h1>
    <div class="data-container">
        <div class="image-container">
            <img class="header-image" src="/images/placeholder_img.png">
            <!-- <p>{{$vacancies[0]->image}}</p> -->
        </div>
        <div class="text-container">
            <h3 class="header-title-text">{{$vacancies[0]->name}}</h3>
            <div class="text-icon-content-container">
                <x-icon-building-svg>

                </x-icon-building-svg>
                <h4 class="header-title-text">{{$vacancies[0]->business->name}}</h4>
            </div>
            <div class="text-icon-content-container">
                <x-icon-map-svg>

                </x-icon-map-svg>
                <p>{{$vacancies[0]->business->hq_location}}</p>
            </div>
            <div class="text-icon-content-container">
                <x-icon-clock-svg>

                </x-icon-clock-svg>
                <p>{{$vacancies[0]->time_hours}} uur per week</p>
            </div>
            <div class="text-icon-content-container">
                <x-icon-money-svg>

                </x-icon-money-svg>
                <p>{{$vacancies[0]->salary}} euro (per maand)</p>
            </div>

            <p>{{$vacancies[0]->description}}</p>

        </div>
    </div>
    <form class="button-form" method="POST" action="{{ route('fyp.next') }}">
        @csrf
        <input type="hidden" name="vacancies" value="{{ json_encode($vacancies) }}">

        <button type="submit" id="deny" name="action" value="deny" class="btn btn-danger">✕</button>
        <button type="submit" id="accept" name="action" value="accept" class="btn btn-success">✓</button>
    </form>

    <div class="confirm-container">
        <h1>Bevestig uw inschrijving:</h1>
        <h3>details</h3>
    </div>

</div>


<style>
    .text-icon-content-container{
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
    }

    .header-title-text{
        margin: 0.5rem 0;
    }

    .button-form {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    #accept, #deny{
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
        position: relative;
        top: -2rem;
    }

    #accept {
        color: white;
        background-color: #00AD5D;
        border: none;
        border-radius: 50%; /* Make the button round */
        width: 80px; /* Set button width */
        height: 80px; /* Set button height to match width */
        font-size: 50px; /* Adjust font size */
    }

    #deny {
        color: white;
        background-color: #BF212F;
        border: none;
        border-radius: 50%; /* Make the button round */
        width: 80px; /* Set button width */
        height: 80px; /* Set button height to match width */
        font-size: 50px; /* Adjust font size */
    }


    .data-container {
        background: rgb(255, 255, 255);
        background: linear-gradient(0deg, rgba(255, 255, 255, 1) 30%, rgba(250, 240, 29, 1) 100%);
        max-width: 90vw;
        border-radius: 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        padding-bottom: 2rem;
    }

    .header-image {
        max-width: 90%;
        border-radius: 1.5rem;
        margin-top: 1rem;
    }

    .image-container {
        display: flex;
        justify-content: center;
    }

    .image-container img {
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
    }

    .text-container {
        max-width: 90%;
        margin: 1rem;
    }

    .text-container p {
        margin: 0.5rem 0;
    }

</style>
