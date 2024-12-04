<x-template>

</x-template>
<style>
    h1 {
        font-size: 3rem;
        margin-bottom: 1vh;
        font-weight: lighter;
    }

    .header-text {
        font-size: 3.8rem;
        font-weight: bolder;
        margin-bottom: 5vh;

    }

    .header-div {

        color: black;
        text-align: center;
        padding-top: 0vh;
    }
    h1 {
        margin-left: 1vh;
    }
    .wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .wrapper div {

    }

    .transparent-button {
        margin-top: 2vh;
    }
    .transparent-button-2 {
        margin-top: 2vh;
    }
</style>

<div class="header-div">
    <h1 class="header-text">Registratie werkzoekende <br>
    Stap 2 van 3</h1>
</div>

<div class="wrapper">

    <div>
        <h1>Voornaam</h1>
        <x-form-format-user-pen>
            <input type="text" placeholder="Jane or John" class="form-input">
        </x-form-format-user-pen>

    </div>
    <div>
        <h1>Achternaam</h1>
        <x-form-format-user-pen>
            <input type="text" placeholder="Doe" class="form-input">
        </x-form-format-user-pen>

    </div>

    <div>
        <h1>Geboortedatum</h1>
        <x-form-format-calender>
            <input type="date" placeholder="01-01-1990" class="form-input">
        </x-form-format-calender>

    </div>



    <x-info-and-buttons>
        Persoonlijke informatie wordt
        <br>
        niet gedeeld met de werkgevers!
    </x-info-and-buttons>
    <div class="buttons">
        <div>
            <form method="GET" action="{{ route('register.step1') }}">
                <button class="transparent-button">Terug</button>
            </form>
        </div>
        <div>

        </div>
        <div>
            <form method="GET" action="{{ route('register.step3') }}">
                <button type="submit" class="transparent-button-2">Volgende stap</button>
            </form>
        </div>
    </div>
</div>


