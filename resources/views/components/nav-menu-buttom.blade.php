<div class="bottom-menu">
    <div class="home selected button-container">
        <x-home-menu-icon-svg class="icon">

        </x-home-menu-icon-svg>
        <h4 class="menu-text">Thuis</h4>
    </div>
    <div class="search button-container">
        <x-search-menu-icon-svg class="icon">

        </x-search-menu-icon-svg>
        <h4 class="menu-text">Zoeken</h4>
    </div>
    <div class="account button-container">
        <x-account-menu-icon-svg class="icon">

        </x-account-menu-icon-svg>
        <h4 class="menu-text">Account</h4>
    </div>
</div>

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
    }

    .icon {

    }

    .menu-text {
        font-size: larger;
        margin: 0;
        font-weight: normal;
    }
</style>
