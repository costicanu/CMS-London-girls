@extends('layouts.backend')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Role</th>
            <th>Active</th>
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
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>


@stop

