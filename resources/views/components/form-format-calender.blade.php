<!-- resources/views/components/form-format.blade.php -->
<style>
    .form-input1 {
        position: relative;
        width: 80vw;
        height: 5vh;
        border: black solid;
        border-radius: 40px;
        box-shadow: 0px 4px 60px 2px rgba(0, 0, 0, 0.1); /* The '2px' is the spread radius */

    }

    .form-input1 input {
        width: 100%;
        height: 100%;
        padding-left: 8vh; /* Add padding to the left to make space for the icon */
        border: none;
        border-radius: inherit;

        font-size: 3rem;
        /*padding-right: 10px; !* Optional: Adds some space on the right *!*/
    }

    .form-input1 svg {
        position: absolute;
        top: 50%;
        left: 10px; /* Adjust the space between the left edge and the icon */
        transform: translateY(-50%) translateX(50%); /* Vertically center the icon */
    }

    article {
        width: 5vh;
    }
</style>

<div class="form-input1">
    <!-- Envelope Icon placed inside the form -->
    <svg xmlns="http://www.w3.org/2000/svg" width="58.967" height="53.105" viewBox="0 0 28.967 33.105">
        <defs>
            <style>
                .cls-1 {
                    fill: #b4085c;
                }
            </style>
        </defs>
        <path id="Icon_fa-solid-calendar-days" data-name="Icon fa-solid-calendar-days" class="cls-1" d="M8.276,0a2.067,2.067,0,0,1,2.069,2.069V4.138h8.276V2.069a2.069,2.069,0,1,1,4.138,0V4.138h3.1a3.1,3.1,0,0,1,3.1,3.1v3.1H0v-3.1a3.1,3.1,0,0,1,3.1-3.1h3.1V2.069A2.067,2.067,0,0,1,8.276,0ZM0,12.414H28.967V30a3.1,3.1,0,0,1-3.1,3.1H3.1A3.1,3.1,0,0,1,0,30Zm4.138,5.173v2.069a1.038,1.038,0,0,0,1.035,1.035H7.242a1.038,1.038,0,0,0,1.035-1.035V17.587a1.038,1.038,0,0,0-1.035-1.035H5.173A1.038,1.038,0,0,0,4.138,17.587Zm8.276,0v2.069a1.038,1.038,0,0,0,1.035,1.035h2.069a1.038,1.038,0,0,0,1.035-1.035V17.587a1.038,1.038,0,0,0-1.035-1.035H13.449A1.038,1.038,0,0,0,12.414,17.587Zm9.311-1.035a1.038,1.038,0,0,0-1.035,1.035v2.069a1.038,1.038,0,0,0,1.035,1.035h2.069a1.038,1.038,0,0,0,1.035-1.035V17.587a1.038,1.038,0,0,0-1.035-1.035ZM4.138,25.863v2.069a1.038,1.038,0,0,0,1.035,1.035H7.242a1.038,1.038,0,0,0,1.035-1.035V25.863a1.038,1.038,0,0,0-1.035-1.035H5.173A1.038,1.038,0,0,0,4.138,25.863Zm9.311-1.035a1.038,1.038,0,0,0-1.035,1.035v2.069a1.038,1.038,0,0,0,1.035,1.035h2.069a1.038,1.038,0,0,0,1.035-1.035V25.863a1.038,1.038,0,0,0-1.035-1.035Zm7.242,1.035v2.069a1.038,1.038,0,0,0,1.035,1.035h2.069a1.038,1.038,0,0,0,1.035-1.035V25.863a1.038,1.038,0,0,0-1.035-1.035H21.725A1.038,1.038,0,0,0,20.691,25.863Z"/>
    </svg>

    <article>
        <!-- filler-->

    </article>
    <!-- Input field -->
    {{ $slot }}
</div>
