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

<x-template>

</x-template>

<div class="header-div">
    <h1 class="header-text">Registratie werkzoekende <br>
        Stap 1 van 3</h1>
</div>


<div class="wrapper">

    <form method="POST" action="{{ route('settings.account') }}">
        @csrf <!-- Include CSRF token for security -->
        <div>
            <h2>E-mail</h2>
            <x-form-format>
                <input type="text" name="email" placeholder="{{$email}}" class="form-input">

            </x-form-format>


        </div>
        <div>
            <h2>Voornaam</h2>
            <x-form-format-key>
                <input type="text" name="Firstname" placeholder="{{$firstname}}" class="form-input">
            </x-form-format-key>

        </div>

        <div>
            <h2>Achternaam</h2>
            <x-form-format-key>
                <input type="text" name="Lastname" placeholder="{{$lastname}}" class="form-input">
            </x-form-format-key>

        </div>

        @if(session('incorrect'))
            <div>
                <h2 style="color: red;">{{session('incorrect')}}</h2>
            </div>
        @endif

        <div>
            <h2>wachtwoord</h2>
            <x-form-format-key>
                <input type="password" name="password" placeholder="Wachtwoord" class="form-input">
            </x-form-format-key>

        </div>
        <button type="submit" class="transparent-button-2">opslaan</button>

    </form>

</div>


