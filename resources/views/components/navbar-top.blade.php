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
            position: fixed; /* Keeps the navbar at the top */
            top: 0; /* Aligns it to the top of the page */
            left: 0;
            right: 0;
            width: 100%; /* Ensures it spans the full width */
            z-index: 1000; /* Ensures it stays above other content */
            background-color: white; /* Optional: Specify background color explicitly */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add shadow for a floating effect */
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
