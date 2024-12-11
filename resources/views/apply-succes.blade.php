@props(['position' => $position])
<x-template :selected="1">

</x-template>

<div class="wrapper">
    <h2 style="text-align: center;margin-top: 5rem;">Aanmelding voltooid! U ontvangt een bericht als u aangenomen bent voor de functie:</h2>
    <h1 style="text-align: center">{{$position}}</h1>
    <h1 style="text-align: center; font-size: 6rem; margin: 0.5rem 0;">🥳</h1>
    <button class="vac-button"><a href="{{route('open_vacancies.index')}}">Ga naar mijn aanmeldingen</a></button>
    <button class="account-button"><a href="{{route('open_vacancies.index')}}">Ga naar openstaande vacatures</a></button>
</div>
<script type="module">
    import confetti from 'https://cdn.skypack.dev/canvas-confetti';
    confetti();
</script>
<style>
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
    .vac-button a{
        font-weight: bold;
        font-size: large;
        text-decoration: none;
        color: white !important;
    }

    .account-button a {
        font-weight: bold;
        font-size: large;
        text-decoration: none;
        color: black !important;
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

</style>
