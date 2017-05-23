@extends('layouts.backend',['title'=>'Girls Manager'])

@section('content')


    @if(Session::get('message'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{ Session::get('message') }}
        </div>
    @endif

    <div class="row" id="new-record">
        <div class="col-md-12">
            <a class="btn btn-success pull-left" href="{{ action('AdminGirlsController@create') }}">Create new record</a>
        </div>
    </div>

    <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
            <th>DbId</th>
            <th>Name</th>
            <th>Is_active</th>
            <th>Img</th>
            <th>Location</th>
            <th>Created At</th>
            <th>Age</th>
            <th>Nationality</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @if($girls)
            @foreach($girls as $girl)
                <tr>
                    <td>{{$girl->id}}</td>
                    <td><a href="{{action('AdminGirlsController@edit',['id'=>$girl->id])}}"> {{$girl->name}}</a></td>
                    <td>
                        {{$girl->is_active==1?'Activated':'Deactivated'}}
                    </td>
                    <td>image here</td>
                    <td>{{$girl->location}}</td>
                    <td>{{$girl->created_at?$girl->created_at->diffForHumans():''}}</td>
                    <td>{{$girl->age}}</td>
                    <td>{{$girl->nationality}}</td>

                    <td>
                        <a href="{{ action('AdminGirlsController@edit',['id'=>$girl->id]) }}"
                           class="btn btn-info">Edit</a>
                    </td>
                    <td>

                        <form method="POST" action="{{ action('AdminGirlsController@destroy',['id'=>$girl->id]) }}"
                              onsubmit="return ConfirmDelete('{{$girl->name}}');">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="DELETE"/>
                            <input type="submit" class="btn btn-danger" name="submit" value="Delete"/>
                        </form>
                    </td>

                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

    {{ $girls->links() }}

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