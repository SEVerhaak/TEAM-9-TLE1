<style>

    .transparent-button {
        position: relative;

        top: 30%;
        left: 20%;

        background-color: transparent; /* Makes the button background transparent */

        border: none;

        font-size: 2.5rem; /* Set the font size */
        font-weight: bolder;

        transition: all 0.3s ease; /* Smooth transition for hover effect */
    }

    .transparent-button-2 {
        position: relative;

        top: 30%;
        left: 15%;

        background-color: transparent; /* Makes the button background transparent */

        border: none;

        font-size: 2.5rem; /* Set the font size */
        font-weight: bolder;
        color: white;

        transition: all 0.3s ease; /* Smooth transition for hover effect */
    }



    .noti  {

    margin-top: 8vh;



    width: 80vw;
    height: 8vh;
    background-color: #f9ee00;

    border-radius: 1vw 10vw 10vw 10vw;

    display: flex;

    }

    .noti div:nth-child(1) {
    position: relative;
    top: 25%;
    left: 5%;
    }
    .noti div:nth-child(2) {
    font-size: 1.5rem;
    font-weight: lighter;
    position: relative;
    top: 8%;
    left: 10%;
    }

    .buttons {
    display: flex;
    align-content: center;

    margin-top: 5vh;
    }

    .buttons div:nth-child(1) {
    background-color: #f9ee00;
    width: 30vw;
    height: 6vh;

    border-radius: 1vw 10vw 10vw 10vw;


    }

    .buttons div:nth-child(2) {

    width: 8vw;
    height: 6vh;


    }

    .buttons div:nth-child(3) {
    background-color: #b4085c;
    width: 44vw;
    height: 6vh;

    border-radius: 1vw 10vw 10vw 10vw;


    }
</style>


<div class="noti">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 36 36">
            <path id="Icon_fa-solid-circle-info" data-name="Icon fa-solid-circle-info"
                  d="M18,36A18,18,0,1,0,0,18,18,18,0,0,0,18,36ZM15.188,23.625h1.688v-4.5H15.188a1.688,1.688,0,0,1,0-3.375h3.375a1.683,1.683,0,0,1,1.688,1.688v6.188h.563a1.688,1.688,0,0,1,0,3.375H15.188a1.688,1.688,0,0,1,0-3.375ZM18,9a2.25,2.25,0,1,1-2.25,2.25A2.25,2.25,0,0,1,18,9Z"/>
        </svg>

    </div>
    <div>
        <h2>
            {{ $slot }}
        </h2>
    </div>

</div>

<div class="buttons">
    <div>
        <button class="transparent-button">Terug</button>
    </div>
    <div>

    </div>
    <div>
        <button class="transparent-button-2">Volgende stap</button>
    </div>
</div>
