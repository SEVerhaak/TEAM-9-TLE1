<x-template :selected="2">

</x-template>

<div class="header-div">
    <h1 class="header-text">Hello, {{auth()->user()->name}}</h1>
    <h2>Where would you like to go?</h2>
    <a href=""></a>
</div>

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
        font-size: 2rem;
        font-weight: bolder;
    }

    .header-div {
        color: black;
        text-align: center;
        margin-top: 10vh;
    }
    h2 {
        font-weight: lighter;
        /*margin-bottom: 0.5vh;*/
        margin: 0;
    }

</style>
