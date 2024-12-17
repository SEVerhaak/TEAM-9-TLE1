<x-template :selected="1"></x-template>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<h1 class="page-title">Mijn aanmeldingen </h1>
<div class="wrapper">

    <div class="aangenomentitel">
        <h2>Uitgenodigd</h2><a href="{{route('accepted_registrations')}}" class="more-info">Toon meer</a>
    </div>
    <section class="Aangenomen">
        @if(!empty($invited))
{{--            @foreach($vacancies as $vacancy)--}}
{{--                @if($vacancy->application_stage == 1)--}}
                    <div class="name">
                        <h2> {{$invited->vacancy->name}}</h2>
                    </div>
                    <div class="business">
                        <p> {{$invited->vacancy->business->name}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "14.666"}}"
                             height="{{$height ?? "19.555"}}" viewBox="0 0 14.666 19.555">
                            <path id="Icon_fa-solid-building" data-name="Icon fa-solid-building"
                                  d="M1.833,0A1.834,1.834,0,0,0,0,1.833V17.721a1.834,1.834,0,0,0,1.833,1.833H5.5V16.5a1.833,1.833,0,0,1,3.666,0v3.055h3.666a1.834,1.834,0,0,0,1.833-1.833V1.833A1.834,1.834,0,0,0,12.833,0Zm.611,9.166a.613.613,0,0,1,.611-.611H4.278a.613.613,0,0,1,.611.611v1.222A.613.613,0,0,1,4.278,11H3.055a.613.613,0,0,1-.611-.611Zm4.278-.611H7.944a.613.613,0,0,1,.611.611v1.222A.613.613,0,0,1,7.944,11H6.722a.613.613,0,0,1-.611-.611V9.166A.613.613,0,0,1,6.722,8.555Zm3.055.611a.613.613,0,0,1,.611-.611h1.222a.613.613,0,0,1,.611.611v1.222a.613.613,0,0,1-.611.611H10.388a.613.613,0,0,1-.611-.611Zm-6.722-5.5H4.278a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H3.055A.613.613,0,0,1,2.444,5.5V4.278A.613.613,0,0,1,3.055,3.666Zm3.055.611a.613.613,0,0,1,.611-.611H7.944a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H6.722A.613.613,0,0,1,6.111,5.5Zm4.278-.611h1.222a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H10.388A.613.613,0,0,1,9.777,5.5V4.278A.613.613,0,0,1,10.388,3.666Z"/>
                        </svg>
                    </div>
                    <div class="location">
                        <p> {{$invited->vacancy->business->hq_location}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "16.5"}}"
                             height="{{$height ?? "14.45"}}"
                             viewBox="0 0 16.5 14.45">
                            <path id="Icon_fa-solid-map-location-dot" data-name="Icon fa-solid-map-location-dot"
                                  d="M11.688,3.438c0,1.564-2.094,4.351-3.014,5.5a.539.539,0,0,1-.848,0C6.907,7.789,4.813,5,4.813,3.438a3.438,3.438,0,0,1,6.875,0Zm.229,2.3c.1-.2.192-.4.275-.59l.043-.106,3.323-1.329a.687.687,0,0,1,.942.639v7.757a.691.691,0,0,1-.433.639l-4.151,1.659ZM3.942,3.962a5.437,5.437,0,0,0,.367,1.189c.083.195.175.392.275.59v7.2L.942,14.4A.687.687,0,0,1,0,13.761V6a.691.691,0,0,1,.433-.639l3.512-1.4ZM9.39,9.51c.4-.5,1.023-1.309,1.61-2.206v7.141L5.5,12.873V7.3c.587.9,1.212,1.707,1.61,2.206A1.457,1.457,0,0,0,9.39,9.51ZM8.25,4.354A1.146,1.146,0,1,0,7.1,3.208,1.146,1.146,0,0,0,8.25,4.354Z"/>
                        </svg>
                    </div>
                    <div class="geld">
                        <p> {{$invited->vacancy->salary}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "17.5"}}"
                             height="{{$height ?? "17.5"}}"
                             viewBox="0 0 17.5 17.5">
                            <path id="Icon_fa-solid-clock" data-name="Icon fa-solid-clock"
                                  d="M8.75,0A8.75,8.75,0,1,1,0,8.75,8.75,8.75,0,0,1,8.75,0ZM7.93,4.1V8.75a.824.824,0,0,0,.366.684l3.281,2.187a.821.821,0,0,0,.909-1.367L9.57,8.312V4.1a.82.82,0,1,0-1.641,0Z"/>
                        </svg>

                    </div>
                    <div class="tijd">
                        <p> {{$invited->vacancy->time_hours}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "17.5"}}"
                             height="{{$height ?? "17.5"}}"
                             viewBox="0 0 17.5 17.5">
                            <path id="Icon_fa-solid-coins" data-name="Icon fa-solid-coins"
                                  d="M17.5,2.734c0,.615-.489,1.183-1.312,1.641a10.436,10.436,0,0,1-4.18,1.056c-.126-.062-.253-.12-.386-.171a13.493,13.493,0,0,0-5.059-.885c-.284,0-.561.007-.837.021l-.038-.021C4.864,3.917,4.375,3.35,4.375,2.734,4.375,1.224,7.314,0,10.938,0S17.5,1.224,17.5,2.734ZM5.493,5.506c.349-.024.708-.038,1.07-.038a11.448,11.448,0,0,1,5.212,1.073c.848.461,1.35,1.036,1.35,1.661a1.148,1.148,0,0,1-.072.4,2.478,2.478,0,0,1-1.2,1.213s-.01,0-.014.007-.021.01-.031.017a11.394,11.394,0,0,1-5.25,1.094A11.758,11.758,0,0,1,1.5,9.939c-.065-.031-.126-.065-.188-.1C.489,9.386,0,8.818,0,8.2,0,7.014,1.825,6,4.375,5.626,4.734,5.575,5.106,5.534,5.493,5.506Zm8.726,2.7A2.581,2.581,0,0,0,13.4,6.378a11.5,11.5,0,0,0,2.6-.7,5.919,5.919,0,0,0,1.5-.872v1.21c0,.66-.564,1.268-1.5,1.74a8.28,8.28,0,0,1-1.791.632c0-.062.007-.12.007-.181Zm-1.094,3.281c0,.615-.489,1.183-1.313,1.641-.062.034-.123.065-.188.1a11.73,11.73,0,0,1-5.062.995,11.394,11.394,0,0,1-5.25-1.094C.489,12.667,0,12.1,0,11.484v-1.21a5.979,5.979,0,0,0,1.5.872,13.524,13.524,0,0,0,5.062.885,13.524,13.524,0,0,0,5.062-.885,6.9,6.9,0,0,0,.766-.373,5.43,5.43,0,0,0,.588-.383c.051-.038.1-.079.147-.116Zm1.094,0V9.505A10.594,10.594,0,0,0,16,8.958a5.919,5.919,0,0,0,1.5-.872V9.3a1.511,1.511,0,0,1-.509,1.056,5.986,5.986,0,0,1-2.779,1.313c0-.058.007-.12.007-.181ZM6.563,15.313a13.524,13.524,0,0,0,5.062-.885,5.919,5.919,0,0,0,1.5-.872v1.21c0,1.511-2.939,2.734-6.562,2.734S0,16.276,0,14.766v-1.21a5.979,5.979,0,0,0,1.5.872A13.524,13.524,0,0,0,6.563,15.313Z"/>
                        </svg>

                    </div>
                    <!-- Green icon section -->
                    <div class="aangenomenicon">
                        <h2>Uitgenodigd</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8%" height="8%" viewBox="0 0 28.5 28.5">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <path id="Icon_fa-solid-circle-check" data-name="Icon fa-solid-circle-check" class="cls-1"
                                  d="M14.25,28.5A14.25,14.25,0,1,0,0,14.25,14.25,14.25,0,0,0,14.25,28.5Zm6.29-16.866-7.125,7.125a1.33,1.33,0,0,1-1.887,0L7.966,15.2a1.334,1.334,0,0,1,1.887-1.887l2.616,2.616,6.179-6.184a1.334,1.334,0,1,1,1.887,1.887Z"/>
                        </svg>
                    </div>
{{--                @else--}}
{{--                    <h1 style="text-align: center">Geen resultaten</h1>--}}
{{--                @endif--}}
{{--            @endforeach--}}
        @else
            <h1 style="text-align: center">Geen resultaten</h1>
        @endif
    </section>

    <div class="aangenomentitel">
        <h2>In Afwachting</h2><a href="{{route('pending_registrations')}}" class="more-info">Toon meer</a>
    </div>
    <section class="InAfwachting">
        @if(!empty($pending))
{{--            @foreach($vacancies as $vacancy)--}}
{{--                @if($vacancy->application_stage == 0)--}}
                    <div class="name">
                        <h2> {{$pending->vacancy->name}}</h2>
                    </div>
                    <div class="business">
                        <p> {{$pending->vacancy->business->name}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "14.666"}}"
                             height="{{$height ?? "19.555"}}" viewBox="0 0 14.666 19.555">
                            <path id="Icon_fa-solid-building" data-name="Icon fa-solid-building"
                                  d="M1.833,0A1.834,1.834,0,0,0,0,1.833V17.721a1.834,1.834,0,0,0,1.833,1.833H5.5V16.5a1.833,1.833,0,0,1,3.666,0v3.055h3.666a1.834,1.834,0,0,0,1.833-1.833V1.833A1.834,1.834,0,0,0,12.833,0Zm.611,9.166a.613.613,0,0,1,.611-.611H4.278a.613.613,0,0,1,.611.611v1.222A.613.613,0,0,1,4.278,11H3.055a.613.613,0,0,1-.611-.611Zm4.278-.611H7.944a.613.613,0,0,1,.611.611v1.222A.613.613,0,0,1,7.944,11H6.722a.613.613,0,0,1-.611-.611V9.166A.613.613,0,0,1,6.722,8.555Zm3.055.611a.613.613,0,0,1,.611-.611h1.222a.613.613,0,0,1,.611.611v1.222a.613.613,0,0,1-.611.611H10.388a.613.613,0,0,1-.611-.611Zm-6.722-5.5H4.278a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H3.055A.613.613,0,0,1,2.444,5.5V4.278A.613.613,0,0,1,3.055,3.666Zm3.055.611a.613.613,0,0,1,.611-.611H7.944a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H6.722A.613.613,0,0,1,6.111,5.5Zm4.278-.611h1.222a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H10.388A.613.613,0,0,1,9.777,5.5V4.278A.613.613,0,0,1,10.388,3.666Z"/>
                        </svg>
                    </div>
                    <div class="location">
                        <p> {{$pending->vacancy->business->hq_location}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "16.5"}}"
                             height="{{$height ?? "14.45"}}"
                             viewBox="0 0 16.5 14.45">
                            <path id="Icon_fa-solid-map-location-dot" data-name="Icon fa-solid-map-location-dot"
                                  d="M11.688,3.438c0,1.564-2.094,4.351-3.014,5.5a.539.539,0,0,1-.848,0C6.907,7.789,4.813,5,4.813,3.438a3.438,3.438,0,0,1,6.875,0Zm.229,2.3c.1-.2.192-.4.275-.59l.043-.106,3.323-1.329a.687.687,0,0,1,.942.639v7.757a.691.691,0,0,1-.433.639l-4.151,1.659ZM3.942,3.962a5.437,5.437,0,0,0,.367,1.189c.083.195.175.392.275.59v7.2L.942,14.4A.687.687,0,0,1,0,13.761V6a.691.691,0,0,1,.433-.639l3.512-1.4ZM9.39,9.51c.4-.5,1.023-1.309,1.61-2.206v7.141L5.5,12.873V7.3c.587.9,1.212,1.707,1.61,2.206A1.457,1.457,0,0,0,9.39,9.51ZM8.25,4.354A1.146,1.146,0,1,0,7.1,3.208,1.146,1.146,0,0,0,8.25,4.354Z"/>
                        </svg>
                    </div>
                    <div class="geld">
                        <p> {{$pending->vacancy->salary}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "17.5"}}"
                             height="{{$height ?? "17.5"}}"
                             viewBox="0 0 17.5 17.5">
                            <path id="Icon_fa-solid-clock" data-name="Icon fa-solid-clock"
                                  d="M8.75,0A8.75,8.75,0,1,1,0,8.75,8.75,8.75,0,0,1,8.75,0ZM7.93,4.1V8.75a.824.824,0,0,0,.366.684l3.281,2.187a.821.821,0,0,0,.909-1.367L9.57,8.312V4.1a.82.82,0,1,0-1.641,0Z"/>
                        </svg>

                    </div>
                    <div class="tijd">
                        <p> {{$pending->vacancy->time_hours}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "17.5"}}"
                             height="{{$height ?? "17.5"}}"
                             viewBox="0 0 17.5 17.5">
                            <path id="Icon_fa-solid-coins" data-name="Icon fa-solid-coins"
                                  d="M17.5,2.734c0,.615-.489,1.183-1.312,1.641a10.436,10.436,0,0,1-4.18,1.056c-.126-.062-.253-.12-.386-.171a13.493,13.493,0,0,0-5.059-.885c-.284,0-.561.007-.837.021l-.038-.021C4.864,3.917,4.375,3.35,4.375,2.734,4.375,1.224,7.314,0,10.938,0S17.5,1.224,17.5,2.734ZM5.493,5.506c.349-.024.708-.038,1.07-.038a11.448,11.448,0,0,1,5.212,1.073c.848.461,1.35,1.036,1.35,1.661a1.148,1.148,0,0,1-.072.4,2.478,2.478,0,0,1-1.2,1.213s-.01,0-.014.007-.021.01-.031.017a11.394,11.394,0,0,1-5.25,1.094A11.758,11.758,0,0,1,1.5,9.939c-.065-.031-.126-.065-.188-.1C.489,9.386,0,8.818,0,8.2,0,7.014,1.825,6,4.375,5.626,4.734,5.575,5.106,5.534,5.493,5.506Zm8.726,2.7A2.581,2.581,0,0,0,13.4,6.378a11.5,11.5,0,0,0,2.6-.7,5.919,5.919,0,0,0,1.5-.872v1.21c0,.66-.564,1.268-1.5,1.74a8.28,8.28,0,0,1-1.791.632c0-.062.007-.12.007-.181Zm-1.094,3.281c0,.615-.489,1.183-1.313,1.641-.062.034-.123.065-.188.1a11.73,11.73,0,0,1-5.062.995,11.394,11.394,0,0,1-5.25-1.094C.489,12.667,0,12.1,0,11.484v-1.21a5.979,5.979,0,0,0,1.5.872,13.524,13.524,0,0,0,5.062.885,13.524,13.524,0,0,0,5.062-.885,6.9,6.9,0,0,0,.766-.373,5.43,5.43,0,0,0,.588-.383c.051-.038.1-.079.147-.116Zm1.094,0V9.505A10.594,10.594,0,0,0,16,8.958a5.919,5.919,0,0,0,1.5-.872V9.3a1.511,1.511,0,0,1-.509,1.056,5.986,5.986,0,0,1-2.779,1.313c0-.058.007-.12.007-.181ZM6.563,15.313a13.524,13.524,0,0,0,5.062-.885,5.919,5.919,0,0,0,1.5-.872v1.21c0,1.511-2.939,2.734-6.562,2.734S0,16.276,0,14.766v-1.21a5.979,5.979,0,0,0,1.5.872A13.524,13.524,0,0,0,6.563,15.313Z"/>
                        </svg>

                    </div>
                    <!-- Yellow icon section -->
                    <div class="text-icon-content-container">
                        <h2>In Afwachting</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "8%"}}" height="{{$height ?? "8%"}}"
                             viewBox="0 0 17.5 17.5">
                            <style>
                                .cls-1 {
                                    fill: #fff;
                                }
                            </style>
                            <path id="Icon_fa-solid-clock" data-name="Icon fa-solid-clock"
                                  d="M8.75,0A8.75,8.75,0,1,1,0,8.75,8.75,8.75,0,0,1,8.75,0ZM7.93,4.1V8.75a.824.824,0,0,0,.366.684l3.281,2.187a.821.821,0,0,0,.909-1.367L9.57,8.312V4.1a.82.82,0,1,0-1.641,0Z"/>
                        </svg>

                    </div>
{{--                @else--}}
{{--                    <h1 style="text-align: center">Geen resultaten</h1>--}}
{{--                @endif--}}
{{--            @endforeach--}}

        @else
            <h1 style="text-align: center">Geen resultaten</h1>
        @endif

    </section>

    <div class="aangenomentitel">
        <h2>Afgewezen</h2><a href="{{route('denied_registrations')}}" class="more-info">Toon meer</a>
    </div>
    <section class="denied">
        @if(!empty($denied))
{{--            @foreach($vacancies as $vacancy)--}}
{{--                @if($vacancy->application_stage == 2)--}}
                    <div class="name">
                        <h2> {{$denied->vacancy->name}}</h2>
                    </div>
                    <div class="business">
                        <p> {{$denied->vacancy->business->name}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "14.666"}}"
                             height="{{$height ?? "19.555"}}" viewBox="0 0 14.666 19.555">
                            <path id="Icon_fa-solid-building" data-name="Icon fa-solid-building"
                                  d="M1.833,0A1.834,1.834,0,0,0,0,1.833V17.721a1.834,1.834,0,0,0,1.833,1.833H5.5V16.5a1.833,1.833,0,0,1,3.666,0v3.055h3.666a1.834,1.834,0,0,0,1.833-1.833V1.833A1.834,1.834,0,0,0,12.833,0Zm.611,9.166a.613.613,0,0,1,.611-.611H4.278a.613.613,0,0,1,.611.611v1.222A.613.613,0,0,1,4.278,11H3.055a.613.613,0,0,1-.611-.611Zm4.278-.611H7.944a.613.613,0,0,1,.611.611v1.222A.613.613,0,0,1,7.944,11H6.722a.613.613,0,0,1-.611-.611V9.166A.613.613,0,0,1,6.722,8.555Zm3.055.611a.613.613,0,0,1,.611-.611h1.222a.613.613,0,0,1,.611.611v1.222a.613.613,0,0,1-.611.611H10.388a.613.613,0,0,1-.611-.611Zm-6.722-5.5H4.278a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H3.055A.613.613,0,0,1,2.444,5.5V4.278A.613.613,0,0,1,3.055,3.666Zm3.055.611a.613.613,0,0,1,.611-.611H7.944a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H6.722A.613.613,0,0,1,6.111,5.5Zm4.278-.611h1.222a.613.613,0,0,1,.611.611V5.5a.613.613,0,0,1-.611.611H10.388A.613.613,0,0,1,9.777,5.5V4.278A.613.613,0,0,1,10.388,3.666Z"/>
                        </svg>
                    </div>

                    <div class="location">
                        <p> {{$denied->vacancy->business->hq_location}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "16.5"}}"
                             height="{{$height ?? "14.45"}}"
                             viewBox="0 0 16.5 14.45">
                            <path id="Icon_fa-solid-map-location-dot" data-name="Icon fa-solid-map-location-dot"
                                  d="M11.688,3.438c0,1.564-2.094,4.351-3.014,5.5a.539.539,0,0,1-.848,0C6.907,7.789,4.813,5,4.813,3.438a3.438,3.438,0,0,1,6.875,0Zm.229,2.3c.1-.2.192-.4.275-.59l.043-.106,3.323-1.329a.687.687,0,0,1,.942.639v7.757a.691.691,0,0,1-.433.639l-4.151,1.659ZM3.942,3.962a5.437,5.437,0,0,0,.367,1.189c.083.195.175.392.275.59v7.2L.942,14.4A.687.687,0,0,1,0,13.761V6a.691.691,0,0,1,.433-.639l3.512-1.4ZM9.39,9.51c.4-.5,1.023-1.309,1.61-2.206v7.141L5.5,12.873V7.3c.587.9,1.212,1.707,1.61,2.206A1.457,1.457,0,0,0,9.39,9.51ZM8.25,4.354A1.146,1.146,0,1,0,7.1,3.208,1.146,1.146,0,0,0,8.25,4.354Z"/>
                        </svg>
                    </div>
                    <div class="geld">
                        <p> {{$denied->vacancy->salary}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "17.5"}}"
                             height="{{$height ?? "17.5"}}"
                             viewBox="0 0 17.5 17.5">
                            <path id="Icon_fa-solid-clock" data-name="Icon fa-solid-clock"
                                  d="M8.75,0A8.75,8.75,0,1,1,0,8.75,8.75,8.75,0,0,1,8.75,0ZM7.93,4.1V8.75a.824.824,0,0,0,.366.684l3.281,2.187a.821.821,0,0,0,.909-1.367L9.57,8.312V4.1a.82.82,0,1,0-1.641,0Z"/>
                        </svg>

                    </div>
                    <div class="tijd">
                        <p> {{$denied->vacancy->time_hours}}</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="{{$width ?? "17.5"}}"
                             height="{{$height ?? "17.5"}}"
                             viewBox="0 0 17.5 17.5">
                            <path id="Icon_fa-solid-coins" data-name="Icon fa-solid-coins"
                                  d="M17.5,2.734c0,.615-.489,1.183-1.312,1.641a10.436,10.436,0,0,1-4.18,1.056c-.126-.062-.253-.12-.386-.171a13.493,13.493,0,0,0-5.059-.885c-.284,0-.561.007-.837.021l-.038-.021C4.864,3.917,4.375,3.35,4.375,2.734,4.375,1.224,7.314,0,10.938,0S17.5,1.224,17.5,2.734ZM5.493,5.506c.349-.024.708-.038,1.07-.038a11.448,11.448,0,0,1,5.212,1.073c.848.461,1.35,1.036,1.35,1.661a1.148,1.148,0,0,1-.072.4,2.478,2.478,0,0,1-1.2,1.213s-.01,0-.014.007-.021.01-.031.017a11.394,11.394,0,0,1-5.25,1.094A11.758,11.758,0,0,1,1.5,9.939c-.065-.031-.126-.065-.188-.1C.489,9.386,0,8.818,0,8.2,0,7.014,1.825,6,4.375,5.626,4.734,5.575,5.106,5.534,5.493,5.506Zm8.726,2.7A2.581,2.581,0,0,0,13.4,6.378a11.5,11.5,0,0,0,2.6-.7,5.919,5.919,0,0,0,1.5-.872v1.21c0,.66-.564,1.268-1.5,1.74a8.28,8.28,0,0,1-1.791.632c0-.062.007-.12.007-.181Zm-1.094,3.281c0,.615-.489,1.183-1.313,1.641-.062.034-.123.065-.188.1a11.73,11.73,0,0,1-5.062.995,11.394,11.394,0,0,1-5.25-1.094C.489,12.667,0,12.1,0,11.484v-1.21a5.979,5.979,0,0,0,1.5.872,13.524,13.524,0,0,0,5.062.885,13.524,13.524,0,0,0,5.062-.885,6.9,6.9,0,0,0,.766-.373,5.43,5.43,0,0,0,.588-.383c.051-.038.1-.079.147-.116Zm1.094,0V9.505A10.594,10.594,0,0,0,16,8.958a5.919,5.919,0,0,0,1.5-.872V9.3a1.511,1.511,0,0,1-.509,1.056,5.986,5.986,0,0,1-2.779,1.313c0-.058.007-.12.007-.181ZM6.563,15.313a13.524,13.524,0,0,0,5.062-.885,5.919,5.919,0,0,0,1.5-.872v1.21c0,1.511-2.939,2.734-6.562,2.734S0,16.276,0,14.766v-1.21a5.979,5.979,0,0,0,1.5.872A13.524,13.524,0,0,0,6.563,15.313Z"/>
                        </svg>

                    </div>
                    <!-- Red icon section -->
                    <div class="text-icon-content-container">
                        <h2>Afgewezen</h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8%" height="8%" viewBox="0 0 30.5 30.5">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <path id="Icon_fa-solid-circle-exclamation" data-name="Icon fa-solid-circle-exclamation" class="cls-1"
                                  d="M15.25,30.5A15.25,15.25,0,1,0,0,15.25,15.25,15.25,0,0,0,15.25,30.5Zm0-22.875a1.426,1.426,0,0,1,1.43,1.43v6.672a1.43,1.43,0,0,1-2.859,0V9.055A1.426,1.426,0,0,1,15.25,7.625ZM13.344,20.969a1.906,1.906,0,1,1,1.906,1.906A1.906,1.906,0,0,1,13.344,20.969Z"/>
                        </svg>
                    </div>
{{--                @else--}}
{{--                    <h1 style="text-align: center">Geen resultaten</h1>--}}
{{--                @endif--}}
{{--            @endforeach--}}

        @else
            <h1 style="text-align: center">Geen resultaten</h1>
        @endif

    </section>
