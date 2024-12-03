<nav class="navbar bg-white flex items-center justify-between p-4 shadow-md">

    <div class="flex items-center" style="flex-shrink: 0;">
        <div class="relative group">
            <svg xmlns="http://www.w3.org/2000/svg" width="44.52" height="31.347" viewBox="0 0 44.52 31.347">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                            stroke: #b20060;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 6px; /* Thicker lines for the hamburger icon */
                        }
                    </style>
                </defs>
                <path id="Icon_feather-menu" data-name="Icon feather-menu" class="cls-1" d="M4.5,22.173H44.02M4.5,9H44.02M4.5,35.347H44.02" transform="translate(-2 -6.5)"/>
            </svg>
        </div>
    </div>

    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }



        .navbar .flex {
            margin-left: 0;
        }

        .navbar > a {
            flex-grow: 1;
        }

        .navbar > div {
            flex-shrink: 0;
        }

        /* Align hamburger icon with the logo */
        .navbar > div > .relative {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40px; /* Same height as the logo */
        }

        .relative svg {
            height: 65px; /* Adjust the height of the hamburger icon */
            width: auto;
            display: block;  /* Ensures the SVG fits without stretching */
            padding-right: 2rem;

        }
    </style>
</nav>
