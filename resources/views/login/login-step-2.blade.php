<x-template :selected='-1'>

</x-template>
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

<div class="header-div">
    <h1 class="header-text">Registratie werkzoekende <br>
        Stap 2 van 3</h1>
</div>

<div class="wrapper">
    <form method="POST" onsubmit="return verifyInput()" action="{{ route('register.storeStep2') }}">
        @csrf <!-- Include CSRF token for security -->
        <div>
            <h2>Voornaam</h2>
            <p style="margin: 0; color: red;" id="error-first-name"></p>
            @error('firstName')
            <p style="margin: 0; color: red;" id="error-first-name-server">{{ $message }}</p>
            @enderror
            <x-form-format-user-pen>
                <input type="text" name="first_name" placeholder="Voornaam" class="form-input">
            </x-form-format-user-pen>
        </div>
        <div>
            <h2>Achternaam</h2>
            <p style="margin: 0; color: red;" id="error-last-name"></p>
            @error('firstName')
            <p style="margin: 0; color: red;" id="error-last-name-server">{{ $message }}</p>
            @enderror
            <x-form-format-user-pen>
                <input type="text" name="last_name" placeholder="Achternaam" class="form-input">
            </x-form-format-user-pen>

        </div>

        <div>
            <h2>Geboortedatum</h2>
            <p style="margin: 0; color: red;" id="error-date"></p>
            @error('firstName')
            <p style="margin: 0; color: red;" id="error-date-server">{{ $message }}</p>
            @enderror
            <x-form-format-calender>
                <input type="date" name="birth_date" placeholder="01-01-1990" class="form-input">
            </x-form-format-calender>

        </div>


        <x-info-and-buttons>
            Persoonlijke informatie wordt
            <br>
            niet gedeeld met de werkgevers!
        </x-info-and-buttons>
        <div class="buttons">
            <div>

                <a class="transparent-button" href="{{route("register.step1")}}">Terug</a>

            </div>

            <div>

            </div>
            <div>
                <button type="submit" class="transparent-button-2">Volgende stap</button>
            </div>
        </div>
    </form>
    <script>
        let firstName;
        let lastName;
        let date;

        function init() {
            // Get input elements
            firstName = document.getElementsByName('first_name')[0];
            lastName = document.getElementsByName('last_name')[0];
            date = document.getElementsByName('birth_date')[0];

            // Check for saved data in localStorage
            const savedFirstName = localStorage.getItem('firstName');
            const savedLastName = localStorage.getItem('lastName');
            const savedDate = localStorage.getItem('date');


            // If data exists, pre-fill the inputs
            if (savedFirstName) {
                firstName.value = savedFirstName;
            }

            if (savedLastName) {
                lastName.value = savedLastName;
            }

            if (savedDate) {
                date.value = savedDate;
            }
        }

        function verifyInput() {

            let firstNameValue = firstName.value;
            let lastNameValue = lastName.value;
            let dateValue = date.value;

            let isValid = true;

            // Clear previous error messages

            document.getElementById('error-first-name').innerText = "";
            document.getElementById('error-last-name').innerText = "";
            document.getElementById('error-date').innerText = "";

            // Validate email format
            if (firstNameValue === '') {
                document.getElementById('error-first-name').innerText = "Vul een voornaam in";
                isValid = false;
            }

            if (lastNameValue === '') {
                document.getElementById('error-last-name').innerText = "Vul een achternaam in";
                isValid = false;
            }


            // Date validation
            if (dateValue === '') {
                isValid = false;
                document.getElementById('error-date').innerText = "Vul een datum in";
            } else {
                const birthDate = new Date(dateValue);
                const today = new Date();
                const sixteenYearsAgo = new Date(today.getFullYear() - 16, today.getMonth(), today.getDate());

                if (birthDate > sixteenYearsAgo) {
                    isValid = false;
                    console.log('birthday too young')
                    document.getElementById('error-date').innerText = "U moet minimaal 16 jaar oud zijn";
                } else{
                    console.log('succes date')
                }
            }

            localStorage.setItem('firstName', firstNameValue);
            localStorage.setItem('lastName', lastNameValue);
            localStorage.setItem('date', dateValue);

            if (isValid) {
                console.log('Succes');
            }

            // Return false to prevent form submission if validation fails
            return isValid;
        }


        window.onload = init;
    </script>

</div>


