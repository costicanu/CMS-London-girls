@extends('layouts.app')

@section('content')
    Contact page body<br/>
    variable $var1={{$var1}}
    @if(count($people))
        <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach

        </ul>

    @endif



@stop

