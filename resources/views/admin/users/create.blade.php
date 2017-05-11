<form method="post" action="{{action('AdminUsersController@store')}}" accept-charset="UTF-8">
    {!! csrf_field() !!}
    <input type="text" name="name" value="{{ old('name') }}" />

    <input type="submit" name="submit" value="submit" />

</form>