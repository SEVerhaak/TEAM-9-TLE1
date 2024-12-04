<x-template>

</x-template>
<style>
    a {
        text-decoration: none;
        color: inherit;
    }
    h1 {
        /*font-size: 3rem;*/
        margin-bottom: 1vh;
        font-weight: lighter;

    }

    .header-text {
        font-size: 1.5rem;
        font-weight: bolder;
        margin-bottom: 2vh;


    }

    .header-div {

        color: black;
        text-align: center;
        margin-top: 15vh;
    }
    h1 {
        margin-left: 1vh;
    }

    h2 {
        font-weight: lighter;
        margin-bottom: 0.5vh;
    }
    .wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    /*.transparent-button {*/
    /*    margin-top: 0vh;*/
    /*}*/
    /*.transparent-button-2 {*/
    /*    margin-top: 2vh;*/
    /*}*/

</style>

<div class="header-div">
    <h1 class="header-text">Registratie werkzoekende <br>
    Stap 2 van 3</h1>
</div>

<div class="wrapper">
    <form method="POST" action="{{ route('register.step2') }}">
        @csrf <!-- Include CSRF token for security -->
    <div>
        <h2>Voornaam</h2>
        <x-form-format-user-pen>
            <input type="text" name="first_name" placeholder="Voornaam" class="form-input">
        </x-form-format-user-pen>

    </div>
    <div>
        <h2>Achternaam</h2>
        <x-form-format-user-pen>
            <input type="text" name="last_name" placeholder="Achternaam" class="form-input">
        </x-form-format-user-pen>

    </div>

    <div>
        <h2>Geboortedatum</h2>
        <x-form-format-calender>
            <input type="date" name="birth_date" placeholder="01-01-1990" class="form-input">
        </x-form-format-calender>

    </div>



    <x-info-and-buttons>
        Persoonlijke informatie wordt
        <br>
        niet gedeeld met de werkgevers!
    </x-info-and-buttons>
    <div class="buttons">
        <div>

{{--                <a type="submit" class="transparent-button">Terug</a>--}}
                <a class="transparent-button" href="{{url()->previous()}}">Terug</a>

        </div>
        <div>

        </div>
        <div>
                <button type="submit" class="transparent-button-2">Volgende stap</button>
        </div>
    </div>
    </form>
</div>


