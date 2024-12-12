
<div class="sidebar">
    <div class="sidebar-img">
        <img src="{{asset('images/logo-oh-png.png')}}" alt="Openhiring logo">
    </div>
    <div>
            <span class="sidebar-icon">
                <x-icon-info-svg></x-icon-info-svg>
            </span>
        <a class="sidebar-link" href="{{route('business.dashboard', $id)}}">Dashboard</a>
    </div>
    <div>
            <span class="sidebar-icon">
                <x-icon-info-svg></x-icon-info-svg>
            </span>
        <a class="sidebar-link" href="{{route('business.vacancies', $id)}}">Mijn vacatures</a>
    </div>
    <div>
            <span class="sidebar-icon">
                <x-icon-info-svg></x-icon-info-svg>
            </span>
        <a class="sidebar-link" href="{{route('vacancy.create', $id)}}">Nieuwe Vacature</a>
    </div>
    <div>
            <span class="sidebar-icon">
                <x-icon-info-svg></x-icon-info-svg>
            </span>
        <a class="sidebar-link" href="{{route('business.edit', $id)}}">Mijn Bedrijf</a>
    </div>
</div>

<style>
    .sidebar {
        display: flex;
        flex-direction: column;
        min-width: 13rem;
        background-color: #b20060;
        min-height: 100%;
        /*min-height: min-content;*/
        border-bottom-right-radius: 3rem;
    }

    .sidebar-img {
        display: flex;
        padding: 0.5rem 0 !important;
        justify-content: center;
    }

    .sidebar-icon {
        padding-left: 1rem;
    }

    .sidebar > * {
        left: 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        width: 100%;
        border-bottom: #ffffff solid 0.1rem;
        font-weight: 300;
        padding: 0.8rem 0;
    }

    .sidebar-link {
        color: white;
        font-size: 1rem;
        text-decoration: none;
    }


    .sidebar img {
        width: 3rem;
        height: auto;
    }
</style>
