@props(['selected' => $selected])

<div class="bottom-menu">
    <div class="home button-container" id="home">
        <x-home-menu-icon-svg
            :colour="$selected === 0 ? '#B20060' : 'black'"
            class="icon">
        </x-home-menu-icon-svg>
        <h4 class="menu-text">Thuis</h4>
    </div>
    <div class="search button-container" id="search">
        <x-icon-receipt-svg
            :colour="$selected === 1 ? '#B20060' : 'black'"
            class="icon">
        </x-icon-receipt-svg>
        <h4 class="menu-text">Vacatures</h4>
    </div>
    <div class="account button-container" id="settings">
        <x-icon-gear-svg
            :colour="$selected === 2 ? '#B20060' : 'black'"
            class="icon">
        </x-icon-gear-svg>
        <h4 class="menu-text-smaller">Instellingen</h4>
    </div>
</div>
<script>
    let button = document.getElementById('home');
    let button2 = document.getElementById('search');
    let button3 = document.getElementById('settings');

    let selected =  {{$selected}};

    if (selected !== '' && selected !== null && selected !== '-1'){
        try{
            let selectedButton = document.getElementsByClassName('button-container')[parseInt(selected)];
            selectedButton.classList.add('selected')
        }catch (e){
            console.error('invalid selected index: ' + e);
        }
    }


    button.addEventListener('click', redirect1);
    button2.addEventListener('click', redirect2);
    button3.addEventListener('click', redirect3);


    function redirect1(){
        window.location.href = "{{route('home')}}"
    }

    function redirect2(){
        window.location.href = "{{route('vacancy-select')}}"
    }

    function redirect3(){
        window.location.href = "{{route('open_vacancies.index')}}"
    }

</script>
<style>
    body {
        margin: 0;
    }

    .bottom-menu {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        border-radius: 30px 30px 0 0;
        background-color: white;
        max-height: 25vw;
        min-height: 25vw;
        display: flex;
        justify-content: space-around;
        box-shadow: 0 -4px 60px rgba(0, 0, 0, 0.3);
        z-index: 1000;
    }

    .button-container {
        min-width: 20%;
        max-width: 20%;
        min-height: 20%;
        max-height: 20%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-evenly;
        padding: 0.5rem;
        margin: 0.5rem;
    }

    .selected {
        background-color: rgba(214, 154, 186, 0.33);
        border-radius: 15px;
        color: #B20060;
        stroke: #b4085c !important;
    }

    .menu-text {
        font-size: larger;
        margin: 0;
        font-weight: normal;
    }

    .menu-text-smaller{
        font-size: large;
        margin: 0;
        font-weight: normal;
    }

</style>
