<x-template :selected="2">

</x-template>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Instellingen</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 40vh;
            font-family: Arial, sans-serif;
            margin-top: 2rem;
            max-width: 90%;
            margin: auto;
        }

        .container h1 {
            text-align: center;
            font-size: 16px;
            color: #000;
            margin: 20px 0;
            font-weight: bolder;
        }

        .container .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px;
            gap: 1.8rem;

        }

        .container .button {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 24rem;
            padding: 0.8rem;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            font-weight: bolder;
            text-decoration: none;
            cursor: pointer;
            color: #fff;
            gap: 2rem;
        }

        .container .button-container .button:nth-child(-n+4) {
            border-top-left-radius: 0;
            justify-content: center;
        }

        .container .button-container .logout {
            border-top-right-radius: 0;
        }

        .container .button svg {
            height: 2.6rem;
            width: auto;
            margin-right: 10px;
            object-fit: contain;

        }

        .container .account {
            background-color: #b6004c;
        }

        .container .preferences {
            background-color: #b6004c;
        }

        .container .support {
            background-color: #b6004c;
        }

        .container .change-password {
            background-color: #ffe100;
            color: #000;
        }

        .container .logout {
            background-color: #ffe100;
            color: #000;
            justify-content: center;
            margin-top: 4rem;
        }

        .button logout{
;
        }

        @media (max-width: 400px) {
            .container .button {
                width: 95%;
            }
        }

        .container span{
            font-size: larger;
        }

    </style>
</head>
<body>
<h1 style="text-align: center">Instellingen</h1>

