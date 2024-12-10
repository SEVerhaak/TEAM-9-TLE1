
<form method="POST" action="{{ route('settings.password') }}">
    @csrf <!-- Include CSRF token for security -->
<h2>Oud Wachtwoord</h2>
<x-form-format-key>
    <input type="password" name="old password" placeholder="Voer je oude wachtwoord in" class="form-input">
</x-form-format-key>

<h2>Nieuw Wachtwoord</h2>
<x-form-format-key>
    <input type="password" name="new password" placeholder="Voer je nieuwe wachtwoord in" class="form-input">
</x-form-format-key>

<h2>Herhaal Nieuw Wachtwoord</h2>
<x-form-format-key>
    <input type="password" name="confirmed new password" placeholder="Herhaal je nieuwe wachtwoord" class="form-input">
</x-form-format-key>

<div>

    <button type="submit" class="transparent-button-2">Volgende stap</button>

</div>

</form>
