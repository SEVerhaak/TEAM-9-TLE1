<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
<!-- section 1 -->
<section class="section-1">
    <!-- title -->
    <h1 class="title">Werken Voor Wie <br> Wil Werken</h1>
    <!-- main image -->
    <img class="top-image" src="../images/main_image.png">

    <a href="{{ route('register.step1') }}">
        <x-main-button-with-logo>
            <h3 class="button-title">Geïnteresseerd? Meld je aan!</h3>
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
</section>
</div>
</body>

<footer style="margin-top: -20rem;">
    <div class="footer-wrapper">
        <div>
            <a>Test</a>
            <a>Test</a>
            <a>Test</a>
        </div>
        <div>
            <a>Test</a>
            <a>Test</a>
            <a>Test</a>
        </div>
    </div>
    <div class="footer-wrapper">
        <div>
            <a>Test</a>
            <a>Test</a>
            <a>Test</a>
        </div>
        <div>
            <a>Test</a>
            <a>Test</a>
            <a>Test</a>
        </div>

    </div>
</footer>


<x-template>

</x-template>


</html>

<style>

    .wrapper{
        max-width: 90vw;
        margin: auto;
    }

    footer{
        background-color: #2E3612;
        width: 100%;
        color: white;
    }

    .bold {
        font-weight: bold;
    }

    .light {
        font-weight: lighter;
    }

    .no-margin {
        margin: 0;
    }

    .review-backdrop {
        background-color: #F9EE00;
        padding: 12rem 1rem 1rem 1rem;
        border-radius: 0 30px 30px 30px !important;
        position: relative;
        top: -29.4rem;
        z-index: 9;
        margin-left: auto;
        margin-right: auto;
        display: block;
        max-width: 72vw;
    }

    .review-image {
        max-width: 80vw;
        margin-left: auto;
        margin-right: auto;
        display: block;
        position: relative;
        top: -18.5rem;
        z-index: 10;
    }

    .secondary-title {
        text-align: center; /* Centers the text inside the element */
        margin: 1vw auto; /* Centers the element itself if it has a defined width */
    }

    .scrollmenu {
        display: flex; /* Align items in a row */
        overflow-x: auto; /* Enable horizontal scrolling */
        gap: 1rem; /* Optional: Add space between items */
        padding: 1rem; /* Add padding around the scrollable area */
        scroll-behavior: smooth; /* Smooth scrolling effect */
        white-space: nowrap; /* Prevent items from wrapping to the next line */
    }

    .scroll-item-container {
        flex: 0 0 auto; /* Prevent items from shrinking or growing */
        width: 200px; /* Fixed width for each item */
        text-align: center; /* Center-align text inside items */
    }

    .scroll-item-container img {
        width: 100px; /* Set explicit width */
        height: 100px; /* Set explicit height to match the width */
        border-radius: 50%; /* Makes the image round */
        object-fit: cover; /* Ensures the image is not distorted */
        margin-bottom: 0.5rem; /* Space between image and text */
    }

    div.scrollmenu img {
        max-width: 50%;
    }

    body {
        font-family: "Radikal Trial", sans-serif;
        margin-top: 3rem;
    }

    .alt-colours {
        background-color: #F9EE00 !important;
        border-radius: 0 15px 15px 15px !important;
    }

    .button-title {
        font-size: 1.1rem;
    }

    .alt-colours h1 {
        color: #b20060 !important;
    }

    .alt-colours p {
        color: black !important;
        text-align: left !important; /* Center-align text within the p element */
    }

    .step-container {
        max-width: 90vw;
        display: flex;
        align-items: center; /* Centers items vertically */
        justify-content: center; /* Centers items horizontally */
        background-color: #B20060;
        padding: 1rem;
        border-radius: 15px 0 15px 15px;
        min-height: 20vw;
        margin: 5vw 0vw;
    }

    .step-container h1 {
        color: #F9EE00;
        margin: 0; /* Remove default margin */
        font-size: xxx-large;
    }

    .step-container p {
        color: #ffffff; /* Optional: Make text more visible */
        text-align: right; /* Center-align text within the p element */
        margin: 0; /* Remove default margin */
        padding: 1rem;
    }


    .how-it-works-container {
        background-color: #F9EE00;
        max-width: 90vw;
        border-radius: 0 15px 15px 15px;
        margin: 5vw 0vw;
        padding: 1rem 2rem;
        position: relative;
    }

    .title {
        font-size: 2rem;
    }

    .question-mark {
        position: absolute;
        top: -4rem; /* Float above the box */
        right: -1.2rem; /* Align with the right edge */
        font-weight: bold;
        color: black; /* Contrasting color for the question mark */
        border-radius: 50%; /* Optional: Make it circular */
        padding: 0.5rem; /* Adds spacing inside the background */
        font-size: 6rem
    }

    .top-image {
        max-width: 90vw;
    }

    .section-1 {
        display: flex;
        align-content: center;
        flex-direction: column;
    }

    hr {
        border: none;
        border-top: 2px dotted #B20060;
        color: white;
        background-color: white;
        height: 1px;
        width: 100%;
    }

</style>
