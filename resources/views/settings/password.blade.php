<x-template :selected="2">

</x-template>
<body>
<form method="POST" action="{{ route('settings.password') }}">
    @csrf <!-- Include CSRF token for security -->

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="reset">

        <div class="password flex-col">

            <div class="key-icon">
                <x-icon-key-svg>

                </x-icon-key-svg>
            </div>

            <x-input-label for="password" :value="__('Oud wachtwoord')"/>
            <x-text-input id="password" type="password" name="password" placeholder="•••••••••••••" required
                          autocomplete="current-password"/>
            <x-input-error :messages="$errors->get('password')"/>
        </div>
        <div class="password flex-col">

            <div class="key-icon">
                <x-icon-key-svg>

                </x-icon-key-svg>
            </div>

            <x-input-label for="password" :value="__('Nieuw wachtwoord')"/>
            <x-text-input id="password" type="password" name="password" placeholder="•••••••••••••" required
                          autocomplete="current-password"/>
            <x-input-error :messages="$errors->get('password')"/>
        </div>


        <div class="password flex-col">

            <div class="key-icon">
                <x-icon-key-svg>

                </x-icon-key-svg>
            </div>

            <x-input-label for="password" :value="__('Herhaal wachtwoord')"/>
            <x-text-input id="password" type="password" name="password" placeholder="•••••••••••••" required
                          autocomplete="current-password"/>
            <x-input-error :messages="$errors->get('password')"/>
        </div>

    </div>

</form>

<div class="info">
<a class="link" href="">Wachtwoord vergeten? Klik hier!</a>
<p class="text">Er wordt een email verzonden met instructies om uw wachtwoord te herstellen.</p>
</div>

<div class="buttonContainer">
    <button type="submit" class="transparent-button-1">terug</button>
    <button type="submit" class="transparent-button-2">opslaan</button>
</div>
</body>

<style>
    .link{
        display: flex;
        justify-content: center;
        font-size: 1.3rem;
        color:#b4085c ;
        font-weight: bold;
    }

    .transparent-button-1 {
        margin-top: 1rem;
        padding: 0.3rem 1.5rem;
        border: none;
        border-radius: 0 1rem 1rem 1rem;
        background-color: #ffe100;
        font-weight: bold;
        cursor: pointer;
        font-size: 1.45rem;
    }
    .transparent-button-2 {
        margin-top: 1rem;
        padding: 0.3rem 3rem;
        border: none;
        border-radius: 0 1rem 1rem 1rem;
        font-weight: bold;
        background-color: #b4085c;
        color: white;
        cursor: pointer;
        font-size: 1.45rem;
    }


    .buttonContainer{

        display: flex;
        justify-content: center;
        align-items: flex-end;
        gap: 3rem;
        margin-left: 5rem;
        margin-right: 5rem;

    }

    .reset {
        display: flex;
        align-items: flex-start;
        flex-direction: column;
        max-width: 500px;
        margin: 0 auto;
        padding: 2rem;
        padding-top: 0.1rem;
        padding-right:2rem ;
    }

    .reset h2 {
        font-size: 1.2rem;
        text-align: center;
        margin-bottom: 0.5rem;
    }


    .info{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .forgot{
        display: flex;
        margin-bottom: 5rem;
    }

    .text{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 2rem;
        margin-left: 2rem;
    }

    html {
        font-family: "Radikal Trial", sans-serif;
    }

    .flex-col {
        display: flex;
        flex-direction: column;
        justify-content: center;
        font-weight: bold;
        padding-right: 3.5rem;
    }

    .wrapper-login {
        max-width: 90vw;
        margin: auto;
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }

    .wrapper-login form {
        width: 90%;
    }


    .password {
        margin-top: 0;
        margin-bottom: 1.5rem;
    }

    .email label, .password label, .remember-me {
        font-size: larger;
    }

    #email, #password {
        border-radius: 1rem;
        border: 1px solid #b4085c;
        padding: 0.75rem 1.5rem;
        padding-top: 0.9rem;
        margin-top: 0.3rem;
        font-size: large;
        font-weight: bold;
        text-indent: 2.5rem;
        width: 100%;
    }

     .key-icon {
        position: relative;
        pointer-events: none;
        top: 4.3rem;
        left: 1rem;
    }

    x-input-label {
        font-weight: bold;

    }



</style>
