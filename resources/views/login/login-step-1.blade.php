<style>
    h1 {
        font-size: 3rem;
        margin-bottom: 1vh;
        font-weight: lighter;
    }

    .header-text {
        font-size: 3.5rem;
        font-weight: bold;
        margin-bottom: 5vh;

    }

    .header-div {

        color: black;
        text-align: center;
        padding-top: 7vh;
    }
    h1 {
        margin-left: 1vh;
    }
    .wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

</style>

<div class="header-div">
    <h1 class="header-text">Registratie werkzoekende <br>
    Stap 1 van 3</h1>
</div>

<div class="wrapper">

    <div>
        <h1>E-mail</h1>
        <x-form-format>
            <input type="text" placeholder="example@email.com" class="form-input">
        </x-form-format>

    </div>
    <div>
        <h1>Wachtwoord</h1>
        <x-form-format-key>
            <input type="text" placeholder="****************" class="form-input">
        </x-form-format-key>

    </div>

    <div>
        <h1>Herhaal wachtwoord</h1>
        <x-form-format-key>
            <input type="text" placeholder="****************" class="form-input">
        </x-form-format-key>

    </div>

</div>

<x-template>

</x-template>
