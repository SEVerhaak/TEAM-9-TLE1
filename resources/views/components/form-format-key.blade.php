<!-- resources/views/components/form-format.blade.php -->
<style>
    .form-input1 {
        position: relative;
        width: 80vw;
        height: 6vh;
        border: #b4085c solid;
        border-radius: 20px;
        margin-bottom: 1vh;
        box-shadow: 0 4px 60px rgba(0, 0, 0, 0.1); /* Add box-shadow */
    }

    .form-input1 input {
        width: 100%;
        height: 100%;
        padding-left: 8vh; /* Add padding to the left to make space for the icon */
        border: none;
        border-radius: 20px;

        font-size: 1.3rem;
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
    <svg xmlns="http://www.w3.org/2000/svg" width="28.483" height="26.642" viewBox="0 0 28.483 26.642">
        <defs>
            <style>
                .cls-1 {
                    fill: #b4085c;
                }
            </style>
        </defs>
        <path id="Icon_fa-solid-key" data-name="Icon fa-solid-key" class="cls-1" d="M18.692,18.316c5.407,0,9.791-4.1,9.791-9.158S24.1,0,18.692,0,8.9,4.1,8.9,9.158a8.636,8.636,0,0,0,.462,2.794L.389,20.346A1.208,1.208,0,0,0,0,21.23v4.163a1.291,1.291,0,0,0,1.335,1.249H5.786a1.291,1.291,0,0,0,1.335-1.249V23.312H9.346a1.291,1.291,0,0,0,1.335-1.249V19.981h2.225a1.383,1.383,0,0,0,.946-.364L15.7,17.884A10.438,10.438,0,0,0,18.692,18.316ZM20.917,5a2.157,2.157,0,0,1,2.225,2.081,2.23,2.23,0,0,1-4.451,0A2.157,2.157,0,0,1,20.917,5Z"/>
    </svg>

    <article>
        <!-- filler-->

    </article>
    <!-- Input field -->
    {{ $slot }}
</div>
