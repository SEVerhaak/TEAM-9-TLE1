<body>

<div class="wrapper">
    <!-- section 1 -->
    <section class="section-1">
        <!-- title -->
        <h1 class="title">Werken Voor Wie <br> Wil Werken</h1>
        <!-- main image -->
        <img class="top-image" src="../images/main_image.png">

        <a href="{{ route('register.choice') }}">
            <x-main-button-with-logo>
                <h3 class="button-title">Geïnteresseerd? Schrijf je in!</h3>
            </x-main-button-with-logo>
        </a>

        <div class="how-it-works-container">
            <div class="question-mark">?</div>
            <h2>Hoe werkt het?</h2>
            <p>
                Met Open Hiring heeft iedereen een eerlijke kans op een baan. Wie wil en kan werken, kan zo aan de slag.
            </p>
            <p>
                Zonder sollicitatiegesprek, zonder brief, zonder vragen.
            </p>
            <p>
                Open Hiring draait namelijk niet om diploma’s, maar om mensen.
            </p>
        </div>
    </section>

    <style>
        .important-text {
            font-weight: bold;
        }
    </style>

    <hr>
    <!-- section 2 -->

    <section class="section-2">
        <h2 class="secondary-title">Ons proces in 3 stappen!</h2>
        <div class="step-container">
            <h1>1</h1>
            <p>
                Meld je aan bij Open Hiring en voeg je relevante informatie toe aan je account!
            </p>
        </div>

        <div class="step-container alt-colours">
            <p>
                Reageer op openstaande vacatures, compleet anoniem en zonder vooroordelen!
            </p>
            <h1>2</h1>
        </div>

        <div class="step-container">
            <h1>3</h1>
            <p>
                Je ontvangt een bericht als je bent aangenomen met instructies om het proces af te ronden!
            </p>
        </div>

    </section>

    <hr>

    <!-- section 3 -->

    <section class="section-3">
        <h2 class="secondary-title">Onze partners</h2>
        <div class="scrollmenu">
            <div class="scroll-item-container">
                <img src="../images/placeholder_img.png">
                <p>Bedrijf 1</p>
            </div>
            <div class="scroll-item-container">
                <img src="../images/placeholder_img.png">
                <p>Bedrijf 2</p>
            </div>
            <div class="scroll-item-container">
                <img src="../images/placeholder_img.png">
                <p>Bedrijf 3</p>
            </div>
            <div class="scroll-item-container">
                <img src="../images/placeholder_img.png">
                <p>Bedrijf 4</p>
            </div>
        </div>
    </section>

    <hr>

    <!-- section 4 -->

    <section class="section-4">

        <h2 class="secondary-title">
            “Voor ons is het eigenlijk heel
            logisch om met Open Hiring
            te werken”
        </h2>

        <p class="secondary-title" style="font-weight: lighter">- Green Logistics</p>
        <x-backdrop-index style="z-index: 8">
        </x-backdrop-index>
        <img class="review-image" src="../images/man1.png">
        <div class="review-backdrop">
            <p class="bold no-margin">Rob Jansen <br> Directeur Chain Logistic </p>
            <p class="light no-margin">Directeur Chain Logistics</p>
            <p>“Je ontdekt dan pas met hoeveel vooroordelen je rondloopt”</p>
            <x-main-button-no-logo><p class="bold">Lees het hele verhaal!</p></x-main-button-no-logo>
            <x-pill-with-text-and-image>
                <p style="margin: 0.75rem 0.25rem">Werkgever</p>
            </x-pill-with-text-and-image>
        </div>
        <a href="{{ route('register.choice') }}" style="
    position: relative;
    top: -25rem;
">
            <x-main-button-with-logo>
                <h3 class="button-title">Overtuigd? Schrijf je in!</h3>
            </x-main-button-with-logo>
        </a>
    </section>
</div>

</body>

<footer style="margin-top: -25rem;">
    <div class="footer-wrapper">
        <div>
            <h3 class="footer-title">Voor werkzoekenden</h3>
            <div class="footer-text-wrapper">
                <a>Vindt een baan</a>
                <a>Veelgestelde vragen</a>
            </div>
        </div>
        <div>
            <h3 class="footer-title">Voor werkgevers</h3>
            <div class="footer-text-wrapper">
                <a>Spelregels</a>
                <a>Veelgestelde</a>
            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div>
            <h3 class="footer-title">Over Open Hiring</h3>
            <div class="footer-text-wrapper">
                <a>Ontstaan</a>
                <a>Privacybeleid</a>
            </div>
        </div>
        <div>
            <h3 class="footer-title">Volg ons op</h3>
            <div class="footer-text-wrapper">
                <a>LinkedIn</a>
                <a>Instagram</a>
            </div>
        </div>

    </div>
</footer>
<div class="spacer">

</div>

<x-template :selected="0">

</x-template>
