<div class="wrapper">
    <h1>Hoe wilt u zich inschrijven?</h1>
    <div class="choice-container">
    <h2>Ik wil me inschrijven als:</h2>
    <button class="choice-button"><a href="{{route('register.step1')}}">Werkzoekende</a></button>
    <button class="choice-button invert">Werkgever</button>
</div>
<div class="login-container">
    <h2 class="margin-top">Heeft u al een account?</h2>
    <a class="login-text" href="{{route('login')}}">Inloggen!</a>
</div>
</div>
<x-template :selected="-1">

</x-template>

<style>
    .margin-top{
        margin-top: 3rem;
    }

    .choice-container{
        background-color: #f9ee00;
        padding-top: 1rem;
        padding-bottom: 1rem;
        border-radius: 0 2rem 2rem 2rem;
    }

    .wrapper{
        text-align: center;
    }

    .login-text{
        text-decoration: underline;
        font-size: x-large;
        color: #b4085c;
    }

    .choice-button{
        width: 80%;
        /* max-width: 50vw; */
        background-color: #B20060;
        color: white;
        border: none;
        border-radius: 15px 0 15px 15px;
        margin: 5vw 0;
        padding: 1rem;
        font-size: x-large;
        font-weight: bold;
        text-decoration: none;
    }

    .choice-button a {
        color: white;
        text-decoration: none;
    }

    .invert{
        border-radius: 0 15px 15px 15px;
    }

</style>
