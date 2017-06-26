@extends('layouts.backend',['title'=>'Blog Controller'])

@section('content')


    @if(Session::get('message'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{ Session::get('message') }}
        </div>
    @endif

    <div class="row" id="new-record">
        <div class="col-md-12">
            <a class="btn btn-success pull-left" href="{{ action('AdminBlogController@create') }}">Create new blog post</a>
        </div>
    </div>

    <table class="table table-hover table-striped table-responsive">
        <thead>
        <tr>
            <th>DbId</th>
            <th>Title</th>
            <th>Is_active</th>
            <th>Img</th>
            <th>Created At</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><a href="{{action('AdminBlogController@edit',['id'=>$post->id])}}"> {{$post->title}}</a></td>
                    <td>
                        {{$post->is_active==1?'Activated':'Deactivated'}}
                    </td>
                    <td>image here</td>
                    <td>{{$post->created_at?$post->created_at->diffForHumans():''}}</td>


                    <td>
                        <a href="{{ action('AdminBlogController@edit',['id'=>$post->id]) }}"
                           class="btn btn-info">Edit</a>
                    </td>
                    <td>

                        <form method="POST" action="{{ action('AdminBlogController@destroy',['id'=>$post->id]) }}"
                              onsubmit="return ConfirmDelete('{{$post->title}}');">
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

    {{ $posts->links() }}

    <script type="text/javascript">

        function ConfirmDelete(title) {
            var x = confirm('Are you sure you want to delete ' + title + '?');
            if (x)
                return true;
            else
                return false;
        }

    </script>

@stop