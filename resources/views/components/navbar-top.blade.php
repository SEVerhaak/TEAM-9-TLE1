<nav class="navbar bg-white flex items-center justify-between p-4 shadow-md">

    <a href="/" class="flex items-center" style="flex-grow: 1;">
        <img src="{{ asset('images/logo-oh-png.png') }}" alt="Logo" class="h-10" id="logo">
    </a>

    <div class="flex items-center" style="flex-shrink: 0;">
        <x-drop-down-nav-top />
    </div>

    <style>

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo {
            height: 150px;
            padding-left: 2rem;
            padding-top: 1rem;
        }

        .menu-icon {
            height: 60px;
            width: auto;
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
    </style>
</nav>
