<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - {{$business->name}}</title>
</head>
<body>

<main>
    <x-business-dashboard-sidebar id="{{$business->id}}"></x-business-dashboard-sidebar>

    <div class="right-container">
        <div class="applications-container">
            <h2>Aanmeldingen voor: <br> {{$vacancy->name}}</h2>
            <div class="application-container-layout">
                <table>
                    <tr>
                        <th>#</th>
                        <th>Status</th>
                        <th>Country</th>
                    </tr>

                    @foreach($applications as $application)
                        <tr>
                            <td>{{$application->id}}</td>
                            <td>{{$application->application_stage_formatted}}</td>
                        </tr>

                    @endforeach
                </table>


                <div></div>
            </div>
        </div>
    </div>

</main>

</body>
</html>


<style>
    body {
        margin: 0;
        font-family: "Radikal Trial", sans-serif;
    }

    main {
        display: flex;
        min-height: 100vh;
        height: max-content;
    }

    h2 {
        margin: 0;
    }

    .right-container {
        height: min-content;
        width: 100%;
        display: flex;
        gap: 5rem;
        margin: 2rem;
        margin-bottom: 0 !important;
        justify-content: space-between;
    }

    .applications-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 1.5rem;
        border-top-left-radius: 0 !important;
        width: 100%;
        padding: 1rem 1.5rem;
    }

    .applications-container h2 {
        text-align: center;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
