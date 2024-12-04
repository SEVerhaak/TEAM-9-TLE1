<h1>Juno unsubpage</h1>

<button>Schrijf uit</button>



{{$vacancy = 'test'}}



<form action="{{route('unsubscribes.destroy', $vacancy)}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button>Delete User</button>
</form>
