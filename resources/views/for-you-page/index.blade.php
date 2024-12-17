@props(['vacancies' => $vacancies])

<x-template :selected="1">

</x-template>
<div class="wrapper">
    <h1 style="text-align: center">Aanbevolen voor jou</h1>
    <div class="data-container">
        <div class="image-container">

            @if ($vacancies[0]->image !== null)
                <img class="header-image" src="{{$vacancies[0]->image}}">
            @else
                <img class="header-image" src="/images/placeholder_img.png">

            @endif
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
    <div class="button-form">
        <!-- Deny Button Form -->
        <form method="POST" action="{{ route('fyp.denyVacancy') }}">
            @csrf
            <input type="hidden" name="vacancies" value="{{ json_encode($vacancies) }}">
            <button type="submit" id="deny" name="action" value="deny" class="btn btn-danger">✕</button>
        </form>

        <!-- Accept Button -->
        <button id="accept" class="btn btn-success">✓</button>
    </div>

    <!-- Confirmation Modal -->
    <div class="confirm-container" id="confirm-box">
        <div class="close-button" id="close">✖</div>
        <h2 style="text-align: center; margin-top: 0.25rem;">Bevestig uw inschrijving:</h2>
        <h3>Details:</h3>
        <h4 class="header-title-text">{{ $vacancies[0]->name }}</h4>
        <div class="text-icon-content-container">
            <x-icon-map-svg></x-icon-map-svg>
            <p>{{ $vacancies[0]->business->hq_location }}</p>
        </div>
        <div class="text-icon-content-container">
            <x-icon-clock-svg></x-icon-clock-svg>
            <p>{{ $vacancies[0]->time_hours }} uur per week</p>
        </div>
        <div class="text-icon-content-container">
            <x-icon-money-svg></x-icon-money-svg>
            <p>{{ $vacancies[0]->salary }} euro (per maand)</p>
        </div>

        <!-- Confirmation Accept Button Form -->
        <form method="POST" action="{{ route('fyp.acceptVacancy') }}">
            @csrf
            <input type="hidden" name="vacancies" value="{{ json_encode($vacancies) }}">
            <button type="submit" id="confirm-accept" name="action" value="accept" class="btn btn-success">Bevestig
                inschrijving
            </button>
        </form>
    </div>


    <script>
        window.onload = init;
        let closeButton;
        let confirmButton;
        let confirmContainer;
        let backdrop;

        function init() {
            closeButton = document.getElementById('close');
            confirmButton = document.getElementById('accept');
            confirmContainer = document.getElementById('confirm-box');
            backdrop = document.createElement('div'); // Create a backdrop element
            backdrop.id = 'modal-backdrop'; // Assign an ID for styling
            document.body.appendChild(backdrop); // Append it to the body

            confirmButton.addEventListener('click', open);
            closeButton.addEventListener('click', close);
            backdrop.addEventListener('click', close); // Close when clicking outside the modal
        }

        function open() {
            confirmContainer.style.display = 'block';
            confirmContainer.style.visibility = 'visible';
            backdrop.style.display = 'block'; // Show the backdrop
        }

        function close() {
            confirmContainer.style.display = 'none';
            confirmContainer.style.visibility = 'hidden';
            backdrop.style.display = 'none'; // Hide the backdrop
        }
    </script>


    <style>
        #modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            display: none; /* Hidden by default */
            z-index: 1000; /* Behind the modal but above everything else */
        }

        .close-button {
            font-size: xxx-large;
            text-align: right;
            color: #ff2d20;
        }

        #confirm-accept {
            max-width: 90vw;
            background-color: #00AD5D;
            color: white;
            border: none;
            border-radius: 15px 0 15px 15px;
            width: 100%;
            padding: 1rem 0;
            margin-top: 0.5rem;
            font-size: x-large;
            font-family: "Radikal Trial", sans-serif;

        }

        .confirm-container {
            position: fixed;
            width: 75%;
            left: 50%;
            top: 20%;
            transform: translate(-50%, 0);
            background-color: white;
            padding: 2rem;
            border-radius: 1.5rem;
            box-shadow: 0 4px 40px rgba(0, 0, 0, 0.4);
            visibility: hidden;
            display: none;
            z-index: 1220; /* Behind the modal but above everything else */

        }

        .confirm-container p, .confirm-container h1, .confirm-container h3 {
            margin: 0.5rem 0;
        }

        .text-icon-content-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 0.5rem;
        }

        .header-title-text {
            margin: 0.5rem 0;
        }

        .button-form {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        #accept, #deny {
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
