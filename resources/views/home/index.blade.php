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
<!-- section 1 -->
<section class="section-1">
    <!-- title -->
    <h1>Werken voor wie <br> Wil Werken</h1>
    <!-- main image -->
    <img class="top-image" src="../images/main_image.png">

    <x-main-button-with-logo>
        <h3>Geïnteresseerd? <a href="{{ route('open_vacancies.index') }}"> Meld je aan!</a> </h3>
    </x-main-button-with-logo>

    <div class="how-it-works-container">
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
    <hr>
</section>

<section class="section-2">
    <div class="step-container">
        <h1>1</h1>
        <p>
            Meld je aan bij Open Hiring en voeg je relevante informatie toe aan je account!
        </p>
    </div>
</section>

<!-- bottom nav menu
<x-template>

</x-template>
-->
</body>
</html>

<style>

    html, body{
        font-family: "Radikal Trial", sans-serif;
    }

    .step-container {
        max-width: 90vw;
        display: flex;
        align-items: center; /* Centers items vertically */
        justify-content: center; /* Centers items horizontally */
        background-color: #B20060;
        padding: 1rem;
    }

    .step-container h1 {
        color: #F9EE00;
        margin: 0; /* Remove default margin */
    }

    .step-container p {
        color: #ffffff; /* Optional: Make text more visible */
        text-align: right; /* Center-align text within the p element */
        margin: 0; /* Remove default margin */
    }


    .how-it-works-container {
        background-color: #F9EE00;
        max-width: 90vw;
        border-radius: 0 15px 15px 15px;
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
