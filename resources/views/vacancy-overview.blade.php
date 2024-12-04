<x-template>

</x-template>
<div class="title">
    <h1>Hoe wilt U zoeken naar Uw </h1>
    <h1 class="ondertitel">nieuwe droombaan?</h1>
</div>

<div class="alles">
    <h1 class="tekstAlles">Alle Vacatures</h1>
    <div>
        <x-3poppetjes class="icon"></x-3poppetjes>
    </div>
</div>

<div class="alles alt">
    <div>
        <x-poppetje class="icon"></x-poppetje>
    </div>
    <h1 class="tekstAlles">Vacatures voor jou</h1>

</div>


<div>
    <a href="" style="flex-grow: 1;">Ga naar mijn aanmeldingen</a>
</div>

<style>
    .title {
        display: flex;
        justify-content: center;
        font-size: 2rem;
        flex-direction: column;
        margin-left: 4.1rem;
        margin-top: 2rem;
        margin-bottom: 0;

    }

    .ondertitel {
        margin-left: 5rem;
        margin-top: -2rem;
    }

    .alles {
        background-color: #b4085c;
        border: none;
        width: 80%;
        border-radius: 40px 0 40px 40px;
        color: white;
        font-size: 2rem;
        text-align: center;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;  /* Centers content vertically */
        margin: 0 auto;
        padding-bottom: 3rem;
        padding-top: 3rem;
        padding-right: 2rem;
        padding-left: 2rem;
        flex-direction: row;
        margin-bottom: 1rem;
    }

    .alt {
        border-radius: 0 40px 40px 40px !important;
        color: black !important;
        background-color: #f9ee00 !important;
    }

    .tekstAlles {
        margin-left: 20px;
        text-align: left;
    }





</style>
