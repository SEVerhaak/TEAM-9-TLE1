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
        padding-top: 7vh;
    }
    h1 {
        margin-left: 1vh;
    }
    .wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /*.noti  {*/

    /*    margin-top: 8vh;*/



    /*    width: 80vw;*/
    /*    height: 8vh;*/
    /*    background-color: #f9ee00;*/

    /*    border-radius: 1vw 10vw 10vw 10vw;*/

    /*    display: flex;*/

    /*}*/

    /*.noti div:nth-child(1) {*/
    /*    position: relative;*/
    /*    top: 25%;*/
    /*    left: 5%;*/
    /*}*/
    /*.noti div:nth-child(2) {*/
    /*    font-size: 1.5rem;*/
    /*    font-weight: lighter;*/
    /*    position: relative;*/
    /*    top: 8%;*/
    /*    left: 10%;*/
    /*}*/

    /*.buttons {*/
    /*    display: flex;*/
    /*    align-content: center;*/

    /*    margin-top: 5vh;*/
    /*}*/

    /*.buttons div:nth-child(1) {*/
    /*    background-color: #f9ee00;*/
    /*    width: 30vw;*/
    /*    height: 6vh;*/

    /*    border-radius: 1vw 10vw 10vw 10vw;*/


    /*}*/

    /*.buttons div:nth-child(2) {*/

    /*    width: 10vw;*/
    /*    height: 6vh;*/


    /*}*/

    /*.buttons div:nth-child(3) {*/
    /*    background-color: #b4085c;*/
    /*    width: 40vw;*/
    /*    height: 6vh;*/

    /*    border-radius: 1vw 10vw 10vw 10vw;*/


    /*}*/
</style>

<div class="header-div">
    <h1 class="header-text">Registratie werkzoekende <br>
    Stap 1 van 3</h1>
</div>

<div class="wrapper">

    <div>
        <h1>E-mail</h1>
        <x-form-format>
            <input type="text" placeholder="example@email.com" class="form-input">
        </x-form-format>

    </div>
    <div>
        <h1>Wachtwoord</h1>
        <x-form-format-key>
            <input type="text" placeholder="****************" class="form-input">
        </x-form-format-key>

    </div>

    <div>
        <h1>Herhaal wachtwoord</h1>
        <x-form-format-key>
            <input type="text" placeholder="****************" class="form-input">
        </x-form-format-key>

    </div>



    <x-info-and-buttons></x-info-and-buttons>

</div>

<x-template>

</x-template>
