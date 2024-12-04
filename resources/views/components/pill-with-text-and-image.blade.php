<div class="pill">
    <x-icon-work-svg>

    </x-icon-work-svg>
    <p>{{$slot}}</p>
</div>

<style>
    .pill{
        display: flex;
        background-color: #b4085c;
        max-width: 45%;
        border-radius: 10rem;
        align-items: center;
        justify-content: center;
        color: white;
        position: absolute;
        bottom: 13rem;
        z-index: 9999 !important;
        left: 10rem;
        font-size: smaller;
    }


</style>
