@extends('layouts.backend')
@section('content')

    <meta name="_token" content="{!! csrf_token() !!}"/>

    <form method="post" action="{{action('AdminBlogController@update',$post->id)}}" enctype="multipart/form-data"
          accept-charset="UTF-8">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT"/>
        @if(count($errors)>0)
            <div class="alert danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">Title</label>
                <input type="text" name="title" value="{{ old('title',$post->title) }}" class="form-control"/>
            </div>
            <div class="form-group col-md-4">
                <label for="url">URL</label>
                <input type="text" name="url" value="{{ old('url',$post->url) }}" class="form-control"/>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="images">Image</label>
                <input type="file" name="image" accept="image/*" multiple>
            </div>

            @if($post->image)
                {{$post->image.'sssss'}}
                <div class="other-images">
                    <meta name="csrf-token" content="{{ csrf_token() }}"/>
                    <table class="table table-condensed">

                        <tbody>

                            <tr>
                                <td>
                                    <?php #var_dump($image->url)?>
                                    <a href="{{URL::to('/media/blog/original/'.$post->image)}}" data-lightbox="gallery"><img
                                                src="/media/blog/thumbnails/100x100/{{$post->image}}" class="thumbnail"/></a>

                                </td>


                            </tr>

                        </tbody>
                    </table>
                </div>
                @endif

        </div>


        <div class="form-group col-md-12">
            <label for="content">Content</label>
            <textarea name="content" class="form-control">{{ old('content',$post->content) }}</textarea>
        </div>

        <div class="form-group col-md-12">
            <label for="active">Activate post on website?</label>
            <input type="checkbox" name="is_active" value="1" {{ old('is_active',$post->is_active)?"checked":"" }} />
        </div>


        <div class="form-group top10">
            <div class="col-md-6">
                <input type="submit" name="submit" class="btn btn-primary" value="submit"/>
            </div>
            <div class="col-md-6">
                <a class="btn btn-default" href="{{action('AdminBlogController@index')}}">Cancel</a>
            </div>
        </div>


    </form>

    <script src="{{ URL::to('js/tinymce/tinymce.min.js') }}"></script>
    <script>tinymce.init({
            selector: "textarea",
            theme: "modern",
            width: 680,
            height: 300,
            subfolder: "",
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor filemanager"
            ],
            image_advtab: true,
            toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect forecolor backcolor | link unlink anchor | image media | print preview code"
        });
    </script>
    @stop


