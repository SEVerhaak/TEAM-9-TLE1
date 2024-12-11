<x-template :selected="1"></x-template>

<style>


    h1 {
        /*font-size: 3rem;*/
        margin-bottom: 1vh;
        font-weight: lighter;

    }

    .header-text {
        font-size: 1.5rem;
        font-weight: bolder;
        margin-bottom: 2vh;
        margin-left: 1vh;
    }

    .header-div {

        color: black;
        text-align: center;
        margin-top: 15vh;
    }



    .wrapper {
        align-content: center;
        margin-top: 0vh;
        margin-bottom: 0vh;
    }

    .result-container {
        max-width: 90%;
        background-color: #e5f7ed;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        margin: 2rem 1rem;
        margin-top: 1rem;
        border-radius: 0 30px 30px 30px;
    }

    .result-container p {
        margin: 0.25rem 0;
        font-size: large;
    }

    .more-info {
        width: 100%;

        background-color: #00ad5d;
        margin: 1rem 1rem 0 0;
        border: none;
        color: white;
        padding: 1rem;
        border-radius: 0 15px 15px 15px;
    }

    .more-info-red {
        width: 100%;

        background-color: #bf212e;
        margin: 1rem 1rem 0 0;
        border: none;
        color: white;
        padding: 1rem;
        border-radius: 0 15px 15px 15px;
    }
    .more-info-yellow {
        width: 100%;

        background-color: #faee00;
        margin: 1rem 1rem 0 0;
        border: none;
        color: white;
        padding: 1rem;
        border-radius: 0 15px 15px 15px;
    }

    .more-info a {
        color: white;
        font-size: large;
        font-weight: bold;
        font-family: "Radikal Trial";
        text-decoration: none;
    }

    p {
        margin: 0;
    }

    .text-icon-content-container{
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
    }

    .bericht {
        display: flex;
        justify-content: center;
    }

    .bericht a {
        margin-right: 1vh;
    }

    .bericht-werkgever {
        border-radius: 0 15px 15px 15px;
        background-color: white;
        filter: drop-shadow(5px 5px 10px rgba(0, 0, 0, 0.23));

    }
    .bericht-werkgever p {
        font-size: small;
        padding-top: 2vh;
        padding-bottom: 2vh;
        padding-left: 1vh;
        padding-right: 3vh;
    }

    .aangenomen {
        display: flex;
        justify-content: center;
        align-content: center;
    }

    .aangenomen svg {
        margin-top: 2.5vh;
        margin-left: 0.5vh;
    }
</style>

<div class="header-div">
    <h1 class="header-text">Aanmeldingsdetails</h1>
</div>

<section class="wrapper">
    <div class="result-container">
        <h2>Teamleider Magazijn</h2>
        <div class="text-icon-content-container">
            <x-icon-building-svg>

            </x-icon-building-svg>
            <p>Green industries</p>
        </div>
        <div class="text-icon-content-container">
            <x-icon-map-svg>

            </x-icon-map-svg>
            <p>Rotterdam, Charlois</p>
        </div>
        <div class="text-icon-content-container">
            <x-icon-clock-svg>

            </x-icon-clock-svg>
            <p>32 Uur per week</p>
        </div>
        <div class="text-icon-content-container">
            <x-icon-money-svg>

            </x-icon-money-svg>
            <p>4400 Euro (Per maand)</p>
        </div>
        <h2>Bericht werkgever</h2>
        <div class="bericht-werkgever">
            <p>Eerste werkdag 12 december 10:00. We verwachten je op de Juliakade 29b. Voor vragen kunt u contact opnemen via Open Hiring! Tot dan!</p>
        </div>


        <div class="aangenomen">
            <h2>Aangenomen</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="28.5" height="28.5" viewBox="0 0 28.5 28.5">
                <path id="Icon_fa-solid-circle-check" data-name="Icon fa-solid-circle-check" fill="black" d="M14.25,28.5A14.25,14.25,0,1,0,0,14.25,14.25,14.25,0,0,0,14.25,28.5Zm6.29-16.866-7.125,7.125a1.33,1.33,0,0,1-1.887,0L7.966,15.2a1.334,1.334,0,0,1,1.887-1.887l2.616,2.616,6.179-6.184a1.334,1.334,0,1,1,1.887,1.887Z"/>
            </svg>
        </div>



@if($application->application_stage == 0)
            <button class="more-info-yellow" onclick="">
        @elseif ($application->application_stage == 1)
                    <button class="more-info" onclick="">
                @elseif ($application->application_stage == 2)
                            <button class="more-info-red" onclick="">
@endif

            <div class="bericht">
                <a href="">Stuur een bericht <br>
                    naar de werkgever</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="39.67" height="39.67" viewBox="0 0 39.67 39.67">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #fff;
                            }
                        </style>
                    </defs>
                    <path id="Icon_fa-solid-envelope-open-text" data-name="Icon fa-solid-envelope-open-text" class="cls-1" d="M16.689,7.438H7.438V21.183L.015,15.69a4.956,4.956,0,0,1,1.991-3.549L3.719,10.87V7.438A3.72,3.72,0,0,1,7.438,3.719h5.935L17.239.86a4.349,4.349,0,0,1,2.6-.86,4.393,4.393,0,0,1,2.6.852L26.3,3.719h5.935a3.72,3.72,0,0,1,3.719,3.719V10.87l1.712,1.271a4.956,4.956,0,0,1,1.991,3.549l-7.423,5.493V7.438ZM0,34.711V18.758l16.86,12.49a5.019,5.019,0,0,0,2.975.984,4.967,4.967,0,0,0,2.975-.984l16.86-12.49V34.711a4.963,4.963,0,0,1-4.959,4.959H4.959A4.963,4.963,0,0,1,0,34.711ZM13.636,12.4h12.4a1.24,1.24,0,0,1,0,2.479h-12.4a1.24,1.24,0,0,1,0-2.479Zm0,4.959h12.4a1.24,1.24,0,0,1,0,2.479h-12.4a1.24,1.24,0,0,1,0-2.479Z"/>
                </svg>
            </div>

        </button>
    </div>
</section>

