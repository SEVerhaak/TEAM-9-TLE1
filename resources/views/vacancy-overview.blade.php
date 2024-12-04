<x-template>

</x-template>
<div class="title">
    <div class="innertitle">
        <h5>Hoe wilt U zoeken naar Uw nieuwe droombaan?</h5>
    </div>
</div>

<div class="alles">
    <h1 class="tekstAlles">Alle Vacatures</h1>
    <div>
        <x-3poppetjes class="icon"></x-3poppetjes>
    </div>
</div>

<div class="alles alt">
    <h1 class="tekstAlles">Vacatures voor jou</h1>
    <div>
        <x-poppetje class="icon"></x-poppetje>
    </div>


</div>


<div class="aanmeldingen">
    <a href="" style="flex-grow: 1;">Ga naar mijn aanmeldingen</a>
</div>

<style>

    h1 {
        font-size: 2rem;
    }
    h5 {
        text-align: center;
    }

    .title {
        display: flex;
        font-weight: bolder;
    }

    .innertitle {
        justify-content: center;
        flex-direction: column;

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
        align-items: center;
        margin: 0 auto;
        padding-bottom: 2rem;
        padding-top: 2rem;
        padding-right: 1rem;
        padding-left: 1rem;
        margin-bottom: 1rem;
        flex-direction: row;
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

    .aanmeldingen{
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: large;
        margin-top: 3rem;
        color: #b4085c;
    }

</style>
