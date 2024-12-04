<!-- resources/views/components/form-format.blade.php -->
<style>
    .form-input1 {
        position: relative;
        width: 80vw;
        height: 5vh;
        border: black solid;
        border-radius: 40px;
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
    <svg xmlns="http://www.w3.org/2000/svg" width="58.967" height="52.131" viewBox="0 0 28.967 22.131">
        <defs>
            <style>
                .cls-1 {
                    fill: #b4085c;
                }
            </style>
        </defs>
        <path id="Icon_fa-solid-envelope" data-name="Icon fa-solid-envelope" class="cls-1" d="M2.716,4.5A2.742,2.742,0,0,0,0,7.266,2.785,2.785,0,0,0,1.086,9.479L13.4,18.885a1.789,1.789,0,0,0,2.173,0L27.88,9.479a2.785,2.785,0,0,0,1.086-2.213A2.742,2.742,0,0,0,26.251,4.5H2.716ZM0,10.955V22.942a3.658,3.658,0,0,0,3.621,3.688H25.346a3.658,3.658,0,0,0,3.621-3.688V10.955L16.656,20.36a3.562,3.562,0,0,1-4.345,0Z" transform="translate(0 -4.5)"/>
    </svg>
    <article>
        <!-- filler-->

    </article>
    <!-- Input field -->
    {{ $slot }}
</div>
