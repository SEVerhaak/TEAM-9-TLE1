<style>
    a {
        text-decoration: none;
        color: inherit;
    }

    h1 {
        /*font-size: 3rem;*/
        margin-bottom: 1vh;
        font-weight: lighter;

    }

    .header-text {
        font-size: 1.5rem;
        font-weight: bolder;
        margin-bottom: 2vh;


    }

    .header-div {

        color: black;
        text-align: center;
        margin-top: 15vh;
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
        align-items: center;
    }

    /*.transparent-button {*/
    /*    margin-top: 0vh;*/
    /*}*/
    /*.transparent-button-2 {*/
    /*    margin-top: 2vh;*/
    /*}*/

</style>

<x-template selected="2">

</x-template>

<div class="header-div">
    <h1 class="header-text">Registratie werkzoekende <br>
        Stap 1 van 3</h1>
</div>

<div class="wrapper">
    <style>
        /* route('register.step1')
        route('register.storeStep1')}} */

    </style>
    <form method="POST" onsubmit="return verifyInput()" action="{{route('register.storeStep1')}}">
        @csrf <!-- Include CSRF token for security -->
        <div>
            <h2>E-mail</h2>
            <p style="margin: 0; color: red;" id="error-mail"></p>
            @error('email')
            <p style="margin: 0; color: red;" id="error-mail">{{ $message }}</p>
            @enderror
            <x-form-format>
                <input type="text" name="email" placeholder="example@email.com" class="form-input">
            </x-form-format>
        </div>
        <div>
            <h2>Wachtwoord</h2>
            <p style="margin: 0; color: red;" id="error-password"></p>
            @error('password')
            <p style="margin: 0; color: red;" id="error-mail">{{ $message }}</p>
            @enderror
            <x-form-format-key>
                <input type="password" name="password" placeholder="Voer je wachtwoord in" class="form-input">
            </x-form-format-key>
        </div>
        <div>
            <h2>Herhaal wachtwoord</h2>
            <p style="margin: 0; color: red;" id="error-repeat-password"></p>
            <x-form-format-key>
                <input type="password" name="password-repeat" placeholder="Herhaal je wachtwoord" class="form-input">
            </x-form-format-key>
        </div>

        <x-info-and-buttons>
            Persoonlijke informatie wordt
            <br>
            niet gedeeld met de werkgevers!
        </x-info-and-buttons>
        <div class="buttons">
            <div>
                <a class="transparent-button" href="{{url()->previous()}}">Terug</a>
            </div>
            <div>
            </div>
            <div>

                <button type="submit" id="test" class="transparent-button-2">Volgende stap</button>
            </div>
        </div>
    </form>
    <script>

        let email;
        let password;
        let passwordRepeat;
        let testButton;

        function init() {
            // Get input elements
            email = document.getElementsByName('email')[0];
            password = document.getElementsByName('password')[0];
            passwordRepeat = document.getElementsByName('password-repeat')[0];

            // Check for saved data in localStorage
            const savedEmail = localStorage.getItem('email');
            const savedPassword = localStorage.getItem('password');

            // If data exists, pre-fill the inputs
            if (savedEmail) {
                email.value = savedEmail;
            }

            if (savedPassword) {
                password.value = savedPassword;
                passwordRepeat.value = savedPassword;
            }
        }

        function verifyInput() {
            const emailValue = email.value.trim();
            const passwordValue = password.value;
            const passwordRepeatValue = passwordRepeat.value;

            let isValid = true;

            // Clear previous error messages
            document.getElementById('error-mail').innerText = "";
            document.getElementById('error-password').innerText = "";
            document.getElementById('error-repeat-password').innerText = "";

            // Validate email format
            if (!/^\S+@\S+\.\S+$/.test(emailValue)) {
                if (emailValue === '') {
                    document.getElementById('error-mail').innerText = "Vul een E-Mail adres in";
                } else {
                    document.getElementById('error-mail').innerText = "Voer een geldig E-Mail adres in";
                }
                isValid = false;
            }

            // Validate password length
            if (passwordValue.length < 8) {
                if (passwordValue === '') {
                    document.getElementById('error-password').innerText = "Vul een wachtwookrd in";
                } else {
                    document.getElementById('error-password').innerText = "Wachtwoord vereist minimaal 8 karakters";
                }
                isValid = false;
            }
        }
    </script>
</div>
