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
        <h2>Oud Wachtwoord</h2>
        <div class="forgot">
        <x-form-format-key>
            <input type="password" name="old password" placeholder="Voer je oude wachtwoord in" class="form-input">
        </x-form-format-key>
        </div>
        <h2>Nieuw Wachtwoord</h2>
        <x-form-format-key>
            <input type="password" name="new password" placeholder="Voer je nieuwe wachtwoord in" class="form-input">
        </x-form-format-key>

        <h2>Herhaal Nieuw Wachtwoord</h2>
        <x-form-format-key>
            <input type="password" name="confirmed new password" placeholder="Herhaal je nieuwe wachtwoord" class="form-input">
        </x-form-format-key>

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
        gap: 5rem;
        margin-left: 5rem;
        margin-right: 5rem;

    }

    .reset {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        max-width: 500px;
        margin: 0 auto;
        padding: 2rem;
    }

    .reset h2 {
        font-size: 1.2rem;
        text-align: center;
        margin-bottom: 0.5rem;
    }

    .form-input {
        width: 100%; /* Make input take up full width of container */
        max-width: 300px; /* Limit input field width */
        margin-bottom: 4rem; /* Space between fields */
        font-size: 1rem; /* Adjust font size */
        border-radius: 5px; /* Add border radius for rounded corners */
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.1); /* Add shadow effect */

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


</style>
