<?php

use Carbon\Carbon;

?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Vacancy - {{$business->name}}</title>
</head>
<body>

<main>
    <x-business-dashboard-sidebar id="{{$business->id}}"></x-business-dashboard-sidebar>

    <div class="right-container">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="create-vacancy-container">
            <h2>Maak nieuwe vacature</h2>

            <form method="POST" action="{{route('vacancy.store', $business->id)}}">
                @csrf
                <div>
                    <div>
                        <label for="title">Titel</label>
                        <input type="text" name="title" id="title" oninput="copyData('title', 'cp-title')" value="{{old('title')}}">
                    </div>
                    <div>
                        <label for="hours">Uren</label>
                        <input type="number" name="hours" id="hours" oninput="copyData('hours', 'cp-hours')" value="{{old('hours')}}">
                    </div>
                    <div>
                        <label for="salary">Salaris (bruto per maand)</label>
                        <input type="number" name="salary" id="salary" oninput="copyData('salary', 'cp-salary')" value="{{old('salary')}}">
                    </div>

                    <input type="submit" name="submit" value="Opslaan">
                    <a href="{{route('business.dashboard', $business->id)}}">Annuleren</a>
                </div>

                <div>
                    <div>
                        <label for="description">Beschrijving</label>
                        <textarea name="description" id="description">{{old('description')}}</textarea>
                    </div>

                    <div class="result-container">
                        <h2 id="cp-title"></h2>
                        <div class="text-icon-content-container">
                            <x-icon-building-svg>

                            </x-icon-building-svg>
                            <p>{{$business->name}}</p>
                        </div>
                        <div class="text-icon-content-container">
                            <x-icon-map-svg>

                            </x-icon-map-svg>
                            <p>{{$business->hq_location}}</p>
                        </div>
                        <div class="text-icon-content-container">
                            <x-icon-clock-svg>

                            </x-icon-clock-svg>
                            <div>
                            <p id="cp-hours"></p><p class="preview-text">uur per week</p>
                            </div>
                        </div>
                        <div class="text-icon-content-container">
                            <x-icon-money-svg>

                            </x-icon-money-svg>

                            <div>
                            <p id="cp-salary"></p><p class="preview-text">euro (per maand)</p>
                            </div>
                        </div>


                        <button class="more-info">
                            Meer informatie
                            <x-icon-info-svg>

                            </x-icon-info-svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</main>
</body>
</html>

<script type="text/javascript">
    function copyData(sourceId, targetId) {
      let data = document.getElementById(sourceId).value;
      document.getElementById(targetId).innerHTML = data;
    }
</script>


<style>
    body {
        margin: 0;
        font-family: "Radikal Trial", sans-serif;
    }

    main {
        display: flex;
        min-height: 100vh;
        height: max-content;
    }

    .right-container {
        width: 100vw;
        display: flex;
        justify-content: center;
    }
    .create-vacancy-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        display: flex;
        gap: 2rem;
        flex-direction: row;
    }

    form div {
        display: flex;
        flex-direction: column;
    }
    form a {
        text-decoration: none;
    }

    textarea {
        height: 10rem;
        width: 15rem;
        resize: none;
        overflow-y: scroll; /* Vertical scrollbar when content overflows */
    }

    .text-icon-content-container{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
    }
    .text-icon-content-container div {
        display: flex;
        flex-direction: row;
        padding: 0;
        margin: 0;
        gap: 0.3rem;
    }

    .result-container {
        width: 20rem;
        background-color: white;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        margin: 2rem 1rem;
        border-radius: 0 30px 30px 30px;
    }

    .result-container h2 {
        overflow-wrap: break-word;
    }

    .result-container p {
        max-width: 100%;
        margin: 0.25rem 0;
        font-size: large;
    }


    .more-info {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        width: 100%;
        background-color: #b4085c;
        margin: 1rem 1rem 0 0;
        border: none;
        color: white;
        padding: 0.3rem 0 ;
        border-radius: 0 15px 15px 15px;
        font-size: large;
        font-weight: bold;
        text-decoration: none;
    }
    #cp-title {
        margin: 0.5rem 0;
    }
</style>
