<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Details - {{ $business->name }}</title>
</head>
<body>

<main>
    <x-business-dashboard-sidebar id="{{$business->id}}"></x-business-dashboard-sidebar>

    <div class="right-container">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="edit-details-container">
            <h2>Details Bewerken</h2>

            <form method="POST" action="{{route('business.update', $business)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div>
                    <div>
                        <label for="name">Naam</label>
                        <input type="text" name="name" id="name" value="{{old('name') ?? $business->name}}">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{old('email') ?? $business->email}}">
                    </div>
                    <div>
                        <label for="phone_number">Telefoonnummer</label>
                        <input type="text" name="phone_number" id="phone_number" value="{{old('email') ?? $business->phone_number}}">
                    </div>
                    <div>
                        <label for="hq_location">Locatie</label>
                        <input type="text" name="hq_location" id="hq_location" value="{{old('hq_location') ?? $business->hq_location}}">
                    </div>

                    <input type="submit" name="submit" value="Opslaan">
                    <a href="{{route('business.dashboard', $business->id)}}">Annuleren</a>
                </div>

                <div>
                    <div>
                        <label for="description">Beschrijving</label>
                        <textarea name="description" id="description">{{old('description') ?? $business->description}}</textarea>
                    </div>
                    <div>
                        <label for="logo">Logo</label>
                        <input type=file name="logo" id="logo" accept="image/png, image/jpg, image/jpeg">
                    </div>
                    <div>
                        <label for="banner">Banner</label>
                        <input type=file name="banner" id="banner" accept="image/png, image/jpg, image/jpeg">
                    </div>
                </div>
            </form>
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

    .right-container {
        width: 100vw;
        display: flex;
        justify-content: center;
    }

    .edit-details-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        display: flex;
        gap: 2rem;
        flex-direction: row;
    }

    form div {
        display: flex;
        flex-direction: column;
    }

    form a {
        text-decoration: none;
    }

    textarea {
        height: 10rem;
        width: 15rem;
        resize: none;
        overflow-y: scroll; /* Vertical scrollbar when content overflows */
    }

    .text-icon-content-container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        gap: 0.5rem;
    }

    .text-icon-content-container div {
        display: flex;
        flex-direction: row;
        padding: 0;
        margin: 0;
        gap: 0.3rem;
    }

    .result-container {
        width: 20rem;
        background-color: white;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        margin: 2rem 1rem;
        border-radius: 0 30px 30px 30px;
    }

    .result-container h2 {
        overflow-wrap: break-word;
    }

    .result-container p {
        max-width: 100%;
        margin: 0.25rem 0;
        font-size: large;
    }

    .more-info {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        width: 100%;
        background-color: #b4085c;
        margin: 1rem 1rem 0 0;
        border: none;
        color: white;
        padding: 0.3rem 0;
        border-radius: 0 15px 15px 15px;
        font-size: large;
        font-weight: bold;
        text-decoration: none;
    }

    #cp-title {
        margin: 0.5rem 0;
    }
</style>