<div class="container">
    <div class="button-container">
        <div class="button account" id="account">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 82.008 66.446">
                <path id="Icon_fa-solid-user-check" class="cls-1" data-name="Icon fa-solid-user-check" d="M12.459,16.611A16.611,16.611,0,1,1,29.07,33.223,16.611,16.611,0,0,1,12.459,16.611ZM0,62.591A23.135,23.135,0,0,1,23.139,39.452H35A23.135,23.135,0,0,1,58.14,62.591a3.855,3.855,0,0,1-3.854,3.854H3.854A3.855,3.855,0,0,1,0,62.591ZM81.111,22.971,64.5,39.582a3.1,3.1,0,0,1-4.4,0l-8.306-8.306a3.111,3.111,0,0,1,4.4-4.4l6.1,6.1L76.7,18.558a3.111,3.111,0,0,1,4.4,4.4Z"/>
            </svg>

            <span>Account</span>
        </div>

        <div class="button preferences" id="preferences">
            <svg xmlns="http://www.w3.org/2000/svg" width="40.484" height="34.162" viewBox="0 0 40.484 34.162">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <path id="Icon_fa-solid-list-check" data-name="Icon fa-solid-list-check" class="cls-1" d="M12.026,2.741a1.892,1.892,0,0,1,.142,2.68L6.476,11.746a1.866,1.866,0,0,1-1.36.625,1.94,1.94,0,0,1-1.392-.553L.554,8.655a1.914,1.914,0,0,1,0-2.688,1.89,1.89,0,0,1,2.68,0L4.981,7.714,9.338,2.875a1.892,1.892,0,0,1,2.68-.142Zm0,12.65a1.892,1.892,0,0,1,.142,2.68L6.476,24.4a1.866,1.866,0,0,1-1.36.625,1.94,1.94,0,0,1-1.392-.553L.554,21.3a1.9,1.9,0,1,1,2.68-2.68l1.747,1.747,4.356-4.839a1.892,1.892,0,0,1,2.68-.142Zm5.685-8.08a2.527,2.527,0,0,1,2.53-2.53h17.71a2.53,2.53,0,1,1,0,5.06H20.241A2.527,2.527,0,0,1,17.711,7.311Zm0,12.65a2.527,2.527,0,0,1,2.53-2.53h17.71a2.53,2.53,0,0,1,0,5.06H20.241A2.527,2.527,0,0,1,17.711,19.961Zm-5.06,12.65a2.527,2.527,0,0,1,2.53-2.53h22.77a2.53,2.53,0,1,1,0,5.06H15.181A2.527,2.527,0,0,1,12.651,32.611ZM3.8,28.816a3.8,3.8,0,1,1-3.8,3.8,3.8,3.8,0,0,1,3.8-3.8Z" transform="translate(0.004 -2.244)"/>
            </svg>

            <span>Voorkeuren</span>
        </div>

        <div class="button support" id="support">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <path id="Icon_fa-solid-circle-question" data-name="Icon fa-solid-circle-question" class="cls-1" d="M18,36A18,18,0,1,0,0,18,18,18,0,0,0,18,36ZM11.939,11.623A3.944,3.944,0,0,1,15.652,9h4.1a4.44,4.44,0,0,1,2.208,8.29l-2.271,1.3a1.688,1.688,0,0,1-3.375-.028v-.949a1.684,1.684,0,0,1,.851-1.462l3.115-1.786a1.061,1.061,0,0,0-.527-1.983h-4.1a.554.554,0,0,0-.527.373l-.028.084a1.686,1.686,0,0,1-3.178-1.125l.028-.084ZM15.75,24.75A2.25,2.25,0,1,1,18,27,2.25,2.25,0,0,1,15.75,24.75Z"/>
            </svg>

            <span>Ondersteuning</span>
        </div>

        <div class="button change-password" id="password">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36">
                <path id="Icon_fa-solid-key" data-name="Icon fa-solid-key" d="M23.625,24.75a12.351,12.351,0,1,0-11.791-8.6L.492,27.492A1.686,1.686,0,0,0,0,28.688v5.625A1.683,1.683,0,0,0,1.688,36H7.313A1.683,1.683,0,0,0,9,34.313V31.5h2.813A1.683,1.683,0,0,0,13.5,29.813V27h2.813a1.686,1.686,0,0,0,1.2-.492l2.341-2.341A12.4,12.4,0,0,0,23.625,24.75Zm2.813-18a2.813,2.813,0,1,1-2.812,2.813A2.813,2.813,0,0,1,26.438,6.75Z"/>
            </svg>
            <span>Wachtwoord wijzigen</span>
        </div>

        <div class="button logout" id="logout">
            <svg xmlns="http://www.w3.org/2000/svg" width="42.103" height="42.103" viewBox="0 0 42.103 42.103">
                <defs>
                    <style>
                        .cls-2 {
                            fill: none;
                            stroke: #000;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 6px;
                        }
                    </style>
                </defs>
                <path id="Icon_feather-log-out" data-name="Icon feather-log-out" class="cls-2" d="M16.534,40.6H8.511A4.011,4.011,0,0,1,4.5,36.592V8.511A4.011,4.011,0,0,1,8.511,4.5h8.023m14.04,28.08L40.6,22.552,30.575,12.523M40.6,22.552H16.534" transform="translate(-1.5 -1.5)"/>
            </svg>
            <span>Uitloggen</span>
        </div>
    </div>
</div>
<script>
    let account
    let preferences
    let support
    let password
    let logout

    window.onload = init;

    function init(){
        account = document.getElementById('account');
        preferences = document.getElementById('preferences')
        support = document.getElementById('support')
        password = document.getElementById('password')
        logout = document.getElementById('logout')

        account.addEventListener('click', function(){
            window.location.href = "{{route('settings.account')}}"
        })
        preferences.addEventListener('click', function(){
            window.location.href = "{{route('settings.preferences')}}"
        })
        support.addEventListener('click', function(){
            window.location.href = "{{route('settings')}}"
        })
        password.addEventListener('click', function(){
            window.location.href = "{{route('settings.password')}}"
        })
        logout.addEventListener('click', function () {
            // Create a form dynamically to send a POST request
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = "{{ route('logout') }}";

            // Add CSRF token for Laravel
            const csrfToken = document.createElement('input');
            csrfToken.type = 'hidden';
            csrfToken.name = '_token';
            csrfToken.value = "{{ csrf_token() }}";
            form.appendChild(csrfToken);

            // Append form to the body and submit
            document.body.appendChild(form);
            form.submit();
        });
    }

</script>
</body>
</html>
