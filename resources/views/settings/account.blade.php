<style>
    a {
        text-decoration: none;
        color: inherit;
    }

    h1 {
        margin-bottom: 1vh;
        font-weight: lighter;
    }

    .header-text {
        text-align: center;
        font-size: 2rem;
        font-weight: bolder;
        margin: 0.5rem 0;
    }

    .header-div {
        color: black;
        text-align: center;
        margin-top: 10vh;
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
        justify-content: center;
        align-items: center;
        gap: 1.5rem;
    }

    .infoContainer {
        display: flex;
        flex-direction: row;
        background-color: #ffe100;
        align-items: center;
        padding: 0.5rem;
        max-width: 80%;
        border-radius: 0 1.5rem 1.5rem 1.5rem;
    }

    .info1 {
        margin-right: 1rem;
    }

    .info2 {
        font-weight: bold;
        font-size: 0.9rem;
        margin: 0;
    }

    .form {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .transparent-button-1 {
        margin-top: 1rem;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 0 1rem 1rem 1rem;
        background-color: #ffe100;
        font-weight: bold;
        cursor: pointer;
        font-size: 1.45rem;
    }

    .transparent-button-2 {
        margin-top: 1rem;
        padding: 0.5rem 3rem;
        border: none;
        border-radius: 0 1rem 1rem 1rem;
        font-weight: bold;
        background-color: #b4085c;
        color: white;
        cursor: pointer;
        font-size: 1.45rem;
    }

    .transparent-button-2:hover {
        background-color: #bbb;

    }

    .transparent-button-1:hover {
        background-color: #bbb;

    }

    .buttonContainer {
        display: flex;
        gap: 4rem;
        margin-top: 1rem;
        width: 90%;
        justify-content: space-between;
    }

    .wachtwoord {
        display: flex;
        flex-direction: column;
        background-color: #ffe100;
        align-items: center;
        padding-right: 1.7rem;
        padding-left: 1.7rem;
        padding-bottom: 1.7rem;
        max-width: 80%;
        border-radius: 0 1.5rem 1.5rem 1.5rem;
        margin-top: 1rem;


    }

    .titel {
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .m-bottom {
        margin-bottom: 5vh !important;
    }

</style>

<x-template :selected="2">

</x-template>

<div class="header-div">
    <h1 class="header-text">Account<br></h1>
</div>

<div class="wrapper">
    <form method="POST" action="{{ route('settings.storesettings') }}" class="form">
        @csrf <!-- Include CSRF token for security -->

        <div>
            <h2>E-mail</h2>
            <x-form-format>
                <input type="text" name="email" placeholder="E-mail" value="{{$email}}" class="form-input">
            </x-form-format>
        </div>

        <div>
            <h2>Voornaam</h2>
            <x-form-format-key>
                <input type="text" name="Firstname" placeholder="First Name" value="{{$firstname}}" class="form-input">
            </x-form-format-key>
        </div>

        <div>
            <h2>Achternaam</h2>
            <x-form-format-key>
                <input type="text" name="Lastname" placeholder="Last Name" value="{{$lastname}}" class="form-input">
            </x-form-format-key>
        </div>

        @if(session('error'))
            <div>
                <h2 style="color: red;">{{session('error')}}</h2>
            </div>
        @endif

        <div class="wachtwoord">
            <h2 class="titel">wachtwoord</h2>
            <div class="input">
            <x-form-format-key >
                <input type="password" name="password" placeholder="Wachtwoord" class="form-input" >
            </x-form-format-key>
            </div>
            <div class="infoContainer">
                <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "45"}}" height="{{$height ?? "45"}}" viewBox="0 0 24.773 24.773" class="info1">
                    <defs>
                        <style>
                            .cls-11 {
                                fill: {{$customColor ?? "#000"}};
                            }
                        </style>
                    </defs>
                    <path id="Icon_fa-solid-circle-info" data-name="Icon fa-solid-circle-info" class="cls-11" d="M12.386,24.773A12.386,12.386,0,1,0,0,12.386,12.386,12.386,0,0,0,12.386,24.773Zm-1.935-8.516h1.161v-3.1H10.451a1.161,1.161,0,1,1,0-2.322h2.322A1.158,1.158,0,0,1,13.935,12v4.258h.387a1.161,1.161,0,1,1,0,2.322H10.451a1.161,1.161,0,1,1,0-2.322ZM12.386,6.193a1.548,1.548,0,1,1-1.548,1.548A1.548,1.548,0,0,1,12.386,6.193Z"/>
                </svg>

                <p class="info2">Om uw wijzingen op te slaan moet u uw wachtwoord invoeren</p>
            </div>
        </div>



        <div class="buttonContainer">
            <button class="transparent-button-1"><a href="{{ route('settings.index') }}">Terug</a></button>
            <button type="submit" class="transparent-button-2">Opslaan</button>
        </div>
    </form>
</div>
