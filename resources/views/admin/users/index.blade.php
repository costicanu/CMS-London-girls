@extends('layouts.backend')

@section('content')


    @if(Session::get('message'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{ Session::get('message') }}
        </div>
    @endif

    <div class="row" id="new-record">
        <a class="btn btn-success" href="{{ action('AdminUsersController@create') }}">Create new user</a>
    </div>

    <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Role</th>
            <th>Active</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->created_at?$user->created_at->diffForHumans():''}}</td>
                    <td>{{$user->updated_at?$user->updated_at->diffForHumans():''}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>
                        {{$user->is_active==1?'Activated':'Deactivated'}}
                    </td>
                    <td>
                        <a href="{{ action('AdminUsersController@edit',['id'=>$user->id]) }}"
                           class="btn btn-info">Edit</a>
                    </td>
                    <td>

                        <form method="POST" action="{{ action('AdminUsersController@destroy',['id'=>$user->id]) }}" onsubmit="return ConfirmDelete('{{$user->name}}');">
                            {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="DELETE" />
                        <input type="submit" class="btn btn-danger"  name="submit" value="Delete" />
                        </form>
                    </td>

                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

    {{ $users->links() }}

    <script type="text/javascript">

        function ConfirmDelete(name) {
            var x = confirm('Are you sure you want to delete ' + name + '?');
            if (x)
                return true;
            else
                return false;
        }

    </script>

@stop




