<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expandable Box</title>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'nl',
                    includedLanguages: 'en,es,it,pl,fr,de,ch',
                    autoDisplay: false,
                    gaTrack: true,
                    gaId: '{replace with your gaId}'
                },
                'google_translate_element')
        }
    </script>
    <style>
        /* Style the expandable box */
        #expandable-box {
            position: fixed;
            right: 0;
            bottom: 15vh;
            width: 15vw; /* Narrow handle width when collapsed */
            background-color: rgba(180, 8, 92, 0.75);
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            overflow: hidden;
            transition: all 0.3s ease-in-out;
            margin: 0.5rem;
        }

        /* Header styling when collapsed */
        .box-header {
            color: white;
            padding: 10px;
            cursor: pointer;
            text-align: center;
            height: 100%;
        }

        /* Content styling */
        .box-content {
            display: none;
            padding: 15px;
            background-color: #f9f9f9;
            width: auto; /* Adjust width based on content */
            height: auto; /* Adjust height based on content */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* When expanded, show the content */
        .expanded {
            width: 100vw !important; /* Expand the box width */
            margin: 0 !important;
            margin-bottom: 1rem !important;
            background-color: rgba(180, 8, 92, 1) !important;
            border-radius: 15px !important;
        }

        .expanded .box-content {
            display: block;
        }

        .goog-logo-link, .goog-te-gadget span{
            display:none !important;
        }

        .goog-te-gadget{
            color: transparent !important;
        }

        .goog-te-combo{
            width: 90vw;
            padding: 0.5rem;
            font-family: "Radikal Trial", sans-serif;
            border-radius: 15px;
            text-align: center;
            margin-left: 1rem !important;
            border: 1px solid #b4085c;
            font-size: 1.2rem;
        }

    </style>
</head>
<body>

<!-- Expandable Box -->
<div id="expandable-box">
    <div class="box-header" onclick="toggleExpand()">
        <span id="flags" style="font-size: xx-large">🇩🇪</span>  <!-- Use + symbol when collapsed -->
    </div>
    <div class="box-content">
        <div id="google_translate_element"></div>
    </div>
</div>

<script>
    // Function to toggle the expanded state
    function toggleExpand() {
        const box = document.getElementById('expandable-box');
        box.classList.toggle('expanded');
        // Change the "+" to a "-" when expanded and vice versa
        const header = box.querySelector('.box-header span');
        header.textContent = box.classList.contains('expanded') ? '🇩🇪' : '🇩🇪';
    }

    // Function to close the box if clicked outside
    function closeIfClickedOutside(event) {
        const box = document.getElementById('expandable-box');
        // Check if the clicked element is outside the expandable box
        if (!box.contains(event.target)) {
            box.classList.remove('expanded');
            const header = box.querySelector('.box-header span');
            header.textContent = '🇩🇪';  // Set back to the initial state
        }
    }

    // Attach the event listener for clicks on the document
    document.addEventListener('click', closeIfClickedOutside);

    // Prevent closing when clicking inside the expandable box (toggle action)
    document.getElementById('expandable-box').addEventListener('click', function(event) {
        event.stopPropagation();
    });

</script>
<script>
    // List of flag emojis to cycle through
    const flags = ['🇺🇸', '🇬🇧', '🇮🇳', '🇯🇵', '🇩🇪', '🇫🇷', '🇮🇹', '🇨🇳'];

    // Function to cycle through flags
    function cycleFlags() {
        const span = document.getElementById('flags')
        let currentFlagIndex = flags.indexOf(span.textContent);
        currentFlagIndex = (currentFlagIndex + 1) % flags.length;  // Cycle through flags
        span.textContent = flags[currentFlagIndex];
    }

    // Cycle flags every 2 seconds
    setInterval(cycleFlags, 2000);
</script>

</body>
</html>
