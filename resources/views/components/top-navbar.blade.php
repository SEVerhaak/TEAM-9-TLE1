<div class="topNavContainer">
    <div class="logo">
        <img src="{{ asset('images/logo-oh-png.png') }}" alt="Logo" class="h-10" id="logo">
    </div>
    <div class="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" width="44.52" height="31.347" viewBox="0 0 44.52 31.347">
            <defs>
                <style>
                    .cls-1 {
                        fill: none;
                        stroke: #b20060;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 5px;
                    }
                </style>
            </defs>
            <path id="Icon_feather-menu" data-name="Icon feather-menu" class="cls-1" d="M4.5,22.173H44.02M4.5,9H44.02M4.5,35.347H44.02" transform="translate(-2 -6.5)"/>
        </svg>
    </div>
</div>

<style>
    .topNavContainer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2rem;
    }

    .logo {
        display: flex;
    }

    .logo img {
        height: 9rem;

    }

    .dropdown {
        display: flex;
    }

    .dropdown svg {
        width: 9rem;
        height: 9rem;
    }
</style>
