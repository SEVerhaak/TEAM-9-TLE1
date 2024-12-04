<x-template>

</x-template>
<style>
    h1 {
        font-size: 3rem;
        margin-bottom: 1vh;
        font-weight: lighter;
    }

    .header-text {
        font-size: 3.8rem;
        font-weight: bolder;
        margin-bottom: 5vh;

    }

    .header-div {

        color: black;
        text-align: center;
        padding-top: 0vh;
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
        margin-top: 0vh;

        gap: 1vh;

        font-size: 3.5rem;
    }

    .checkbox-container input[type="checkbox"] {
        transform: scale(4.5); /* Adjust scale for size */
        margin-right: 2vh; /* Space between checkbox and text */

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

        font-size: 3rem;
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
        font-size: 3rem;
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

        font-size: 3rem;
        font-weight: bold;
        margin-top: 1vh;
        text-decoration: underline;
    }
    .liever-niet p {
        color: #b4085c;

        font-size: 2.0rem;
        margin-top: -1vh;
    }

    .transparent-button {
        margin-top: 0vh;
    }
    .transparent-button-2 {
        margin-top: 0vh;
    }
</style>

<div class="header-div">
    <h1 class="header-text">Registratie werkzoekende <br>
    Stap 3 van 3 (optioneel)</h1>
</div>

<div class="wrapper">
    <form method="POST" action="{{ route('register.storeStep3') }}">
        @csrf <!-- Include CSRF token for security -->

        <!-- Checkbox Inputs -->
        <div class="checkbox-container">
            <label>
                <input type="checkbox" name="diploma" {{ session('diploma') ? 'checked' : '' }}>
                Middelbare school diploma
            </label>
            <label>
                <input type="checkbox" name="car_license" {{ session('car_license') ? 'checked' : '' }}>
                Rijbewijs auto
            </label>
            <label>
                <input type="checkbox" name="truck_license" {{ session('truck_license') ? 'checked' : '' }}>
                Rijbewijs vrachtwagen
            </label>
            <label>
                <input type="checkbox" name="forklift_license" {{ session('forklift_license') ? 'checked' : '' }}>
                Rijbewijs vorkheftruck
            </label>
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

        <!-- Info and Buttons -->
        <x-info-and-buttons>
            Vul deze gegevens in om een <br>
            baan te vinden die bij jou past!
        </x-info-and-buttons>

        <div class="buttons">
            <div>
                <form method="GET" action="{{ route('register.step2') }}">
                    <button class="transparent-button">Terug</button>
                </form>
            </div>
            <div></div>
            <div>

                <button type="submit" class="transparent-button-2">Volgende stap</button>
            </div>
        </div>
    </form>

        <div class="liever-niet">
            <h2>Ik vul deze gegevens liever niet in</h2>
            <p>U kunt deze gegevens altijd later toevoegen</p>
        </div>

</div>

