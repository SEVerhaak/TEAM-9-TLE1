<nav class='navbar' id="navbarId">

    <a href="/" class="flex items-center" style="flex-grow: 1;">
        <img src="{{ asset('images/logo-oh-png.png') }}" alt="Logo" class="h-10" id="logo">
    </a>

    <div class="flex items-center" style="flex-shrink: 0;">
        <!--
        <x-hamburger-menu-svg>

        </x-hamburger-menu-svg>
        -->
    </div>

    <script>
        let header = document.getElementById('navbarId');

        //linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);

        // Add smooth transition to the header's background color
        header.style.transition = "background 0.5s ease";

        document.addEventListener('scroll', function() {
            // Get the scroll position
            let scrollPos = window.pageYOffset;
            console.log(scrollPos);
            if (scrollPos > 10) {
                //header.style.background = "rgba(255,255,255,1)";
                header.style.background = 'linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%)';
            } else {
                header.style.background = "rgba(255,255,255,0)";
            }
        });

    </script>

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
        }

        .items-center{
            margin-right: 0.75rem;
        }

        #logo {
            height: 3rem;
            margin: 0.75rem;
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