</div>
<style>
    .aangenomentitel {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        padding: 1rem;
        max-width: 1200px;
        width: 90%;
        text-align: center;
        margin-bottom: 0;
    }

    .aangenomentitel h2 {
        flex-grow: 1;
        margin: 0;
        text-align: left;
    }

    .aangenomentitel a {
        display: inline-block;
        color: #b4085c;
        font-size: 1rem;
        font-weight: bold;
        text-decoration: none;
        border-bottom: 1px solid #b4085c;
        padding-bottom: 1px;
        width: auto;
    }

    .page-title {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 2rem;
    }

    .Aangenomen, .InAfwachting, .denied {
        margin-bottom: 1rem;
    }

    .Aangenomen, .InAfwachting, .denied {
        background-color: white;
        box-shadow: 0 0 30px 10px rgba(0, 0, 0, 0.1);
        padding: 0.3rem;
        margin: 0.5rem;
        border-radius: 0 30px 30px 30px;
    }

    .Aangenomen h2, .InAfwachting h2, .denied h2 {
        font-size: 1.25rem;
        margin: 0.5rem 0;
    }


    /* Submission button */
    .confirm-submission {
        display: flex;
        justify-content: flex-end;
    }

    .result-container p {
        margin: 0.25rem 0;
        font-size: large;
    }

    .more-info {
        width: 100%;
        border: none;
        color: #b4085c;
    }

    .more-info a {
        color: white;
        font-size: large;
        font-weight: bold;
        font-family: "Radikal Trial";
        text-decoration: none;
    }

    p {
        margin: 0;
    }

    /* Green icon section */
    .aangenomenicon {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background-color: #28a745;
        border: none;
        color: white;
        padding: 0.2rem 3.5rem 0.2rem 3rem;
        border-radius: 0 25px 25px 25px;
    }

    .text-icon-content-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background-color: #f9ee00;
        border: none;
        color: black;
        padding: 0.2rem 3.5rem 0.2rem 3rem;
        border-radius: 0 25px 25px 25px;
    }

    /* Red icon section */
    .denied .text-icon-content-container {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background-color: #BF212E;
        border: none;
        color: white;
        padding: 0.2rem 3.5rem 0.2rem 3rem;
        border-radius: 0 25px 25px 25px;
    }

    .name {
        display: flex;
        justify-content: flex-end;
        flex-direction: row-reverse;
        margin-left: 0.5rem;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
        font-weight: bold;

    }

    .location {
        display: flex;
        justify-content: flex-end;
        flex-direction: row-reverse;
        margin-left: 0.5rem;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
        font-weight: bold;

    }

    .geld {
        display: flex;
        justify-content: flex-end;
        flex-direction: row-reverse;
        margin-left: 0.5rem;
        gap: 0.5rem;
        margin-bottom: 0.5rem;
        font-weight: bold;


    }

    .tijd {
        display: flex;
        justify-content: flex-end;
        flex-direction: row-reverse;
        margin-left: 0.5rem;
        margin-bottom: 0.5rem;
        gap: 0.5rem;
        font-weight: bold;

    }

    .business {
        display: flex;
        justify-content: flex-end;
        flex-direction: row-reverse;
        margin-left: 0.5rem;
        margin-bottom: 0.5rem;
        gap: 0.5rem;
        font-weight: bold;

    }
</style>
