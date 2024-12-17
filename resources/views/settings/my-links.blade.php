<x-template :selected="2">

</x-template>

<div class="header-div">
    <h1 class="header-text">Hello, {{auth()->user()->name}}</h1>
    <h2>Where would you like to go?</h2>
    <div class="container">
    <div class="button-container">
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

            <a href="{{route('dashboard')}}">Your applications</a>
        </div>
        <div class="button account" id="account">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 82.008 66.446">
                <path id="Icon_fa-solid-user-check" class="cls-1" data-name="Icon fa-solid-user-check" d="M12.459,16.611A16.611,16.611,0,1,1,29.07,33.223,16.611,16.611,0,0,1,12.459,16.611ZM0,62.591A23.135,23.135,0,0,1,23.139,39.452H35A23.135,23.135,0,0,1,58.14,62.591a3.855,3.855,0,0,1-3.854,3.854H3.854A3.855,3.855,0,0,1,0,62.591ZM81.111,22.971,64.5,39.582a3.1,3.1,0,0,1-4.4,0l-8.306-8.306a3.111,3.111,0,0,1,4.4-4.4l6.1,6.1L76.7,18.558a3.111,3.111,0,0,1,4.4,4.4Z"/>
            </svg>

            <a href="{{route('business.index')}}">Your businesses</a>
        </div>

    </div>
    </div>
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

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 40vh;
        font-family: Arial, sans-serif;
        max-width: 90%;
        margin: auto;
        margin-top: 2rem !important;
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
