<h1 class="center-text extra-margin-top">
    Registratie voltooid!
</h1>
<h1 class="center-text">
    U kunt nu reageren op vacatures!
</h1>

<div class="button-stacker">
    <div class="small-m">
    <x-icon-check-svg>

    </x-icon-check-svg>
    </div>
    <button class="vac-button"><a href="{{route('open_vacancies.index')}}">Ga naar openstaande vacatures</a></button>
    <button class="account-button"><a>Mijn account</a></button>
</div>


<style>

    .small-m{
        margin-top: 2rem;
        margin-bottom: 4rem;
    }

    .button-stacker {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .account-button {
        max-width: 90vw;
        background-color: #f9ee00;
        color: black !important;
        border: none;
        border-radius: 0 15px 15px 15px;
        margin: 1rem 0;
        padding: 1rem;
        width: 100%;
    }

    .vac-button {
        max-width: 90vw;
        background-color: #B20060;
        color: white !important;
        border: none;
        border-radius: 15px 0 15px 15px;
        padding: 1rem;
        margin: 1rem 0;

        width: 100%;
    }
    .account-button a {
        font-weight: bold;
        font-size: large;
        text-decoration: none;
        color: black !important;
    }

    .vac-button a{
        font-weight: bold;
        font-size: large;
        text-decoration: none;
        color: white !important;
    }

    .center-text {
        text-align: center;
    }

    .extra-margin-top {
        margin-top: 10rem;
    }

</style>

<x-template>

</x-template>
