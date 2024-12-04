<button class="main-with-logo">
    <div class="button-content-container">
        {{$slot}}
        <x-add-user-svg class="icon-button-main"></x-add-user-svg>
    </div>
</button>

<style>
    .button-content-container{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .main-with-logo{
        max-width: 90vw;
        background-color: #B20060;
        color: white;
        border: none;
        border-radius: 15px 0 15px 15px;
        margin: 8vw 0;
    }

</style>
