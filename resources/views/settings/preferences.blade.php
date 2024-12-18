<x-template :selected="2">

</x-template>
<style>

    .transparent-button-1 {
        margin-top: 1rem;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 0 1rem 1rem 1rem;
        background-color: #ffe100;
        font-weight: bold;
        cursor: pointer;
        font-size: 1.45rem;
    }
    .transparent-button-2 {
        margin-top: 1rem;
        padding: 0.5rem 3rem;
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
        gap: 4rem;
        margin-top: 5rem;
    }
    a {
        text-decoration: none;
        color: inherit;
    }

    h1 {
        font-size: 1.2rem;
        margin-bottom: 1vh;
        font-weight: lighter;
    }

    .header-text {
        font-size: 2rem;
        font-weight: bolder;
        margin-bottom: 5vh;

    }

    .header-div {

        color: black;
        text-align: center;
        margin-top: 15vh;
    }

    h1 {
        margin-left: 1vh;
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .wrapper div {

    }

    .checkbox-container {
        display: flex;
        flex-direction: column;
        align-items: start;
        gap: 1vh;
        font-size: 1.3rem;
    }

    .checkbox-container input[type="checkbox"] {
        transform: scale(1.5); /* Adjust scale for size */
        margin-right: 1vh; /* Space between checkbox and text */

        margin-top: 0vh; /* Moves the checkbox upward */

    }

    .checkbox-container label {
        display: flex;
        align-items: center; /* Vertically align the checkbox with the text */
        margin-top: 0vh; /* Moves the label and checkbox upward */
    }

    .amount-hours {
        display: flex;
        flex-direction: column;
        align-items: center; /* Centers all children horizontally */
        justify-content: center; /* Centers all children vertically */
        text-align: center; /* Ensures text is centered */

        margin-bottom: -4.5vh;
    }

    .amount-hours input {
        width: 15vw;
        height: 6vh;

        font-size: 1.8rem;
        text-align: center;
        font-weight: bolder;
        border: black solid 0.1rem;
        border-radius: 0.2vh;

    }

    .amount-hours div:nth-child(2) {
        margin-top: 0vh;
        width: 100%; /* Ensures the input's parent takes full width if necessary */
        display: flex;
        justify-content: center; /* Centers the input horizontally */


    }

    .amount-hours h2 {
        margin-top: 3vh;
        font-size: 1.1rem;
        font-weight: bold;
    }

    .liever-niet {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

    }

    .liever-niet h2 {
        color: #b4085c;

        font-size: 1.3rem;
        font-weight: bold;
        margin-top: 4vh;
        text-decoration: underline;
    }


    .liever-niet p {
        color: #b4085c;

        font-size: 1.0rem;
        margin-top: -1vh;
    }

    .transparent-button-1 {
        margin-top: 0vh;
    }

    .transparent-button-2 {
        margin-top: 0vh;
    }
</style>

<div class="header-div">
    <h1 class="header-text">Voorkeuren</h1>
</div>

<div class="wrapper">
    <form method="POST" action="{{ route('settings.preferences') }}">
        @csrf <!-- Include CSRF token for security -->

        <!-- Checkbox Inputs -->
        <div class="checkbox-container">
            @foreach($certificates as $certificate)
                <label>
                    <input
                        type="checkbox"
                        name="{{ $certificate->name }}"

                        {{ in_array($certificate->id, $user->certificates->pluck('id')->toArray()) ? 'checked' : '' }}
                    >
                    {{ $certificate->name }}
                </label>
            @endforeach



        </div>

        <!-- Hours Input -->
        <div class="amount-hours">
            <div>
                <h2>Hoeveel uur per week wilt u werken?</h2>
            </div>
            <div>
                <input type="number" name="hours" id="hours" min="0" max="40" step="1" value="{{ session('hours', 32) }}">
            </div>
        </div>

    </form>
    <div class="buttonContainer">
        <button type="submit" class="transparent-button-1"><a href="{{ route('settings.index') }}">Terug</a></button>
        <button type="submit" class="transparent-button-2">opslaan</button>
    </div>


</div>


