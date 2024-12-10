<!-- Session Status -->
<x-auth-session-status :status="session('status')"/>
<h1 style="text-align: center; margin-top: 5rem">Log-in</h1>
<div class="wrapper-login">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="email flex-col">
            <div class="mail-icon">
                <x-icon-mail-svg >

                </x-icon-mail-svg>
            </div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                          autocomplete="username" placeholder="email@mail.com"/>
            <x-input-error :messages="$errors->get('email')"/>
        </div>

        <!-- Password -->
        <div class="password flex-col">

            <div class="key-icon">
                <x-icon-key-svg >

                </x-icon-key-svg>
            </div>

            <x-input-label for="password" :value="__('Wachtwoord')"/>
            <x-text-input id="password" type="password" name="password" placeholder="••••••••••" required autocomplete="current-password"/>
            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <!-- Remember Me -->
        <div class="remember-me">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Onthoudt mij') }}</span>
            </label>
        </div>

        <div class="forgot-password flex-col">
            <div class="login-button-container">
                <x-primary-button class="login-button">
                    {{ __('Inloggen') }}
                </x-primary-button>
            </div>
            <div class="forgot-password-text">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Wachtwoord vergeten?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
</div>
<x-template :selected="-1"></x-template>

<style>
    html{
        font-family: "Radikal Trial", sans-serif;
    }

    .flex-col {
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .wrapper-login {
        max-width: 90vw;
        margin: auto;
        display: flex;
        justify-content: center;
        margin-top: 4rem;
    }

    .wrapper-login form {
        width: 90%;
    }

    .email, .password {
        margin: 1.5rem 0;
    }

    .email label, .password label, .remember-me{
        font-size: larger;
    }

    .login-button {
        width: 100%;
        max-width: 50vw;
        background-color: #B20060;
        color: white;
        border: none;
        border-radius: 15px 0 15px 15px;
        margin: 5vw 0;
        padding: 1rem;
        font-size: x-large;
        font-weight: bold;
    }


    .forgot-password {
        margin-top: 3rem;
    }

    .login-button-container {
        margin-bottom: 2rem;
        display: flex;
        justify-content: center;
    }

    .forgot-password-text {
        text-align: center;
        font-size: larger;
    }

    #email, #password{
        border-radius: 1rem;
        border: 1px solid #b4085c;
        padding: 0.75rem 1rem;
        margin-top: 0.5rem;
        font-size: large;
        text-indent: 2.5rem;
    }

    .mail-icon, .key-icon{
        position: relative;
        pointer-events: none;
        top: 4rem;
        left: 1rem;
    }

</style>
