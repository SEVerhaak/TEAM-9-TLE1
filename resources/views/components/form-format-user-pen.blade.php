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
    <svg xmlns="http://www.w3.org/2000/svg" width="58.967" height="53.177" viewBox="0 0 28.967 23.177">
        <defs>
            <style>
                .cls-1 {
                    fill: #b4085c;
                }
            </style>
        </defs>
        <path id="Icon_fa-solid-user-pen" data-name="Icon fa-solid-user-pen" class="cls-1" d="M10.14,11.588A5.794,5.794,0,1,0,4.346,5.794,5.794,5.794,0,0,0,10.14,11.588ZM8.071,13.761A8.07,8.07,0,0,0,0,21.833a1.345,1.345,0,0,0,1.344,1.344H14.612a2.2,2.2,0,0,1-.063-1.258l.679-2.721a2.874,2.874,0,0,1,.76-1.344l1.824-1.824A8.043,8.043,0,0,0,12.2,13.761ZM27.785,10.67a1.814,1.814,0,0,0-2.562,0L23.892,12l3.214,3.214,1.331-1.331a1.814,1.814,0,0,0,0-2.562ZM17.016,18.877a1.434,1.434,0,0,0-.38.674l-.679,2.721a.724.724,0,0,0,.878.878l2.721-.679a1.456,1.456,0,0,0,.674-.38l5.849-5.853-3.214-3.214Z"/>
    </svg>

    <article>
        <!-- filler-->

    </article>
    <!-- Input field -->
    {{ $slot }}
</div>
